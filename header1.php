<!doctype html>
<html lang="en">
<head> 
<?php
	
	if (isset($_GET['disk'])) {
            $disk = $_GET['disk'];
        } else {
            $disk = 1;
   }
	
	if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        
   $no_of_records_per_page = 1;
   $offset = ($pageno-1) * $no_of_records_per_page;
   
   include "db.php";

   $total_pages_sql = "SELECT COUNT(*) FROM libros where activo=1";
   $result = mysqli_query($conexion,$total_pages_sql) or die ( "Algo ha ido mal en la consulta a la base de datos");
   $total_rows = mysqli_fetch_array($result);
   $total_pages = ceil($total_rows[0] / $no_of_records_per_page);

	$consulta = "SELECT * FROM libros where activo=1 and libro_id=".$disk;
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");  
  
   $consulta1 = "SELECT * FROM articulos where activo=1 and libro_id=".$disk;
	$resultado1 = mysqli_query( $conexion, $consulta1 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
?>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8">

<title>Libros Antiguos y Valiosos de la FADU</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row align-items-start text-white bg-dark" style="height: 150px;">
            <div class="col my-auto encabezado">
                <h3><strong>Colección de Libros Antiguos<br>y Valiosos de la FADU</strong></h3>
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
	