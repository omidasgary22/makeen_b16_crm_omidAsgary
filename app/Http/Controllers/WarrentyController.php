<?php

namespace App\Http\Controllers;

use App\Models\Warrenty;
use Illuminate\Http\Request;

class WarrentyController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
           $Warrenty = Warrenty::where('id', $id)->first();
        } else {
            $Warrenty = warrenty::
            orderBy('id', 'desc')
            ->paginate(1);
        }
        $Warrenty = warrenty::get();
        return response()->json(["warrenty"=> $Warrenty]);
    }

     public function store(Request $request)
{
    $Warrenty = warrenty::create($request->toArray());
    return response()->json($Warrenty);
}

 public function edit(Request $request, string $id)
 {
    $Warrenty = warrenty::where('id', $id)->update($request->toArray());
    return response()->json($Warrenty);
 }

 public function delete(string $id)
 {
    $Warrenty = warrenty::destroy($id);
    return response()->json($Warrenty);
 }
}
