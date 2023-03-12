<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deposite;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
      $data = User::join('deposite', 'deposite.user_id', '=', 'users.id')
      ->select('deposite.balance')->orderby('deposite.id', 'desc')->first();
        return view('home.index',compact('data'));
    }

}
