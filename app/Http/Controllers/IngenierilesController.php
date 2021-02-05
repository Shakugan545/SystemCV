<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngenierilesAddRequest;
use App\Http\Requests\IngenierilesEditRequest;
use Illuminate\Http\Request;
use App\Ingenieriles;
class IngenierilesController extends Controller
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
        $ingenieriles = Ingenieriles::all();
        return view('ingenieriles.index',compact('ingenieriles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingenieriles.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngenierilesAddRequest $request)
    {
        $ingenieriles = Ingenieriles::create($request->all());
        return redirect()->route('ingenieriles.index')->with('guardar','guardar');
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
        $ingenieriles = Ingenieriles::findOrFail($id);
        return view('ingenieriles.editar',compact('ingenieriles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IngenierilesEditRequest $request, $id)
    {
        $ingenieriles = Ingenieriles::find($id);

        $ingenieriles->update($request->all());

        return redirect()->route('ingenieriles.index')->with('editar','editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingenieriles = Ingenieriles::find($id);
        try{
            $ingenieriles->delete();
            return redirect()->route('ingenieriles.index')->with('eliminar','ok');
        }catch(\Exception $e){
            return $e;
        }
           
    }
}
