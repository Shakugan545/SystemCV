<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academica;
use App\Http\Requests\AcademicaEditRequest;
use App\Profesores;
use App\Http\Requests\AcademicaRequest;
class AcademicaController extends Controller
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
        $academica = Academica::all();
       
         
        
         return view('academica.index',compact('academica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('academica.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademicaRequest $request)
    {
            $academica =  Academica::create($request->all());
             return redirect()->route('academica.index',compact('academica'))->with('guardar','guardar');
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
        $academica = Academica::findOrFail($id);
       
        return view('academica.editar',compact('academica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcademicaEditRequest $request, $id)
    {
        $academica = Academica::find($id);
        $academica->update($request->all());
        return redirect()->route('academica.index')->with('editar','editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academica = Academica::find($id);
       
        try{
             $academica->delete();
             return redirect()->route('academica.index')->with('eliminar','ok');
        }catch(\Exception $e){
             return $e;
        }
    }
}
