<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capacitaciones;
use App\Http\Requests\CapacitacionesAddRequest;
use App\Http\Requests\CapacitacionesEditRequest;

class CapacitacionesController extends Controller
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
        $capacitaciones  = Capacitaciones::all();
        return view('capacitaciones.index',compact('capacitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('capacitaciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CapacitacionesAddRequest $request)
    {
        $capacitaciones = Capacitaciones::create($request->all());

        return redirect()->route('capacitaciones.index',compact('capacitaciones'))->with('guardar','guardar');
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
        $capacitaciones = Capacitaciones::findOrFail($id);
        return view('capacitaciones.editar',compact('capacitaciones'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CapacitacionesEditRequest $request, $id)
    {
        $capacitaciones = Capacitaciones::find($id);

        $capacitaciones->update($request->all());

        return redirect()->route('capacitaciones.index')->with('editar','editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $capacitaciones = Capacitaciones::find($id);

        try {
            $capacitaciones->delete();
            return redirect()->route('capacitaciones.index')->with('eliminar','ok');
        } catch(\Exception $e){
            return $e;
        }
    }
}
