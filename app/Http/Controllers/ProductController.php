<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Product as ModelsProduct;
use Illuminate\Database\Eloquent\HigherOrderBuilderProxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Return a list of products, optionally filtered by id.
     *
     * @param int $id (optional) If provided, returns the product with the given id.
     *                          If not provided, returns a descending-ordered list of the most recent 10 products.
     *
     * @return \Illuminate\Support\Facades\Response
     */
    public function index($id = null)
    {
        if ($id) {
            $products = product::with(['warrenties','orders','labelabl'])->find($id);
        } else {
            $products = Product::with(['warrenties','orders','labelabl'])->orderBy('id', 'desc')
                ->paginate(1);
        }
        //$products = DB::table('products')->get();
        return response()->json(["products" => $products]);
    }

    /**
     * Store a new product along with its warranties.
     *
     * @param Request $request The request object containing product and warranty_ids arrays.
     *
     * @return \Illuminate\Support\Facades\Response
     */
    public function store(request $request)
    {
        $path = $request->file('image_path')->store('public/image');
        $products = Product::create($request->toArray());
        $products->addMediaFormRequest('image')->toMediaCollection();
        // $products->warrenties()->attach($request->warrenty_ids);
        return response()->json($products);
    }

    public function edit(Request $request, string $id)
    {
        $product = Product::where('id', $id)->update($request->toArray());
        return response()->json($product);
    }

    /**
     * Delete a product with the given id.
     *
     * @param int $id The id of the product to be deleted.
     *
     * @return \Illuminate\Support\Facades\Response
     */
    public function delete($id)
    {
        $product = product::where('id', $id)->delete();
        return response()->json($product);
    }
}
