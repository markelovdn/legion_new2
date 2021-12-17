<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->hasOne(Country::class);
    }

    public function district()
    {
        return $this->hasOne(District::class);
    }

    public function region()
    {
        return $this->hasOne(Region::class);
    }

}
