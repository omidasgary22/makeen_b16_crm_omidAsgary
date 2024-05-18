<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest\CreateTaskRequest;
use App\Http\Requests\TaskRequest\EditTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
           $Task = Task::with(['user','team','taskable'])->find($id);
        } else {
            $Task = Task::with(['user','team','taskable'])->orderBy('id','desc')
            ->paginate(1);
        }
       // $Task = Task::get();
        return response()->json($Task);
    }

     public function store(CreateTaskRequest $request)
{
    $Task = Task::create($request->toArray());
    return response()->json($Task);
}

 public function edit(EditTaskRequest $request, string $id)
 {
    // dd('here');
    $Task = Task::where('id', $id)->update($request->toArray());
    return response()->json($Task);
 }

 public function delete(string $id)
 {
    $Task = Task::destroy($id);
    return response()->json($Task);
 }

}
