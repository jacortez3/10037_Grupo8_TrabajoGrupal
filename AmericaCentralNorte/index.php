<?php
/*
  PAISES CUBOS _POO
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Trabajo Grupal</title>
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
	 
	 
	 include_once("poo/class.Nacion.php");
	 include_once("poo/class.Pais.php");
	 include_once("poo/Interface.Organizacion.php");
	 include_once("poo/class.Conmebol.php");
	 include_once("poo/class.Fifa.php");
	 include_once("poo/class.Uefa.php");
	 
					   
	 $titulo = ["Uefa","Conmebol","Fifa"];

	 
	 // Datos quemados para las organizacion
	 $PaisesUefa = array('Uefa'=>array('Europa' => array('Italia','España','Francia')));

	 $PaisesConmebol = array(
	 	'Conmebol' =>array('América' => array('Ecuador','Argentina','Colombia')));

	 $PaisesFifa = array('FIFA'=>array(
	 	'América'=> $PaisesConmebol['Conmebol']['América'],
	 	'Europa'=> $PaisesUefa['Uefa']['Europa'],
		'África' => array('Senegal','Camerún','Ghana'),
		'Asia' => array('Rusia','Japón','Turquía'),	
		'Oceanía' => array('Nueva Zelanda','Australia')	 	
	 )
		);


	$objUefa = new Uefa($titulo[0],$PaisesUefa);	
    $objComb = new Conmebol($titulo[1],$PaisesConmebol);	
	$objFifa = new Fifa($titulo[2],$PaisesFifa);	

	//areglo polimorfico
	$arrayObj = [$objUefa,$objComb,$objFifa];


	for($i=0; $i < count($arrayObj);$i++){

//TITULO
	$html ='<h2 class="text-center">';
	$html .= $arrayObj[$i]->GetNombPais(). '</h2>';
	echo $html;
	
	//IMPRIMIR LA TABLA DE DATOS
	$arrayObj[$i]->imprimirOng();
	
}

?>                    

</body>
</html>

