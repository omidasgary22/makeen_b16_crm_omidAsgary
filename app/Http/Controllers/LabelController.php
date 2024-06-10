<?php

namespace App\Http\Controllers;

use App\Http\Requests\LabelRequest\CreateLabelRequest;
use App\Http\Requests\LabelRequest\EditLabelRequest;
use App\Models\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
           $Label = Label::with(['users','team',])->find($id);
        } else {
            $Label = Label::with(['users','team'])->orderBy('id', 'desc')
            ->paginate(10);
        }
        //$Label = Label::get();
        return response()->json(["Label"=> $Label]);
    }

     public function store(CreateLabelRequest $request)
{
    $Label = Label::create($request->toArray());
    $Label->users()->attach($request->users_ids);
    return response()->json($Label);
}
public function storeteamlabel(){

}

 public function edit(EditLabelRequest $request, string $id)
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
