<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyPlace extends Model
{
    use HasFactory;

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }

    public function athlete()
    {
        return $this->hasOne(Athlete::class);
    }
}
