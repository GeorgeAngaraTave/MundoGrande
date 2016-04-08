<?php

namespace CuboSumatorio\Http\Controllers;

use Illuminate\Http\Request;

use CuboSumatorio\Http\Requests;

class MatrizController extends Controller
{

	private $cubo;
	private $sum;

    public function index(){

    	return $this->create();
    } 

    public function create(){

    	$this->inicializa();
   
    	return view('from.formulario');
    }

    public function store(Request $request){

		if($request['selectop'] = "Set"){

    		$this->setUpdate($request["set1"],$request["set2"],$request["set3"],$request["set4"]);
			
			$result = "Set ok (".$request["set1"].",".$request["set2"].",".$request["set3"].")=".$request["set4"];
    	}



    	return $result;
    }

    public function inicializa(){

    	$x=1;
		$y=1;
		$z=1;
		$fx=4;
		$fy=4;
		$fz=4;
		for($x=1;$x<$fx;$x++)
		{
			for($y=1;$y<$fy;$y++){
				
				for($z=1;$z<$fz;$z++)
				{
					$this->cubo[$x][$y][$z]=0;
					
				}
				
			}
			
		}

    }

    public function setUpdate($x,$y,$z,$w)
	{
		$this->cubo[$x][$y][$z]=$w;
		
	}

	

}
