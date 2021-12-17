<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttestationRezult extends Model
{
    use HasFactory;

    public function athlete()
    {
        return $this->hasOne(Athlete::class);
    }

    public function tqtitle()
    {
        return $this->hasOne(Tqtitle::class);
    }
}
