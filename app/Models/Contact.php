<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//TBL_Contacto
class Contact extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'contacts';
    protected $fillable = [
        'first_name',
        'second_name',
        'first_lastname',
        'second_lastname',
        'email',
        'mobile',
        'message'
    ];
}
