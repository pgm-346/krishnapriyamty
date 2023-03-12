<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Validation\Rule;

use App\Models\Deposite;


class WithdrawController extends Controller
{
    public function index()
    {
        return view('withdarw.index');
    }

    public function store(Request $request)

    {

        request()->validate([

            'amount' => 'required',

            'user_id' =>'required',

            'type' => 'required',

            'details' => 'required',
 
        ]);
        $deposite = Deposite::select('balance')->orderby('id', 'desc')->first();
        $balance =  $deposite->balance;
        $request->balance =  $balance - $request->amount;
        
        $data = new Deposite();
        $data->amount = $request->amount;
        $data->user_id = $request->user_id;
        $data->type = $request->type;
        $data->details = $request->details;
        $data->balance = $request->balance;
        $data->save();
    
        return redirect()->route('withdarw.index')

                        ->with('success','Withdraw created successfully.');

    }
}
