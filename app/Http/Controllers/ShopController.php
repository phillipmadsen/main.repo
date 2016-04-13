<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Repositories\Admin\ProductRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Admin\Product;
use App\Http\Requests;

class ShopController extends Controller
{



    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;

    }


     public function index()
    {

        $products = $this->productRepository->all();

        return view('shop.index')->with('products', $products);
       // return view('shop/index');
        // return view('home');
       // return View::make('layouts.canvas');
    }

}
