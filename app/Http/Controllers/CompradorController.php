<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comprador;

class CompradorController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show($id){
        $comprador = comprador::find($id);
        return response()->json($comprador);
    }
    public function create(Request $request){
        $comprador = new comprador();
        $comprador->fill($request->all());
        $comprador->save();
        return response()->json($comprador);
    }
    public function update(Request $request, $id){
        $comprador = comprador::find($id);
        $comprador->fill($request->all());
        $comprador->update();
        return response()->json($comprador);
    }
    public function destroy($id){
        $comprador = comprador::find($id);
        $comprador->delete();
        return response()->json($comprador);
    }
    public function showAll(){
        $comprador = comprador::all();
        return response()->json($comprador);
    }
}
