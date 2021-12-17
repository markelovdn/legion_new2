<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightCategory extends Model
{
    use HasFactory;

    public function age()
    {
        return $this->hasOne(Age::class);
    }
}
