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
}
