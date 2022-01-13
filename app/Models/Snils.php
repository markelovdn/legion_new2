<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snils extends Model
{
    use HasFactory;

    public function athlete()
    {
        return $this->hasOne(Athlete::class);
    }

    public function parent()
    {
        return $this->hasOne(ParentAthlete::class);
    }
}
