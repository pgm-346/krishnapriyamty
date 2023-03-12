<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deposite;

class DepositeController extends Controller
{
    public function index()
    {
        return view('deposite.index');
    }

    public function store(Request $request)

    {

        request()->validate([

            'amount' => 'required',

            'user_id' =>'required',

            'type' => 'required'

        ]);

    $deposite = Deposite::select('balance')->orderby('id', 'desc')->first();

    if($deposite == '')
    {
        $request->balance =  $request->amount;
    }
    else
    {
        $request->balance = $deposite->balance + $request->amount;
    }
    $data = new Deposite();
    $data->amount = $request->amount;
    $data->user_id = $request->user_id;
    $data->type = $request->type;
    $data->details = $request->details;
    $data->balance = $request->balance;
    $data->save();

        return redirect()->route('deposite.index')

                        ->with('success','Deposite created successfully.');

    }
}
