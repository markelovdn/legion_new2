<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionsRanksPoint extends Model
{
    use HasFactory;

    public function age()
    {
        return $this->hasMany(Age::class);
    }

    public function title()
    {
        return $this->hasMany(CompetitionsRanksTitle::class);
    }
}
