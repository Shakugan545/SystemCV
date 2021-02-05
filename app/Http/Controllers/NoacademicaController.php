<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpNoAcademicaAddRequest;
use App\Http\Requests\ExpNoAcademicaEditRequest;
use Illuminate\Http\Request;
use App\Noacademica;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class NoacademicaController extends Controller
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
        $noacademica = Noacademica::all();
        return view('noacademica.index',compact('noacademica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noacademica.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpNoAcademicaAddRequest $request)
    {
        $noacademica = Noacademica::create($request->all());
        return redirect()->route('noacademica.index',compact('noacademica'))->with('guardar','guardar');
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
        $noacademica = Noacademica::findOrFail($id);
        return view('noacademica.editar',compact('noacademica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExpNoAcademicaEditRequest $request, $id)
    {
        $noacademica = Noacademica::find($id);

        $noacademica->update($request->all());

        return redirect()->route('noacademica.index',compact('noacademica'))->with('editar','editar');   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noacademica = Noacademica::find($id);
        try{
            $noacademica->delete();
            return redirect()->route('noacademica.index')->with('eliminar','ok');
        }catch(\Exception $e){
            return $e;
        }
    }
}
