<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest\CreateMessageRequest;
use App\Http\Requests\MessageRequest\EditMessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $Message = Message::with('tiket')->find($id);
        } else{
            $Message = Message::with('tiket')->orderBy('id', 'desc')
            ->paginate(10);
        }
       // $Message = Message::get();
        return response()->json(["message"=>$Message]);
    }
    public function store(CreateMessageRequest $request)
    {
        $Message = Message::create($request->toArray());
        return response()->json($Message);
    }
    public function edit(EditMessageRequest $request,string $id)
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
