<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportsCategory extends Model
{
    use HasFactory;

    public function athlete()
    {
        return $this->hasMany(Athlete::class);
    }

    public function title()
    {
        return $this->hasOne(SportsCategoriesTitle::class);
    }
}
