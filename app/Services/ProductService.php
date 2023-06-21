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

    public function create(Request $request)
    {
        $cargo = $this->productRepository->create($request);
        return $cargo;
    }

    public function update(Request $request, $id)
    {
        $cargo = $this->productRepository->update($request, $id);
        return $cargo;
    }

    public function show(int $id) {
        return $this->productRepository->show($id);
    }

}
