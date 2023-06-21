<?php

namespace App\Repositories;

use App\Models\Product;

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
