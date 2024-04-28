<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
           $Label = Label::where('id', $id)->first();
        } else {
            $Label = Label::
            orderBy('id', 'desc')
            ->paginate(1);
        }
        //$Label = Label::get();
        return response()->json(["Label"=> $Label]);
    }

     public function store(Request $request)
{
    $Label = Label::create($request->toArray());
    return response()->json($Label);
}

 public function edit(Request $request, string $id)
 {
    $Label = Label::where('id', $id)->update($request->toArray());
    return response()->json($Label);
 }

 public function delete(string $id)
 {
    $Label = Label::destroy($id);
    return response()->json($Label);
 }
}
