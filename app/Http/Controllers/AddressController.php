<?php
namespace App\Http\Controllers;

use App\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index() {
        $address = Address::all();

        return response()->json($address;
    }
    
    public function getAdress($id){
 
        $address = Address::find($id);
 
        return response()->json($Address);
    }
 
    public function saveAddress(Request $request){
 
        $user = Address::create($request->all());
 
        return response()->json($address);
 
    }
 
    public function deleteAddress($id){
        $address  = Address::find($id);
 
        $address->delete();
 
        return response()->json('success');
    }
 
    public function updateUser(Request $request,$id){
        $address  = Adress::find($id);
 
        $address->logradouro = $request->input('logradouro');
        $adress->bairro = $request->input('bairro');
        $adress->num = $request->input('num');
        $adress->cidade = $request->input('cidade');
 
 
        $adress->save();
 
        return response()->json($user);
    }
}
