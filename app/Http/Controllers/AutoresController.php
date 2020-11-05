<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
class AutoresController extends Controller
{
   public function index(){
	//$autor=autor::all()->sortbydesc('idl');
	$autor= Autor::paginate(4);

	return view ('autores.index', ['autores'=>$autor]);
}
public function show (Request $request){
	$idAutor=$request->id;

	//$livro = Livro::findOrFail($idLivro);

	//$livro= livro::find($idLivro);

	$autor=Autor::where('ida',$idAutor)->first();
	
	return view ('autores.show',['autor'=>$autor]);
}
}
