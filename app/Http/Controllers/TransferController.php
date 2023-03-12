<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deposite;

class TransferController extends Controller
{
    public function index()
    {
        return view('transfer.index');
    }

    public function store(Request $request)

    {

        request()->validate([

            'amount' => 'required',

            'user_id' =>'required',

            'type' => 'required',

            'details' => 'required',

        ]);

        $email = $request->transfer_id;

        $deposite = Deposite::select('balance')->orderby('id', 'desc')->first();
        $balance =  $deposite->balance;
    
        $debitTransfer =  $balance - $request->amount;

        $creditTransfer =  $balance + $request->amount;



       if($request->type == 'debit')
       {
         $request->details = "Transfer to $email";
         $request->balance = $debitTransfer;

       }
      else
       {
        $request->details = "Transfer from $email";

        $request->balance = $creditTransfer;
       }

        $transfer = new Deposite();

        $transfer->user_id = $request->user_id;
        $transfer->amount = $request->amount;
        $transfer->user_id = $request->user_id;
        $transfer->type = $request->type;
        $transfer->details = $request->details;
        $transfer->balance = $request->balance;
        $transfer->save();

        return redirect()->route('transfer.index')

                        ->with('success','Transfer created successfully.');

    }
}
