<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
    ];
}
