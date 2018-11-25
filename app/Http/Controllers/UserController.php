<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show($id){
        $user = User::with('productCategory')->find($id);
        return response()->json($user);
    }
    public function create(Request $request){
        $user = new ProUserduct();
        $user->fill($request->all());
        $user->save();
        return response()->json($user);
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->fill($request->all());
        $user->update();
        return response()->json($user);
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return response()->json($user);
    }
    public function showAll(){
        $user = User::all();
        return response()->json($user);
    }
}
