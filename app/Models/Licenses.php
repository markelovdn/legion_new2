<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licenses extends Model
{
    use HasFactory;

    public function athlete()
    {
        return $this->hasMany(Athlete::class);
    }

    public function coach()
    {
        return $this->hasMany(Coach::class);
    }

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }
}