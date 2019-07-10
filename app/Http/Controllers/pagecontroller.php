<?php


namespace App\Http\Controllers;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Http\Requests\ProductRequest;

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
        return view('initial_page')->with('initial_page',$prod);
    }
    public function formAdicionar()
    {
        $prod = Products::all();

        return view('form-adicionar')->with('Product', $prod);
    }
    public function adicionar(ProductRequest $request)
    {
        Product::create($request->input());
        return redirect()->action('pagecontroller@initial_page');

    }
    public function editar(ProductRequest $request)
    {

        Product::find($request->id)->update($request->input());

        return redirect()->action('pagecontroller@initial_page');
    }
    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        Product::destroy($id);



        return redirect()->action('pagecontroller@posts');
    }
}
