<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }

    public function kindOfSport()
    {
        return $this->hasOne(KindsOfSport::class);
    }

    public function athletes()
    {
        return $this->belongsToMany(Athlete::class)->withPivot('created_at');;
    }



}
