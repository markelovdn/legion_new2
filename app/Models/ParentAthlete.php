<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentAthlete extends Model
{
    use HasFactory;

    public function athlete()
    {
        return $this->hasMany(Athlete::class);
    }

    public function passport()
    {
        return $this->hasOne(Passport::class);
    }

    public function snils()
    {
        return $this->hasOne(Snils::class);
    }

    public function workPlace()
    {
        return $this->hasMany(WorkPlace::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
