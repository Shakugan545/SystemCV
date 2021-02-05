<?php

namespace App\Http\Controllers;

use App\Disciplinas;
use App\Http\Requests\DisciplinasAddRequest;
use App\Http\Requests\DisciplinasEditRequest;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
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
        $disciplinas = Disciplinas::all();
        return view('disciplinas.index',compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disciplinas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DisciplinasAddRequest $request)
    {
        $disciplinas = Disciplinas::create($request->all());
        return redirect()->route('disciplinas.index',compact('disciplinas'))->with('guardar','guardar');
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
        
        $disciplinas = Disciplinas::findOrFail($id);
        return view('disciplinas.editar',compact('disciplinas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DisciplinasEditRequest $request, $id)
    {
        $disciplinas = Disciplinas::find($id);
        $disciplinas->update($request->all());

        return redirect()->route('disciplinas.index',compact('disciplinas'))->with('editar','editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disciplinas = Disciplinas::find($id);

        try{
            $disciplinas->delete();
            return redirect()->route('disciplinas.index')->with('eliminar','ok');
        }catch(\Exception $e){
            return $e;
        }
    }
}
