<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login(Request $request)
    {
$user =  User::where('email', $request->email)->first();
if(!$user){
    return response()->json('user not found');
}

if(!hash::check($request->password, $user->password)){
    return response()->json('pass error');

}
$token = $user->createToken($request->email)->plainTextToken;
return response()->json(["Token" => $token]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return response()->json($users);
    }

    public function single(string $id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $users = User::create($request->merge([
            "password" => Hash::make ($request->password)
        ])->toArray());
        return response()->json($users);
    }

    public function delete(string $id)
    {
        $user = User::where('id', $id)->delete();
        return response()->json($user);
    }

    public function edit(Request $request, string $id)
    {
        $user = DB::table('users')->where('id', $id)->update($request->merge([
            "password" => Hash::make($request->password)
        ])->toArray());
        return response()->json($user);
    }

}
