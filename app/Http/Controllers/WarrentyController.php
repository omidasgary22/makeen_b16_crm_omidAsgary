<?php

namespace App\Http\Controllers;

use App\Http\Requests\WarrentyRequest\CreateWarrentyRequest;
use App\Http\Requests\WarrentyRequest\EditWarrentyRequest;
use App\Models\Warrenty;
use Illuminate\Http\Request;

class WarrentyController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $Warrenty = Warrenty::whit('products')->find($id);
        } else {
            $Warrenty = warrenty::whit('products')->orderBy('id', 'desc')
                ->paginate(10);
        }
        $Warrenty = warrenty::get();
        return response()->json(["warrenty" => $Warrenty]);
    }

<<<<<<< HEAD
    public function store(Request $request)
=======
    public function store(CreateWarrentyRequest $request)
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
    {
        $Warrenty = warrenty::create($request->toArray());
        return response()->json($Warrenty);
    }

<<<<<<< HEAD
    public function edit(Request $request, string $id)
=======
    public function edit(EditWarrentyRequest $request, string $id)
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
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
