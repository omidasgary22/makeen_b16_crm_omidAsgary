<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Mail\FactorMail;
=======
use App\Http\Requests\FactorRequest\CreateFactorRequest;
use App\Http\Requests\FactorRequest\EditFactorRequest;
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
use App\Models\factor;
use GuzzleHttp\Promise\Create;
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

    public function store(CreateFactorRequest $request)
    {
        $user = $request->user();
        $Factors = Factor::create($request->toArray());
        Mail::to($user)->send(new FactorMail($user));
        return response()->json($Factors);
    }

    public function edit(EditFactorRequest $request, string $id)
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
