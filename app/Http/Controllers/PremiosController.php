<?php

namespace App\Http\Controllers;

use App\Http\Requests\PremiosAddRequest;
use App\Http\Requests\PremiosEditRequest;
use Illuminate\Http\Request;
use App\Premios;
class PremiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
       
    }
    public function index()
    {
        $premios = Premios::all();
        return view('premios.index', compact('premios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('premios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PremiosAddRequest $request)
    {
        $premios = Premios::create($request->all());
        return redirect()->route('premios.index',compact('premios'))->with('guardar','guardar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $premios = Premios::findOrFail($id);
        return view('premios.editar',compact('premios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PremiosEditRequest $request, $id)
    {
        $premios = Premios::find($id);
        $premios->update($request->all());
        return redirect()->route('premios.index')->with('editar','editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $premios = Premios::find($id);
        try{
            $premios->delete();
            return redirect()->route('premios.index')->with('eliminar','ok');
        }catch(\Exception $e){
            return $e;
        }
    }
}
