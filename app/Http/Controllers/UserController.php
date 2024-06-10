<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Mail\UserMail;
=======
use App\Http\Requests\UserRequests\CreateUserRequest;
use App\Http\Requests\UserRequests\EditUserRequest;
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
use App\Models\User;
use Database\Seeders\usersTablesSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
<<<<<<< HEAD
            $users = User::with(['tikets','Orders','notes','labels','teams'])->find($id);
        } else {
            $users = User::with(['tikets','Orders','notes','labels','teams'])->orderBy('id', 'desc')
=======
            $users = User::with(['tikets', 'order', 'note', 'labelabl'])->find($id);
        } else {
            $users = User::with(['tikets', 'order', 'note', 'labelabl'])->orderBy('id', 'desc')
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
                ->paginate(10);
        }
        return response()->json($users);
    }

    public function single(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function store(CreateUserRequest $request)
    {
<<<<<<< HEAD
        //$path = $request->file('image_user')->store('public/image_user');
        $user = User::create($request->merge([
            //"image_user" => $path,
            "password" => Hash::make($request->password)
        ])->toArray());
        $user->assignRole('user');

        Mail::send( new UserMail($user));
        return response()->json($user);

=======
        if ($request->user()->can('create_user')) {
            $path = $request->file('image_user')->store('public/image_user');
            $users = User::create($request->merge(["image_user" => $path, "password" => Hash::make($request->password)])->toArr());
            $users->assignRole('user');
            return response()->json($users);
        } else {
            return response()->json('user does not have permission');
        }
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
    }

    public function delete(Request $request, $id)
    {
        if ($request->user()->can('delete_user')) {
            $user = User::destroy($id);
            return response()->json($user);
        } else {
            return response()->json('user does not have permission');
        }
    }

    public function edit(EditUserRequest  $request, string $id)
    {
        if ($request->user()->can('update_user')) {
            $user = User::where('id', $id)->update($request->merge(["password" => Hash::make($request->password)])->toArray());
            return response()->json($user);
        } else {
            return response()->json('user does not have permission');
        }
    }

    public function users()
    {
        $user = user::find(3);
        $orders = $user->orders;
    }
}



//
//'orders','factors','notes','tikets','team','labels'
