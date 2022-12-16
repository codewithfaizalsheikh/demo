<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'address',
        'city',
        'state',
        'zip',


    ];

    protected $dates = [

        'updated_at',
        'created_at',

    ];

}
