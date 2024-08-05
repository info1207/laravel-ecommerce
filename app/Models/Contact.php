<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
            'name', 'email', 'phone', 'message',
        ];
     protected $table = 'contact';
     public $timestamps = false;

}
