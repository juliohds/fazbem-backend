<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supermercado;

class SupermercadoController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show($id){
        $supermercado = supermercado::find($id);
        return response()->json($supermercado);
    }
    public function create(Request $request){
        $supermercado = new supermercado();
        $supermercado->fill($request->all());
        $supermercado->save();
        return response()->json($supermercado);
    }
    public function update(Request $request, $id){
        $supermercado = supermercado::find($id);
        $supermercado->fill($request->all());
        $supermercado->update();
        return response()->json($supermercado);
    }
    public function destroy($id){
        $supermercado = supermercado::find($id);
        $supermercado->delete();
        return response()->json($supermercado);
    }
    public function showAll(){
        $supermercado = supermercado::all();
        return response()->json($supermercado);
    }
}
