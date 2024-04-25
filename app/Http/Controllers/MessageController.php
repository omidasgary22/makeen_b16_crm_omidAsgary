<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $Message = Message::where('id',$id)->first();
        } else{
            $Message = Message::orderBy('id', 'desc')
            ->paginate(1);
        }
        $Message = Message::get();
        return response()->json(["message"=>$Message]);
    }
    public function store(Request $request)
    {
        $Message = Message::insert($request->toArray());
        return response()->json($Message);
    }
    public function edit(Request $request,string $id)
    {
        $Message = Message::where('id', $id)->update($request->toArray());
        return response()->json($Message);
    }
    public function delete(string $id)
    {
        $Message = Message::destroy($id);
        return response()->json($Message);
    }
}
