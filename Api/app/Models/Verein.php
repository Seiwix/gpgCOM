<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verein extends Model
{
    use HasFactory;
    protected $fillable = [
        'tittle',
        'description',
        'image',
    ];
}
