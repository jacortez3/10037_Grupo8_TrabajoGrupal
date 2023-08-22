
<?php
	abstract class Nacion{
		private $NombrePais;   // Nombre del Pais
		private $NumProv;      // numero de Provincias
		
		
	    
		//CONSTRUCTOR
	function __construct($Nomb,$num){
		$this->NombrePais = $Nomb;
		$this->NumProv=$num;
	}
		
	// METODOS ABSTRACTOS: al menos uno en una clase abstracta	
      public abstract function ImprimirNacion($img);
	  
	    
	// METODOS
	   public function GetNombPais(){
		   return $this->NombrePais;
	   }
	
	
	   public function GetNumProv(){
		   return $this->NumProv;
	   }
	   
	   
	   
	}
?>