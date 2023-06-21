<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        $product = Product::orderBy('id', 'asc')->get();
        return response()->json(['data' => $product]);
    }


    public function create(Request $request)
    {
        $cargo = Product::create($request->all());
        return $cargo;
    }

    public function update(Request $request, $id)
    {
        $cargo = Product::where('id', $id)->update($request->all());
        return $cargo;
    }


    /**
     * @inheritDoc
     */
    public function show(int $id)
    {
        if (!$product = Product::find($id))
            return response()->json(['error' => 'Produto não encontrado'], 404);

        return response()->json(['data' => $product]);
    }
}
