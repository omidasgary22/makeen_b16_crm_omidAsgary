<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResellerController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $resellers = reseller ::where('id', $id)->first();
        } else {
            $resellers  = DB::table('resellers')
                ->orderBy('id', 'desc')
                ->paginate(1);
        }
        $Reseller = DB::table('Resellers')->get();
        return response()->json(["factor" => $Reseller]);
    }

    public function store(Request $request)
    {
        $Resellers = DB::table('Resellers')->create($request->toArray());
        return response()->json($Resellers);
    }

    public function edit(Request $request, string $id)
    {
        $Reseller = Reseller::where('id', $id)->update($request->toArray());
        return response()->json($Reseller);
    }

    public function delete(string $id)
    {
        $Reseller =Reseller::destroy($id);
        return response()->json($Reseller);
    }
}
