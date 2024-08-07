<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Registro;


class RegistrosController extends Controller{

  private $errores;

  public function __construct(){
    $this->errores = [
      'required' => 'El campo es requerido.',
    ];
  }
public function index(){
  $registros = Registro::all();
        return view('programador', compact('registros'));

     // $Programador = \DB::table('registros')
          //        ->select('registros.*')
        //          ->orderBy('id','DESC')
          //        ->get();
//return view('Programador')->with('Programador,$Programador');
}

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

  }


  public function store(Request $request){
    

    $registro = new Registro();
    $request->validate(['foto'=>'file|image|max:5000']);
    if($request->hasfile('foto') );{

     $path = $request ->foto->store('public/imagenes');
    

    $url = Storage::url($path);

    Registro::create([
    'foto' => $url
    ]);
    $registro->nombre = $request->nombre;
    $registro->categoria = $request->categoria;
    $registro->subcategoria = $request->subcategoria;
    $registro->framework = $request->framework;
    $registro->foto = $request->foto;
    $registro->enlace = $request->enlace;
    $registro->save();
}

    


    return redirect() ->back();
    return view('programador');
    return $registro;
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
  
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
      'categoria' => ['required', 'string', 'max:255'],
      'subcategoria' => ['required', 'string', 'max:255'],
      'framework' => ['required', 'string', 'max:255'],
      'foto' => ['required', 'string', 'max:255'],
      'enlace' => ['required', 'string', 'max:255'],
    ];
    $request->validate($validaciones, $this->errores);

    $registro = Registro::find($id);
    $registro->nombre = $request->nombre;
    $registro->categoria = $request->categoria;
    $registro->subcategoria = $request->subcategoria;
    $registro->framework = $request->framework;
    $registro->foto = $request->foto;
    $registro->enlace = $request->enlace;
    $registro->save();
    return $registro;
  }


  public function destroy($id){
    $registro = Registro::find($id);
    $registro->delete();
  }
}
