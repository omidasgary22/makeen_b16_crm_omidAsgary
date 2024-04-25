<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use Illuminate\Database\Eloquent\HigherOrderBuilderProxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $products = product::where('id', $id)->first();
        } else {
            $products = DB::table('products')
            ->orderBy('id', 'desc')
            ->paginate(1);
        }
        $products = DB::table('products')->get();
        return response()->json(["products" => $products]);
    }

    public function store(request $request)
    {
        $products = DB::table('products')->insert($request->toArray());
        return response()->json($products);
    }

    public function edit(Request $request, string $id)
    {
        $product = DB::table('products')->where('id', $id)->update($request->toArray());
        return response()->json($product);
    }

    public function delete($id)
    {
        $product = DB::table('products')->where('id', $id)->delete();
        return response()->json($product);
    }
}
