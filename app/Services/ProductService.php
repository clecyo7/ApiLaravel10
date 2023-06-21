<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    public function __construct(protected ProductRepository $productRepository){}

    public function index(Request $request) {
        return $this->productRepository->index($request);
    }

    public function show(int $id) {
        return $this->productRepository->show($id);
    }

}