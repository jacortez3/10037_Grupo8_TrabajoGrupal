<?php
/*
  PAISES CUBOS _POO
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Territorios de cada país</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

<?php
	 
	 include_once("../poo/class.Nacion.php");
	 include_once("../poo/class.Pais.php");
					   
	 
	 
	 $titulo = ($_GET['post']);
	 
	 
	 
	 // INDICES ASOCIATIVOS
	 $ciudades = array(

	 	'Ecuador'=>
	 	array ('Ecuador' => array(
	 	'Pichincha' => array ("QUITO","CAYAMBE","RUMIÑAHUI"),
   	'Guayas' => array ("GUAYAQUIL","DAULE","SAMBORONDON"),
	 	'Azuay' => array ("CUENCA","CHORDELEC"),
 		'Manabi' => array ("MANTA","CHONE","JIPIJAPA","PUERTO LOPEZ","ROCAFUERTE","SUCRE"),
   	'Esmeraldas' => array ("ATACAMES","TONSUPA") ) ),

	 	'Argentina'=>
   	array ('ARGENTINA' =>array('BUENOS AIRES' => ["LA PLATA","QUILMES","MIRAFLORES","ROSARIO"],
											 'MISIONES' => ["POSADAS","MENDOZA"])),

   	'Colombia'=>
	 	array ('Colombia' => array(
	 	'Caribe' => array ("Arauca"),
   	'Andina' => array ("Caldas","Antoquía","Tolima"),
	 	'Amazonía' => array ("Bolívar","Magdalena","La Güajira","Sucre") ) ),


   	'Francia'=>
	 	array ('Francia' => array(
	 	'Normandía' => array ("Caen","Rouen"),
   	'Alta Francia' => array ("Laon","Lille","Arras","Amiens","Beauvais"),
	 	'Alpes' => array ("Lyon","Annecy","Privas"),
 		'Córcega' => array ("Ajaccio","Bastia") ) ),

 		'Italia'=>
	 	array ('Italia' => array(
	 	'Abruzzo' => array ("Pescara"),
   	'Puglia' => array ("Bari","Barletta","Lecce","Tarento","Brindisi"),
	 	'Basilicata' => array ("Matera","Potenza"),
	 	'Calabria' => array ("Nápoles","Salerno"),
 		'Cerdeña' => array ("Nuoro","Oristán","Sácer") ) ),

 		'España'=>
	 	array ('España' => array(
	 	'Andalucía' => array ("Almería","Cádiz","Huelva","Sevilla"),
   	'Castilla - La Mancha' => array ("Albacete","Toledo"),
 		'Extramadura' => array ("Badajoz","Cáceres") ) ),

 		'Senegal'=>
	 	array ('Senegal' => array(
	 	'Dakar' => array ("Guédiawaye","Pikine","Rufisque"),
   	'Diourbel' => array ("Bambey"),
	 	'Fatick' => array ("Foundiougne","Gossas"),
 		'Kaffrine' => array ("Birkilane") ) ),

 		'Camerún'=>
	 	array ('Camerún' => array(
	 	'Adamawa' => array ("Meiganga"),
   	'Oeste' => array ("Mbouda","Baham","Dschang","Bangangté"),
 		'Sur' => array ("Sangmélima","Ebolowa","Ambam") ) ),

 		'Ghana'=>
	 	array ('Ghana' => array(
	 	'Ashanti' => array ("Offinso","Atwima","Kwabre"),
   	'Brong Ahafo' => array ("Dormaa","Pru") ) ),

 		'Rusia'=>
	 	array ('Rusia' => array(
	 	'Central' => array ("Belgorod","Moscú","Smolensk","Kostroma"),
   	'Caucaso' => array ("Groznyj","Ipatovo","Derbent"),
	 	'Siberia' => array ("Kazan","Arzamas"),
 		'Volga' => array ("Omsk","Tomsk") ) ),

 		'Japón'=>
	 	array ('Japón' => array(
	 	'Tohoku' => array ("Aomori","Iwate","Fukushima"),
   	'Kansai' => array ("Mie","Osaka","Nara","Hyogo"),
 		'Shikoku' => array ("Kochi","Ehime") ) ),

 		'Turquía'=>
	 	array ('Turquía' => array(
	 	'Aydin' => array ("Çine","Kuşadası","Söke"),
   	'Denizli' => array ("Çal","Çivril"),
   	'Muğla' => array ("Fethiye","Ortaca","Dalaman"),
 		'Esmirna' => array ("Gaziemir") ) ),

 		'Nueva Zelanda'=>
	 	array ('Nueva Zelanda' => array(
	 	'Waikato' => array ("Whangarei","Auckland"),
   	'Gisborne' => array ("Richmond"),
 		'Otago' => array ("Dunedin","Christchurch") ) ),

 		'Australia'=>
	 	array ('Australia' => array(
	 	'New South Wales' => array ("Sydney"),
   	'Queensland' => array ("Brisbane","God Coast","Tawnsville"),
	 	'South Australia' => array ("Adelalde"),
	 	'Victoria' => array ("Melbourne","Ballarat"),
 		'Tasmania' => array ("Hobart","Launceston") ) )

	 );
	
	$objECU = new Pais($titulo,$ciudades[$titulo]);	
    //$objUSA = new Pais($titulo[1],$ciudadesUSA);	
	//$objARG = new Pais($titulo[2],$ciudadesARG);
		
	$objPAISES = [$objECU];

	for($i=0; $i < count($objPAISES);$i++){

//PAIS
	$html='<h2 class="text-center">';
	$html .= $objPAISES[$i]->GetNombPais(). '</h2>';
	echo $html;
	
	// IMPRIME EL NUMERO DE CANTONES
	$cara = $objPAISES[$i]->GetCiudades();
	
	/*
	echo "<pre>";
    	print_r($cara);
	echo "</pre>";  
	
	*/

	$objECU->CalcularMaxColum($cara);
	/*
	echo "NUMERO DE PROVINCIAS: " . count($cara) . "<br>";
	echo "NUMERO DE CANTONES: " . $objPAISES[$i]->GetNumCuidades() . "<br>";	
	*/

	//IMPRIMIR LA TABLA DE DATOS
	$objPAISES[$i]->ImprimirNacion($titulo);
	
}

?>                    
	<div class="text-center"><a href="../index.php">Regresar</a></div>
</body>

</html>

