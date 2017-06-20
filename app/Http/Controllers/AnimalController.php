<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index() {
        $animals = Animal::all();

        return response()->json($animals);
    }
    
    public function getAnimal($id){
 
        $animal = Animal::find($id);
 
        return response()->json($animal);
    }
 
    public function saveAnimal(Request $request){
 
        $animal = Animal::create($request->all());
 
        return response()->json($animal);
 
    }
 
    public function deleteAnimal($id){
        $animal  = Animal::find($id);
 
        $animal->delete();
 
        return response()->json('success');
    }
 
    public function updateAnimal(Request $request,$id){
        $animal  = Animal::find($id);
 
        $animal->nome = $request->input('nome');
        $animal->sexo = $request->input('sexo');
        $animal->porte = $request->input('porte');
        $animal->idade = $request->input('idade');
 
        $animal->save();
 
        return response()->json($animal);
    }
}
