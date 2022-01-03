<?php

namespace App\Http\Controllers;
use App\Productos;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
class ProductoController extends Controller
{
   
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    
     return view('productos.index',[
        'productos'=>Productos::latest()->paginate()
     ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create',[
            'producto'=>new Productos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {

        Productos::create( $request->validated() );

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $producto)
    {
       return view('productos.show', [
        'producto'=> $producto
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $producto)
    {
        return view('productos.edit', [
        'producto'=> $producto
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Productos $producto, SaveProjectRequest $request)
    {
        $producto->update($request->validated());

        return redirect()->route('productos.show', $producto );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
