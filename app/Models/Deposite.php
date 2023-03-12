<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposite extends Model
{
    use HasFactory;

    protected $table = 'deposite';
    protected $fillable = [

        'amount',
        'user_id',
        'type',
        'transfer_id',
        'details',
        'balance'

    ];
}
