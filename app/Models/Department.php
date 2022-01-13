<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function athletes()
    {
        return $this->belongsToMany(Athlete::class)->withPivot('coach_type');
    }
}
