<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $fillable = [
        'owner', 
        'dob',
        'email',
        'idNumber', 
        'title', 
        'field', 
        'description',
        'district',
        'number',
        'image',
        'verified',
        'waAPI'
    ];
}
