
<?php
	class Pais extends Nacion{
		
		private $ciudades;      // EL CUBO
        private $Numcuidades;   // Numero total de provincias que tiene un pais
       
	        
    // CONSTRUCTOR
	function __construct($NomPais,$data){
		parent::__construct($NomPais,count($data));
		$this->Numcuidades =count($data);
		$this->ciudades = $data;
		
	}

	// IMPLEMENTAR METODOS	
     
	  
	  public function GetNumCuidades(){
		    return $this->Numcuidades;
	  } 
	    
	 
	  public function GetCiudades(){
		 foreach($this->ciudades as $pais => $data){
		    return $data;
		 }
	  } 
	 
	
	 
	// METODO PARA CALCULAR EL MAXCOLUM
	public function CalcularMaxColum($cara){
	   $maxColum=null;
		foreach($cara as $prov=>$arreglo) {
				// $numProv = count($data[$prov]);
				$tam=count($cara[$prov]);
				$maxColum=($maxColum >= $tam) ? $maxColum : $tam;
		}	
	    
	    $this->Numcuidades=$maxColum;
	    
	} 
	 
	 
	 //Override
	 public function ImprimirNacion($img){
		 //PRIMERA CARA 
		    
			foreach($this->ciudades as $pais => $data){
					
				
			// ALGORITMO PARA LA CABECERA				   
			$html='
				<table border=1 align="center">
				<tr>';
				
				//CALCULO EL MAXIMO DE LAS COLUMAS DE LA MATRIZ
				$this->CalcularMaxColum($data);
								
				$tam = count($data);
				// TITULO DE LA TABLA
				$html.=' <tr>  
						 <th colspan="'. $tam .'"><div class="text-center"><img width="150" height="150" src="../img/'.$img.'.png"></div></th>
						 </tr>';
				$html.=' <tr>  
						 <th colspan=" ' . $tam . '" bgcolor="#EC7063"> ' . $this->GetNombPais() . ' </th>
						 </tr>';
						 
				// IMPRIMIR LA CABECERA
				 foreach($data as $prov=>$arreglo)
					 $html.="<th> $prov </th>"; 
			  
			  // ALGORITMO PARA IMPRIMIR LA TABLA EN HTML 
				for($f=0;$f < $this->GetNumCuidades(); $f++){   // $max para recorrer hacia abajo
					$html.='<tr>';
					 foreach($data as $c)
						 $html.=( isset($c[$f]) ) ? '<td bgcolor="#D6FAF2">' . $c[$f] . '</td>' : '<td bgcolor="#D6DEFA">&nbsp;</td>';     
					$html.='</tr>';
				}	
			}	
				$html .= "</tr>";
				$html .= "</table>"; 
				$html .= "<br> <br>";
			  
				echo $html;
			 }
		 
	     
	    
	}
?>
