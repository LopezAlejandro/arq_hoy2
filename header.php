<!doctype html>
<html lang="es">
<head> 
<?php
	if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
   $no_of_records_per_page = 6;
   $offset = ($pageno-1) * $no_of_records_per_page;
   
   include "db.php";

   $total_pages_sql = "SELECT COUNT(*) FROM revistas where activo=1";
   $result = mysqli_query($conexion,$total_pages_sql) or die ( "Algo ha ido mal en la consulta a la base de datos");
   
   $total_rows = mysqli_fetch_array($result);
   $total_pages = ceil($total_rows[0] / $no_of_records_per_page);
   
   $consulta = "SELECT * FROM revistas where activo=1 order by numero LIMIT $offset , $no_of_records_per_page";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
?>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="css/open-iconic-bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8">

<title>La Arquitectura de Hoy</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row align-items-start text-white bg-dark" style="height: 100px;">
            <div class="col my-auto encabezado">
                <h3><strong>La Arquitectura de Hoy</strong></h3>
            </div>    
        </div>
    </div>    

    <div class="container-fluid" style="background-color:#E4D68F; height: 30px;">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#E4D68F; height: 30px;" >
            <a class="navbar-brand" href="https://biblioteca.fadu.uba.ar">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="inicio.php?pageno=1">Indice</a>
                    <a class="nav-item nav-link" href="proyecto.php">El Proyecto</a>
                </div>
            </div>
        </nav>
    </div>
     
	<div class="spacer"></div> 
	