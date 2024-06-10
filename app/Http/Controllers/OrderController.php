<?php

namespace App\Http\Controllers;

use App\Mail\FactorMail;
use App\Models\order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index($id = null)
    {
        // dd();
        if ($id) {
            $orders = Order::with(['User', 'products', 'factors'])->find($id);
        } else {
            $orders = Order::with(['User', 'products', 'factors'])->orderBy('id', 'desc')
                ->paginate(5);
        }

        return response()->json($orders);
    }

    public function store(request $request)
    {

        $orders = Order::create($request->toArray());
        $orders->products()->attach($request->product_ids);
        $user = User::find($request->user_id);
        Mail::send( new FactorMail($user));
        return response()->json($orders);
    }

    public function edit(Request $request, string $id)
    {
        $order = order::where('id', $id)->update($request->toArray());
        return response()->json($order);
    }

    public function delete($id)
    {
        $order = order::destroy($id);
        return response()->json($order);
    }
}
