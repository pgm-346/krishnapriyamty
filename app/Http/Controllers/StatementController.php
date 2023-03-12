<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deposite;

class StatementController extends Controller
{
    public function index()
    {

        $data = Deposite::paginate(8);
        return view('statement.index',compact('data'));
    }
}
