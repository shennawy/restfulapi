<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Seller;

class SellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller = Seller::has('products')->get();

        return response()->json(['data' => $seller], 200);
    }

    
    public function show($id)
    {
        $seller = Seller::has('products')->findOrFail($id);

        return response()->json(['data' => $seller], 200);
    }
}
