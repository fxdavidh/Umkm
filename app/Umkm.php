<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $fillable = [
        'owner', 
        'idNumber', 
        'dob',
        'title', 
        'field', 
        'description',
        'address',
        'district',
        'number',
        'image'
    ];
}
