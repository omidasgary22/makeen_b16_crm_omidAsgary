<?php

namespace App\Http\Controllers;

use App\Models\factor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FactorController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $Factors = Factor::where('id', $id)->first();
        } else {
            $Factors = DB::table('Factor')
                ->orderBy('id', 'desc')
                ->paginate(1);
        }
        $Factor = DB::table('Factor')->get();
        return response()->json(["factor" => $Factor]);
    }

    public function store(Request $request)
    {
        $Factors = DB::table('Factors')->insert($request->toArray());
        return response()->json($Factors);
    }

    public function edit(Request $request, string $id)
    {
        $Factor =Factor::where('id', $id)->update($request->toArray());
        return response()->json($Factor);
    }

    public function delete(string $id)
    {
        $Factor =Factor::destroy($id);
        return response()->json($Factor);
    }
}
