<?php


namespace App\Http\Controllers;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Http\Requests\ProductRequest;

class pagecontroller extends Controller
{
    //
    public function sales()
    {
        $dados = Products::all();
        return view('sales')->with('sales',$dados);
    }


    public function formAdicionar()
    {
        $prod = Products::all();

        return view('form-adicionar')->with('Product', $prod);
    }
    public function adicionar(ProductRequest $request)
    {
        Product::create($request->input());
        return redirect()->action('pagecontroller@sales');

    }
    public function editar(ProductRequest $request)
    {

        Product::find($request->id)->update($request->input());

        return redirect()->action('pagecontroller@sales');
    }
    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        Product::destroy($id);



        return redirect()->action('pagecontroller@sales');
    }
}
