<?php

namespace App\Http\Controllers;

use App\Mail\FactorMail;
use App\Models\factor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FactorController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $Factors = Factor::with(['order'])->find($id);
        } else {
            $Factors = Factor::with(['order'])->orderBy('id', 'desc')
                ->paginate(1);
        }

        //$Factors = Factor::get();
        return response()->json(["factors" => $Factors])();
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $Factors = Factor::create($request->toArray());
        Mail::to($user)->send(new FactorMail($user));
        return response()->json($Factors);
    }

    public function edit(Request $request, string $id)
    {
        $Factors = Factor::where('id', $id)->update($request->toArray());
        return response()->json($Factors);
    }

    public function delete(string $id)
    {
        $Factors = Factor::destroy($id);
        return response()->json($Factors);
    }
}
