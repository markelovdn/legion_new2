<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decree extends Model
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
        return $this->hasMany(Organization::class);
    }
}
