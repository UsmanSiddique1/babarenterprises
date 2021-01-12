<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slip extends Model
{
    use HasFactory;

    protected $fillable=[
    	'customer_id',
'psttax',
'incometax',
'gslip',
'cnumber',
'cdate',
];
}
