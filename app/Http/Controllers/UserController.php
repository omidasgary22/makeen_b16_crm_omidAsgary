<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Seeders\usersTablesSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $user =  User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json('user not found');
        }

        if (!hash::check($request->password, $user->password)) {
            return response()->json('pass error');
        }
        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json(["Token" => $token]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index($id = null)
    {
        if ($id) {
            $users = User::with(['tikets','Order','note','labelabl'])->find($id);
        } else {
            $users = User::with(['tikets','Order','note','labelabl'])->orderBy('id', 'desc')
                ->paginate(10);
        }
        return response()->json($users);
    }

    public function single(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $path = $request->file('image_user')->store('public/image_user');
        $users = User::create($request->merge([
            "image_user" => $path,
            "password" => Hash::make($request->password)
        ])->toArray());
        return response()->json($users);
        $users->assignRole('user');
    }

    public function delete(string $id)
    {
        $user = User::destroy($id);
        return response()->json($user);
    }

    public function edit(Request $request, string $id)
    {
        $user = User::where('id', $id)->update($request->merge([
            "password" => Hash::make($request->password)
        ])->toArray());
        return response()->json($user);
    }

    public function users()
    {
        $user = user::find(3);
        $orders = $user->orders;
    }
}



//
//'orders','factors','notes','tikets','team','labels'
