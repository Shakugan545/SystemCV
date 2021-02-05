<?php

namespace App\Http\Controllers;

use App\Gestion;
use App\Http\Requests\GestionAddRequest;
use App\Http\Requests\GestionEditRequest;
use Illuminate\Http\Request;

class GestionController extends Controller
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
        $gestion = Gestion::all();
        return view('gestion.index',compact('gestion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GestionAddRequest $request)
    {
        $gestion = Gestion::create($request->all());
        return redirect()->route('gestion.index',compact('gestion'))->with('guardar','guardar');
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
        $gestion = Gestion::findOrFail($id);
        return view('gestion.editar',compact('gestion'));
     
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GestionEditRequest $request, $id)
    {
        $gestion = Gestion::find($id);
        $gestion->update($request->all());

        return redirect()->route('gestion.index',compact('gestion'))->with('editar','editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gestion = Gestion::find($id);
        
        try{
            $gestion->delete();
            return redirect()->route('gestion.index')->with('eliminar','ok');
        }catch(\Exception $e){
            return $e;
        }
    }
}
