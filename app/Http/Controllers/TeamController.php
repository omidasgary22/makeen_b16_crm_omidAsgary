<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
           $Team = Team::where('id', $id)->first();
        } else {
            $Teams = Team::
            orderBy('id', 'desc')
            ->paginate(1);
        }
        $Team = Team::get();
        return response()->json(["team"=> $Team]);
    }

     public function store(Request $request)
{
    $Team = Team::insert($request->toArray());
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