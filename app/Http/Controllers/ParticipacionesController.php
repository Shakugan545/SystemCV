<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipacionesAddtRequest;
use App\Http\Requests\ParticipacionesEditRequest;
use Illuminate\Http\Request;
use App\Participaciones;
class ParticipacionesController extends Controller
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
        $participaciones = Participaciones::all();
        return view('participaciones.index',compact('participaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participaciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParticipacionesAddtRequest $request)
    {
        $participaciones = Participaciones::create($request->all());
        return redirect()->route('participaciones.index',compact('participaciones'))->with('guardar','guardar');
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
        $participaciones = Participaciones::findOrFail($id);
        return view('participaciones.editar',compact('participaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParticipacionesEditRequest $request, $id)
    {
        $participaciones = Participaciones::find($id);
        $participaciones->update($request->all());
        return redirect()->route('participaciones.index')->with('editar','editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $participaciones = Participaciones::find($id);
        try{
            $participaciones->delete();
            return redirect()->route('participaciones.index')->with('eliminar','ok');
        }catch(\Exception $e){
            return $e;
        }
    }
}
