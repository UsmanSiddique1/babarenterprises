<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    

    protected $fillable=[
     
     'trade_name','customer_id','mdpt_id','sdpt_id','gsttax','psttax','incometax','ddate','punjabincometax','subtotal','status'


    ];
}
