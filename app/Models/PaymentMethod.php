<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Tbl_MetododePago
class PaymentMethod extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='payment_methods';
    protected $fillable=[
        'description_payment_methods'
    ];
}
