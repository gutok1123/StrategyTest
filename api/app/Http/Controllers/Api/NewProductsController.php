<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewProductsController extends Controller
{
    public function saveProducts(Request $request)
    {
        //$data = $request->all();
         dd("Ok");
        return $this->json(["ola"]);
    }
}
