<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
           $Team = Team::with(['user','task','label'])->find($id);
        } else {
            $Team = Team::with(['user','task','label'])->orderBy('id', 'desc')
            ->paginate(10);
        }
        //$Team = Team::get();
        return response()->json(["team"=> $Team]);
    }

     public function store(Request $request)
{
    $Team = Team::create($request->toArray());
    $Team->label()->attach($request->Team_ids);
    return response()->json($Team);
}

 public function edit(Request $request, string $id)
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
