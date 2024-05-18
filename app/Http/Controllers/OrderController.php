<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest\CreateOrderRequest;
use App\Http\Requests\OrderRequest\EditOrderRequest;
use App\Models\order;
use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($id = null)
    {
        // dd();
        if ($id) {
            $orders = Order::with(['user', 'products', 'factors'])->find($id);
        } else {
            $orders = Order::with(['user', 'products', 'factors'])->orderBy('id', 'desc')
                ->paginate(5);
        }

        return response()->json($orders);
    }

    public function store(CreateOrderRequest $request)
    {
        $orders = Order::create($request->toArray());
        $orders->products()->attach($request->product_ids);
        return response()->json($orders);
    }

    public function edit(EditOrderRequest $request, string $id)
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
