<?php

require '../Logic/connect.php';

$idMaquina = $_GET['idMaquinaInsp'];

echo $idMaquina;


$sql = "SELECT * FROM inventariomaquinaria WHERE idMaquina = '$idMaquina'";

$result = mysqli_query($connection, $sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$as = $row['descBreve'];
echo $as;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inspeccion</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diligenciamiento Inspeccion</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../FORMS-INSPECCION/css/style.css">
  
</head>
<body>

<?php 
if($row['descBreve'] == 'VOLQUETA DOBLETROQUE'){
include '../FORMS-INSPECCION/inspeccion_volqueta.php';

} elseif ($row['descBreve']  == 'DUMPER') {
  include '../FORMS-INSPECCION/inspeccion_dumper.php';
} elseif ($row['descBreve']  == 'BULLDOZER') {
  include '../FORMS-INSPECCION/inspeccion_bulldozer.php';
} elseif ($row['descBreve']  == 'SEMITRAILER') {
  include '../FORMS-INSPECCION/inspeccion_trailer_cama_baja.php';
} elseif ($row['descBreve']  == 'CARGADOR 3 YDS') {
  include '../FORMS-INSPECCION/inspeccion_cargador_frontal.php';
} elseif ($row['descBreve']  == 'EXCAVADORA ORUGAS') {
  include '../FORMS-INSPECCION/inspeccion_excavadora.php';
}  elseif ($row['descBreve']  == 'MINICARGADOR') {
  include '../FORMS-INSPECCION/inspeccion_minicargador.php';
} elseif ($row['descBreve']  == 'MONTACARGAS') {
  include '../FORMS-INSPECCION/inspeccion_montacarga.php';
} elseif ($row['descBreve']  == 'RETROCARGADOR') {
  include '../FORMS-INSPECCION/inspeccion_retrocargador.php';
} elseif ($row['descBreve']  == 'TRACTOCAMI?N') {
  include '../FORMS-INSPECCION/inspeccion_tractocamion.php';
} 
else{
	include 'FORMS-INSPECCION/form_template.php';
}
 ?>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="../FORMS-INSPECCION/js/script.js"></script>
 
</body>
</html>
