<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trader extends Model
{
    use HasFactory;

    protected $fillable=[

'image',
'tname',
'phoneno',
'email',
'ntn',
'strn',

    ];

}
