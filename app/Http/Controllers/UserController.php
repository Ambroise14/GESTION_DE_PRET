<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function demande(Request $request)
{
  $user=New User();
  $user->name=$request->input('name');
  $user->daten=$request->input('daten');
  $user->email=$request->email;
  $user->tel=$request->tel;
  $user->daten=$request->dia.'/'.$request->mese.'/'.$request->ano;
  $user->password=Hash::make($request->cpf);
  $user->cpf=$request->cpf;
  $user->prazo=$request->prazo;
  $user->valor=$request->valor;
  $user->taxa=$request->taxa;
  $user->render=$request->renda;
  if($request->hasFile('frente')){
    $frente=$request->file('frente');
    $frente_name = $frente->getClientOriginalName();
    $frente->move('images/users', $frente_name);
  $user->frente=$frente_name;

}
if($request->hasFile('verso')){
    $verso=$request->file('verso');
    $verso_name = $verso->getClientOriginalName();
    $verso->move('images/users', $verso_name);
    $user->verso=$verso_name;
}
$user->save();

$credentials = ['email' => $request->email, 'password'=>$request->cpf ];
if(Auth::attempt($credentials)){

    return response()->json(['status'=>200]);
}else{
  return response()->json(['status'=>400,'message'=>'o servidor encontrou um problema,tente novamente']);  
}
          
}
public function listepedido(Request $request){
  $user = User::orderBy('id', 'DESC')->get();
  return view('frontend.admin', ['users' => $user]);
}
public function showdetails(Request $request){
  $user = User::find($request->id);
  return view('frontend.datapedido', ['data' => $user]);
}

public function felicitation(){
  $all = User::where('id', Auth::id())->orderBy('id', 'DESC')->first();
  return view('felicitation', ['p' => $all]);
}
}
