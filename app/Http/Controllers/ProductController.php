<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->productService->index($request);
    }


    public function store(ProductRequest $request)
    {
        $cargo = $this->productService->create($request);
        return $cargo;
    }


    public function update(Request $request, $id)
    {
        $cargo = $this->productService->update($request, $id);
        return $cargo;
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         return $this->productService->show($id);
    }

}
