<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    public function birthCertificate()
    {
        return $this->hasOne(BirthCertificate::class);
    }

    public function country()
    {
        return $this->hasOne(Country::class);
    }

    public function district()
    {
        return $this->hasOne(District::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function coaches()
    {
        return $this->belongsToMany(Coach::class)->withPivot('coach_type');
    }

    public function medicalPolicy()
    {
        return $this->belongsToMany(MedicalPolicy::class);
    }

    public function passport()
    {
        return $this->belongsTo(Passport::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class)->withPivot('org_type');
    }

    public function snils()
    {
        return $this->hasOne(Snils::class);
    }

    public function studyPlace()
    {
        return $this->hasOne(StudyPlace::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function insurance()
    {
        return $this->hasMany(Insurance::class);
    }

}
