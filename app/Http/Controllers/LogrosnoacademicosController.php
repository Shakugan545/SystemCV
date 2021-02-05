<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogrosNoAcademicosEditRequest;
use Illuminate\Http\Request;
use App\Logrosnoacademicos;
use App\Noacademica;
use App\Http\Requests\LogrosNoAcademicosRequest;
class LogrosnoacademicosController extends Controller
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
        $Noacademicos = Logrosnoacademicos::all();
        return view('logrosnoacademicos.index', compact('Noacademicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logrosnoacademicos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogrosNoAcademicosRequest $request)
    {
        $Noacademicos = Logrosnoacademicos::create($request->all());
        return redirect()->route('logrosnoacademicos.index',compact('Noacademicos'))->with('guardar','guardar');
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
        $Noacademicos = Logrosnoacademicos::findOrFail($id);
        return view('logrosnoacademicos.editar',compact('Noacademicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LogrosNoAcademicosEditRequest $request, $id)
    {
        $Noacademicos = Logrosnoacademicos::find($id);
        $Noacademicos->update($request->all());
        return redirect()->route('logrosnoacademicos.index')->with('editar','editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Noacademicos = Logrosnoacademicos::find($id);
        try{
            $Noacademicos->delete();
            return redirect()->route('logrosnoacademicos.index')->with('eliminar','ok');
        }catch(\Exception $e){
            return $e;
        }
    }
}
