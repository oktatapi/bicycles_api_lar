<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    protected $fillable = [
        'brand',
        'type',
        'frame_size',
        'price',
    ];
}
