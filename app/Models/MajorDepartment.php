<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorDepartment extends Model
{
    use HasFactory;


    protected $fillable=[

        'dname',
		'phoneno',
		'email',
		'address',




    ];
}
