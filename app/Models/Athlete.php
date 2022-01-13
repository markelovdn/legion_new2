<?php

namespace App\Models;

use Algolia\AlgoliaSearch\Http\Psr7\Request;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Athlete extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['firstname', 'secondname', 'patronymic'];

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
        return $this->belongsToMany(Group::class)->withPivot('created_at');;
    }

    public function coaches()
    {
        return $this->belongsToMany(Coach::class)->withPivot('coach_type');
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class)->withPivot('org_type');
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

    //hasOne
    public function insurance()
    {
    return $this->hasOne(Insurance::class);
    }

    //hasMany
    public function parents()
    {
        return $this->belongsToMany(Parents::class, 'athlete_parents', 'athlete_id', 'parents_id');
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }

    public function updateAthleteCoach ($request)
    {
        if (!$request->input('coach2') && !$request->input('coach3')) {
            $athlete = Athlete::with(['coaches'])->find($request->input('id'));
            $athlete->coaches()->sync([
                $request->input('coach1') => ['coach_type' => 1],
                $request->input('coach4') => ['coach_type' => 4],
            ]);
        }
        elseif (!$request->input('coach2')) {
            $athlete = Athlete::with(['coaches'])->find($request->input('id'));
            $athlete->coaches()->sync([
                $request->input('coach1') => ['coach_type' => 1],
                $request->input('coach3') => ['coach_type' => 3],
                $request->input('coach4') => ['coach_type' => 4],
            ]);
        }
        elseif (!$request->input('coach3')) {
            $athlete = Athlete::with(['coaches'])->find($request->input('id'));
            $athlete->coaches()->sync([
                $request->input('coach1') => ['coach_type' => 1],
                $request->input('coach2') => ['coach_type' => 2],
                $request->input('coach4') => ['coach_type' => 4],
            ]);
        }
        else {
            $athlete = Athlete::with(['coaches'])->find($request->input('id'));
            $athlete->coaches()->sync([
                $request->input('coach1') => ['coach_type' => 1],
                $request->input('coach2') => ['coach_type' => 2],
                $request->input('coach3') => ['coach_type' => 3],
                $request->input('coach4') => ['coach_type' => 4],
            ]);
        }
    }

    public function updateAthleteOrg ($request)
    {

    }


}
