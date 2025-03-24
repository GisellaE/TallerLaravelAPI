<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones'; 
    protected $primaryKey = 'id_phone'; // 🔹 Especificamos la clave primaria

    protected $fillable = [
        'phone_brand',
        'phone_model',
        'phone_price',
        'phone_display_size',
        'phone_is_smartphone',
    ];

    public $incrementing = true; // 🔹 Indica que la clave primaria es autoincremental
    protected $keyType = 'int';  // 🔹 Indica que la clave primaria es un entero
}




