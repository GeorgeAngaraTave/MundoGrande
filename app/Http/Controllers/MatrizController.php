<?php

namespace CuboSumatorio\Http\Controllers;

use Illuminate\Http\Request;

use CuboSumatorio\Http\Requests;

class MatrizController extends Controller
{
    public function index(){

    	return "Inicio de Matriz";
    } 

    public function create(){

    	return "Crea fromulario";
    }
}
