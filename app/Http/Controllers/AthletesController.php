<?php

namespace App\Http\Controllers;

use App\Filters\AthleteFilter;
use App\Models\Athlete;
use App\Models\Passport;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AthletesController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(AthleteFilter $athleteFilter, Request $request)
    {
        $athletes = Athlete::filter($athleteFilter)->get();

        return view('athlete/all', compact(['athletes']));
    }

    public function findOne ($id)
    {
        $athlete = Athlete::with(['groups.departments', 'passport', 'snils', 'coaches', 'organizations'])->find($id);

        return view('athlete/card', compact('athlete'));
    }

    public function store(Request $request) {
        $athlete = new Athlete();
        $id = $athlete->getAttribute('id');

        $athlete->secondname = $request->secondname;
        $athlete->firstname = $request->firstname;
        $athlete->patronymic = $request->patronymic;
        $athlete->dateofbirth = $request->dateofbirth;
        $athlete->gender = $request->gender;
//        $athlete->photo = $request->photo;
//        $athlete->address = $request->address;
//        $athlete->studyplace_id = $request->studyplace_id;
//        $athlete->country_id = $request->country_id;
//        $athlete->district_id = $request->district_id;
//        $athlete->region_id = $request->region_id;
//        $athlete->passport_id = $request->passport_id;

        $athlete->save();
        return $id;
    }

    public function update(Request $request, $id) {

        $athlete = Athlete::find($id);

        $athlete->name = $request->secondname;

        $athlete->save();
    }

    public function updatePassport(PassportsController $passport, Request $request)
    {
        $passport = $passport->store($request);

        $athlete = Athlete::find($request->input('id'));
        $passport = Passport::find($passport);

        $athlete->passport()->associate($passport);

        $athlete->save();
        return back();
    }

    public function uploadPhoto(Request $request, $id) {
        $path = $request->file('photo')
            ->storeAs('athletephoto',$id.'_'.$request->input('secondname').'_'.$request->input('firstname').'.jpg');
        return $path;
    }

    public function formEditMainInfo ($id)
    {
        $athlete = Athlete::find($id);

        return view('athlete/editmaininfo', compact('athlete'));
    }

    public function updateMainInfo (Request $request)
    {
        $athlete = Athlete::find($request->id);

        $athlete->secondname = $request->secondname;
        $athlete->firstname = $request->firstname;
        $athlete->patronymic = $request->patronymic;
        $athlete->dateofbirth = $request->dateofbirth;
        $athlete->status = $request->status;
        $athlete->gender = $request->gender;
        $athlete->photo = $this->uploadPhoto($request, $request->id);

        $athlete->save();
        return redirect("/athlete/$request->id");
    }

    public function formEditCoachInfo ($id)
    {
        $coaches = DB::table('coaches')
            ->leftJoin('athlete_coach', 'coaches.id', '=', 'athlete_coach.coach_id')
            ->select('coaches.id', 'coaches.secondname', 'coaches.firstname', 'coaches.patronymic',
                'athlete_coach.coach_type', 'athlete_coach.athlete_id')
            ->get();

        $athlete = Athlete::with(['coaches'])->find($id);

        return view('athlete/editcoachinfo', compact('athlete', 'coaches'));
    }

    public function updateCoachInfo (Athlete $athlete, Request $request)
    {
        $athlete->updateAthleteCoach($request);
        return redirect("/athlete/$request->id");
    }

    public function formEditOrgsInfo ($id)
    {
        $coaches = DB::table('coaches')
            ->leftJoin('athlete_coach', 'coaches.id', '=', 'athlete_coach.coach_id')
            ->select('coaches.id', 'coaches.secondname', 'coaches.firstname', 'coaches.patronymic',
                'athlete_coach.coach_type', 'athlete_coach.athlete_id')
            ->get();

        $athlete = Athlete::with(['coaches'])->find($id);

        return view('athlete/editorgsinfo', compact('athlete', 'coaches'));
    }

    public function updateOrgsInfo (Athlete $athlete, Request $request)
    {
        $athlete->updateAthleteOrg($request);
        return redirect("/athlete/$request->id");
    }
}

