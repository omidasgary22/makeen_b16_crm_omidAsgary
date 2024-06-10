<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest\CreateTeamRequest;
use App\Http\Requests\TeamRequest\EditTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
<<<<<<< HEAD
           $Team = Team::with(['users','tasks','label','labelabl'])->find($id);
        } else {
            $Team = Team::with(['users','tasks','label','labelabl'])->orderBy('id', 'desc')
            ->paginate(10);
=======
            $Team = Team::with(['user', 'tasks', 'label', 'labelabl'])->find($id);
        } else {
            $Team = Team::with(['user', 'tasks', 'label', 'labelabl'])->orderBy('id', 'desc')
                ->paginate(10);
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
        }
        //$Team = Team::get();
        return response()->json(["team" => $Team]);
    }

    public function store(CreateTeamRequest $request)
    {
        $Team = Team::create($request->toArray());
        $Team->label()->attach($request->Team_ids);
        return response()->json($Team);
    }

    public function edit(EditTeamRequest $request, string $id)
    {
        // dd('here');
        $Team = Team::where('id', $id)->update($request->toArray());
        return response()->json($Team);
    }

    public function delete(string $id)
    {
        $Team = Team::destroy($id);
        return response()->json($Team);
    }
}
