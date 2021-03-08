<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [

        'contact_fname', 'contact_lname','contact_email','contact_subject','contact_message'

    ];  
}
