<?php


namespace App\Http\Controllers;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Products;

class pagecontroller extends Controller
{
    //
    public function initial_page()
    {
        $prod = Products::all();
        return view('sale')->with('product',$prod);
    }

     public function sale()
    {
        $prod = $this->product->all();
        return view('product.sale')->with('sale',$prod);
    }
}
