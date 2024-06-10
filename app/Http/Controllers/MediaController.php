<?php

namespace App\Http\Controllers;

use App\Models\media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index(){
        $media = media::get();
        return response()->json($media);
    }
    public function create(Request $request){
        $media = media::create($request->toArray());
        return response()->json($media);
    }
    public function edit(Request $request,$id){
        $media = media::where('id','id')->update($request->toArray());
        return response()->json($media);
    }
    public function delete($id){
        $media = media::destroy($id);
        return response()->json($media);
}
