<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlipInvoice extends Model
{
    use HasFactory;

    protected $fillable=['slip_id',
'invoice_id'];
}
