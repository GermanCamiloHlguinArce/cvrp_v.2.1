<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Tbl_Rol
class Role extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='roles';
    protected $fillable=[
        'description_role'
    ];
}
