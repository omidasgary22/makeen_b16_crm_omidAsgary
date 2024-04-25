<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
           $Note = Note::where('id', $id)->first();
        } else {
            $Note = Note::
            orderBy('id', 'desc')
            ->paginate(1);
        }
        $Note = Note::get();
        return response()->json(["note"=> $Note]);
    }

     public function store(Request $request)
{
    $Note = Note::insert($request->toArray());
    return response()->json($Note);
}

 public function edit(Request $request, string $id)
 {
    $Note = Note::where('id', $id)->update($request->toArray());
    return response()->json($Note);
 }

 public function delete(string $id)
 {
    $Note = Note::destroy($id);
    return response()->json($Note);
 }
 
}
