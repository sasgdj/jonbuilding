<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programador;

class NotaController extends Controller{

  private $errores;

  public function __construct(){
    $this->errores = [
      'required' => 'El campo es requerido.',
    ];
  }

  public function index(Request $request){
    if($request->ajax()){
      return Programador::where('user_id', \Auth::user()->id)->get();
    }
    else{
      return view('Programador');
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }


  public function store(Request $request){
    $validaciones = [
      'nombre' => ['required', 'string', 'max:255'],
      'descripcion' => ['required', 'string'],
    ];
    $request->validate($validaciones, $this->errores);

    $Programador = new Programador();
    $Programador->nombre = $request->nombre;
    $Programador->descripcion = $request->descripcion;
    $Programador->user_id = auth()->id();
    $Programador->save();
    return $Programador;
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
      //
  }


  public function update(Request $request, $id){
    $validaciones = [
      'nombre' => ['required', 'string', 'max:255'],
      'descripcion' => ['required', 'string'],
    ];
    $request->validate($validaciones, $this->errores);

    $Programador = Programador::find($id);
    $Programador->nombre = $request->nombre;
    $Programador->descripcion = $request->descripcion;
    $Programador->save();
    return $Programador;
  }


  public function destroy($id){
    $Programador = Programador::find($id);
    $Programador->delete();
  }
}
