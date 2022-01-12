<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'account',
        'text',
        'price',
    ];

    public static function total()
    {
        return self::sum('price');
    }
}
