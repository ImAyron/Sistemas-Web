<?php

namespace App\Http\Controllers;

use App\Models\produtos;
use App\Models\notas;
use Illuminate\Http\Request;

class pedidos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $count=produtos::count();
        $pedidos=produtos::orderBy('id')->get(); 
        $notas=notas::orderBy('id')->get(); 
        $countN=notas::count();
        $mesa=10; 
        return view('pedidos.index',['notas'=>$notas,'countN'=>$countN,'mesa'=>$mesa,'pedidos'=>$pedidos,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        produtos::create($request->all());
        session()->flash('mensagem', 'nota cadastrada com sucesso!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pedidos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(produtos $produto)
    {
        $produto->delete();


    }
}
