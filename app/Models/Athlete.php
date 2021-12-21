<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    //beelongsTo
    public function birthCertificate()
    {
        return $this->belongsTo(BirthCertificate::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function medicalPolicy()
    {
        return $this->belongsTo(MedicalPolicy::class);
    }

    public function passport()
{
    return $this->belongsTo(Passport::class);
}

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function snils()
{
    return $this->belongsTo(Snils::class);
}

    public function studyPlace()
    {
        return $this->belongsTo(StudyPlace::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //beelongsToMany
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function coaches()
    {
        return $this->belongsToMany(Coach::class)->withPivot('coach_type');
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class)->withPivot('org_type');
    }

    //hasOne
    public function insurance()
{
    return $this->hasOne(Insurance::class);
}


}
