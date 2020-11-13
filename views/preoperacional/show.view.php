<?php
require '../Logic/connect.php';
$idMaquina = $_SESSION['idMaquina'];

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
	<title>Preoperacional</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diligenciamiento de preoperacionales</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../FORMS/css/style.css">
  
</head>
<body>

<?php 
if($row['descBreve'] == 'VOLQUETA DOBLETROQUE'){
include '../FORMS/preoperacional_volqueta_doble_troque.php';

} elseif ($row['descBreve']  == 'DUMPER') {
  include '../FORMS/preoperacional_dumper.php';
} elseif ($row['descBreve']  == 'BULLDOZER') {
  include '../FORMS/preoperacional_buldozer.php';
} elseif ($row['descBreve']  == 'CAMIONETA') {
  include '../FORMS/preoperacional_camioneta.php';
} elseif ($row['descBreve']  == 'CARGADOR 3 YDS') {
  include '../FORMS/preoperacional_cargador_frontal.php';
} elseif ($row['descBreve']  == 'EXCAVADORA ORUGAS') {
  include '../FORMS/preoperacional_excavadora.php';
}  elseif ($row['descBreve']  == 'MINICARGADOR') {
  include '../FORMS/preoperacional_minicargador.php';
} elseif ($row['descBreve']  == 'MONTACARGAS') {
  include '../FORMS/preoperacional_montacarga.php';
} elseif ($row['descBreve']  == 'RETROCARGADOR') {
  include '../FORMS/preoperacional_retrocargador.php';
} elseif ($row['descBreve']  == 'TRACTOCAMI?N') {
  include '../FORMS/preoperacional_tractocamion.php';
} 
else{
	include 'FORMS/form_template.php';
}
 ?>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="../FORMS/js/script.js"></script>
 
</body>
</html>