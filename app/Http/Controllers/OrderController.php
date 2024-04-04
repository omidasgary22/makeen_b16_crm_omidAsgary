<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $orders = DB::table('oeders')->where('id', $id)->first();
        } else {
            $orders = DB::table('orders')
            ->orderBy('id', 'desc')
            ->paginate(1);
        }
        $orders = DB::table('orders')->get();
        return response()->json(["orders" => $orders]);
    }

    public function store(request $request)
    {
        $orders = DB::table('orders')->insert($request->toArray());
        return response()->json($orders);
    }

    public function edit(Request $request, string $id)
    {
        $order = DB::table('orders')->where('id', $id)->update($request->toArray());
        return response()->json($order);
    }

    public function delete($id)
    {
        $order = DB::table('orders')->where('id', $id)->delete();
        return response()->json($order);
    }
}
