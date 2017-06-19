<?php

namespace App\Http\Controllers;

use App\Race;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function index() {
        $races = Race::all();

        return response()->json($races);
    }
    
    public function getUser($id){
 
        $races = Race::find($id);
 
        return response()->json($race);
    }
 
    public function saveRace(Request $request){
 
        $race = Race::create($request->all());
 
        return response()->json($race);
 
    }
 
    public function deleteRace($id){
        $race  = Race::find($id);
 
        $race->delete();
 
        return response()->json('success');
    }
 
    public function updateRace(Request $request,$id){
        $race = Race::find($id);
 
        $user->name = $request->input('name');
        $user->type = $request->input('type');
 
        $race->save();
 
        return response()->json($race);
    }
}
