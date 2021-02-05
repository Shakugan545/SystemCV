<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aportaciones;
use App\Http\Requests\AportacionesAddRequest;
use App\Http\Requests\AportacionesEditRequest;

class AportacionesController extends Controller
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
        $aportaciones = Aportaciones::all();
        return view('aportaciones.index', compact('aportaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aportaciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AportacionesAddRequest $request)
    {
        $aportaciones = Aportaciones::create($request->all());
        return redirect()->route('aportaciones.index',compact('aportaciones'))->with('guardar','guardar');
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
        $aportaciones = Aportaciones::findOrFail($id);
        return view('aportaciones.editar',compact('aportaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AportacionesEditRequest $request, $id)
    {
        $aportaciones = Aportaciones::find($id);
        $aportaciones->update($request->all());
        return redirect()->route('aportaciones.index')->with('editar','editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aportaciones = Aportaciones::find($id);
        try{
            $aportaciones->delete();
            return redirect()->route('aportaciones.index')->with('eliminar','ok');
        }catch(\Exception $e){
            return $e;
        }
    }
}

