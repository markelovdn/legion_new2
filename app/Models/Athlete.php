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

    public function firstCoach()
    {
        return $this->hasOne(Coach::class);
    }

    public function secondCoach()
    {
        return $this->hasOne(Coach::class);
    }

    public function thirdCoach()
    {
        return $this->hasOne(Coach::class);
    }

    public function realCoach()
    {
        return $this->hasOne(Coach::class);
    }

    public function group()
    {
        return $this->hasOne(Group::class);
    }

    public function medicalPolicy()
    {
        return $this->hasOne(MedicalPolicy::class);
    }

    public function passport()
    {
        return $this->hasOne(Passport::class);
    }

    public function region()
    {
        return $this->hasOne(Region::class);
    }

    public function scOrganization()
    {
        return $this->hasOne(Organization::class);
    }

    public function ssOrganization()
    {
        return $this->hasOne(Organization::class);
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

}
