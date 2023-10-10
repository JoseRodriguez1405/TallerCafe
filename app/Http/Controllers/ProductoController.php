<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Producto;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto=Producto::orderBy('id','DESC')->paginate(10);
        return view('producto.index',compact('producto')); 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos=[
            'id'=>'required|string|max:100',
            'nombre'=>'required|string|max:100',
            'lote'=>'required|string|max:100',
            'unidad'=>'required|int',
            'precio'=>'required|int',
            'tipo'=>'required|string',
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $pro=new Producto;
        $pro->id=$request->get('id');
        $pro->nombre=$request->get('nombre');
        $pro->lote=$request->get('lote');
        $pro->unidad=$request->get('unidad');
        $pro->precio=$request->get('precio');
        $pro->tipo=$request->get('tipo');
        

        $pro->save();

        return Redirect::to('producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pro=Producto::findOrFail($id);
        return view('producto.edit', compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $campos=[
            'id'=>'required|string|max:100',
            'nombre'=>'required|string|max:100',
            'lote'=>'required|string',
            'unidad'=>'required|int',
            'precio'=>'required|int',
            'tipo'=>'required|string|max:100',
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $pro=Producto::findOrFail($id);
        $pro->id=$request->get('id');
        $pro->nombre=$request->get('nombre');
        $pro->lote=$request->get('lote');
        $pro->unidad=$request->get('unidad');
        $pro->precio=$request->get('precio');
        $pro->tipo=$request->get('tipo');
        $pro->save();

        return Redirect::to('producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pro=Producto::findOrFail($id);
        Producto::destroy($id);


        $pro->delete();


         return Redirect::to('producto');
    }
}
