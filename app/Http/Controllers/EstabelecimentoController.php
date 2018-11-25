<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estabelecimento;

class EstabelecimentoController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show($id){
        $estabelecimento = estabelecimento::find($id);
        return response()->json($estabelecimento);
    }
    public function create(Request $request){
        $estabelecimento = new estabelecimento();
        $estabelecimento->fill($request->all());
        $estabelecimento->save();
        return response()->json($estabelecimento);
    }
    public function update(Request $request, $id){
        $estabelecimento = estabelecimento::find($id);
        $estabelecimento->fill($request->all());
        $estabelecimento->update();
        return response()->json($estabelecimento);
    }
    public function destroy($id){
        $estabelecimento = estabelecimento::find($id);
        $estabelecimento->delete();
        return response()->json($estabelecimento);
    }
    public function showAll(){
        $estabelecimento = estabelecimento::all();
        return response()->json($estabelecimento);
    }
}
