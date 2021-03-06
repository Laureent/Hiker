<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    use HasFactory;

    protected $fillable = [
      'place',
      'length',
      'difficulty',
        'description',
        'nationalpark',
      'img',
      'map',
    ];
}
