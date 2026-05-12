<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'invoice_number',
    'customer_name',
    'customer_number',
    'status',
    'notes',
    'is_deleted'
];
}
