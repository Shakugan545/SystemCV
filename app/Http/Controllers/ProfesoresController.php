<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesores;
use App\Academica;
use App\Http\Requests\ProfesoresEditRequest;
use App\Http\Requests\ProfesoresRequest;

// use App\Capacitaciones;
class ProfesoresController extends Controller
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
        //retornamos todo lo academicos
       $academica = Academica::all();
       // $capacitaciones = Capacitaciones::all();
        //retornamos los profesores
          // $profesores = Profesores::all();
        $profesores = Profesores::with('academica')->get();
       // $capacitaciones = Profesores::with('capacitaciones')->get();
        
        return view('profesores.index',compact('profesores','academica'));
        
    }
    
    public function todos(){
        $profesores = Profesores::with(['academica'])->get();
        return $profesores;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('profesores.crear');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfesoresRequest $request)
    {
        
        $profesores =  Profesores::create($request->all());
       // $academica = Academica::create($request->all());   
       //  $capacitaciones = Capacitaciones::create($request->all()); 
        
       // $profesores->academica_id = $academica->id;
       // $profesores->capacitaciones_id = $capacitaciones->id;
       // $profesores->save();
        
        return redirect()->route('profesores.index',compact('profesores'))->with('guardar','guardar');
    }

    public function agregar(Request $request){
        $profesores =  Profesores::create($request->all());
        return redirect()->route('profesores.index',compact('profesores'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        
        $profesores = Profesores::findOrFail($id);
      
        return view('profesores.editar',compact('profesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfesoresEditRequest $request, $id)
    {
        $profesores = profesores::find($id);
       // $academica = Academica::find($id);
        //$capacitaciones = Capacitaciones::find($id);

        $profesores->update($request->all());
       // $academica->update($request->all());
       // $capacitaciones->update($request->all());

        return redirect()->route('profesores.index')->with('editar','editar');
    }

    public function editar(Request $request, $id){
        $profesores = profesores::find($id);
        $profesores->update($request->all());
        return redirect()->route('profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesores = Profesores::find($id);
       // $academica = Academica::find($id);
        //$capacitaciones = Capacitaciones::find($id);
       try{
            $profesores->delete();
           // $academica->delete();
            //$capacitaciones->delete();
            return redirect()->route('profesores.index')->with('eliminar','ok');
       }catch(\Exception $e){
            return $e;
       }
    }
}
