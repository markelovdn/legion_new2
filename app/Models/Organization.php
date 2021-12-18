<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    public function athletes()
    {
        return $this->belongsToMany(Athlete::class)->withPivot('coach_type');
    }
}
