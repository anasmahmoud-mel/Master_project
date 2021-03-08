<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [

        'login_name', 'login_email','login_password',

    ];
}
