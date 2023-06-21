<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
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
        //busca na base se já existi
        $productSearch = Product::Where('name', '=', "$request->name")->first();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $name = Str::kebab($request->name);
            $extension = $request->image->extension();
            $nameFile = "{$name}.{$extension}";
        }

        // se não existir será feito o cadastro
        if (!isset($productSearch->name)) {
            DB::beginTransaction();
            try {
                $product = new Product();
                $product->name = $request->name;
                $product->description = $request->description;
                $product->image = $nameFile;
                if ($product->save()) {
                    $upload = $request->image->storeAs('products', $nameFile);
                    if (!$upload)
                        return response()->json(['error' => 'Fail_Upload'], 500);

                    DB::commit();
                    return response()->json(['status' => 'success', 'message' => 'Produto foi cadastrado.', 201]);
                }
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }

            //caso já exista na base devolve o erro.
        } else {
            return response()->json(['status' => 'error', 'message' => 'Produto já existente na base', 500]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         return $this->productService->show($id);
    }


}
