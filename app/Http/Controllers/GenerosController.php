<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
class GenerosController extends Controller
{
    //
           public function index(){
//$genero=genero::all()->sortbydesc('idg');
	$genero= Genero::paginate(4);

	return view ('generos.index', ['generos'=>$genero]);
}
}
