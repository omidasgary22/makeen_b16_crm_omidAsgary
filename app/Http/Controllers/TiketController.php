<?php

namespace App\Http\Controllers;

use App\Http\Requests\TiketRequest\CreateTiketRequest;
use App\Http\Requests\TiketRequest\EditTiketRequest;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index($id = null)
    {
        //$tiket=Tiket::with('message')->get()->toArray();
        if ($id) {
            $Tiket = Tiket::with('message')->find($id);
        } else {
            $Tiket = Tiket::with('message')->orderBy('id', 'desc')
            ->paginate(10);
        }
       // $Tiket = Tiket::get();
        return response()->json(["tiket"=>$Tiket]);
    }
    public function Store(CreateTiketRequest $request)
    {
        $Tiket = Tiket::create($request->toArray());
        return response()->json($Tiket);
    }
    public function edit(EditTiketRequest $request,string $id)
    {
        $Tiket = Tiket::where('id', $id)->update($request->toArray());
        return response()->json($Tiket);
    }
    public function delete(string $id)
    {
        $Tiket = Tiket::destroy($id);
        return response()->json($Tiket);
    }

}
