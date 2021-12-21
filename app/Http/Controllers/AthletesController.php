<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Group;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class AthletesController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

        $athletes = Athlete::query();
        $athletes->with('groups')->whereHas('groups', function (Builder $query) {
            $query->where('title', 'like', 'Группа 1');})->get();
        $groups = Group::all();
//        $athletes = Athlete::with('groups')->whereHas('groups', function (Builder $query) {
//            $query->where('title', 'like', '');})->get();
//        $groups = Group::all();
        return view('athlete/athlete', compact('athletes', 'groups'));
    }
}
//['athletes'=>$athletes, 'organizations'=>$organizations]
