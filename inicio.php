<?php
include "header.php";
?>
     
	  <div class="container-fluid">
	     <div class="row row-cols-1 row-cols-md-2">
	     <?php
	     while ($columna = mysqli_fetch_array( $resultado ))
	     			{
	     				$sumario = explode('#', $columna['sumario']);
		           	echo "<div class='col-lg-4 column'>";
						echo "<div class='row clearfix'>";
						echo "<div class='col-lg-4 column img ml-3'>";
						echo "<img alt='96x140' src='img/".$columna['portada']."' width='125' height='180'>";
						echo "<span>"; 
						echo "<p>";
						echo "<a href='pdf3.php?libro=".$columna['ano']."&pdf=".$columna['archivo']."'>";				
						echo "<span class='oi oi-eye' title='eye' aria-hidden='true'>&nbsp;&nbsp;</span>";
						echo "</a>";
						echo "<a href='descarga.php?f=pdf/".$columna['ano']."/".$columna['archivo']."'>";						
						echo "<span class='oi oi-data-transfer-download' title='data-transfer-download' aria-hidden='true'></span>";
						echo "</a>";
/*
						 if ($columna['online']){
							echo "<a href='pdf3.php?libro=".$columna['libro_id']."&pdf=".$columna['archivo']."'>";
							echo "<img alt='260x260' src='img/pdf-2.png' width='45' height='45'>";
							} else {
							echo "<a href='descarga.php?f=pdf/".$columna['libro_id']."/".$columna['archivo']."'>";
							echo "<img alt='260x260' src='img/zip-2.png' width='45' height='45'>";							
														}
*/														
						//echo "<a href='descarga.php?f=pdf/".$columna['libro_id']."/".$columna['archivo']."'>";
//						echo "<img alt='140x140' src='img/pdf_gris.png' width='25' height='25'>";
//						echo "</a>";
//						echo "<a class='btn' href='contenido.php?disk=".$columna['libro_id']."'style='font-size: 0.8em;'>Contenido del DVD»</a>";
						echo "</p>";
						echo "</span>";
						echo "</div>";
						echo "<div class='col-lg-7 column' style='padding-left: 1px;'>";
						echo "<p class='text-justify'>";
						echo "<strong>Nº ".$columna['numero']." : ".$columna['mes']." de ".$columna['ano']."</strong>";
						echo "<ul>";
						for($x=0 ; $x < count($sumario) ; $x++) {
							echo "<li><small>".$sumario[$x]."</small></li>";
						}					
						echo "</ul>";


						//echo "<strong>".$columna['nombre']."</strong>";
/*
						echo "<br><small>".$columna['descripcion']."</small>";
						echo "<br>";
						echo "<a href='#' tabindex='0' class='btn' role='button' data-toggle='popover' ";
						echo "data-trigger='focus' title='".$columna['titulo']."'";
						echo "data-content='".$columna['popover']."' style='font-size: 10px;'>";
						echo " Ver M&aacute;s</a>";
						echo "</p>";
*/					
						echo "</div>";
						echo "</div>";
						echo "</div>";
	         
	     			}
	     
	     ?>
	     </div>
	  </div>
 
     <div class="container-fluid">
     		<nav aria-label="Page">
			  <ul class="pagination justify-content-center" style="font-size: 0.7em;"> 
				    <li class="page-item"><a class="page-link" href="?pageno=1">Primero</a></li>
				    <?php if($pageno <= 1){
				    		echo '<li class="page-item disabled" style="border-color: #e4d68f;"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a></li>';
				    			 } else {
				    		echo '<li class="page-item"><a class="page-link" href="?pageno='.($pageno - 1).'">Anterior</a></li>';	 
				    			 }
				    ?>

				    <?php if($pageno < $total_pages){
							echo '<li class="page-item"><a class="page-link" href="?pageno='.($pageno + 1).'">Siguiente</a></li>';				    
				    } else {
				    		echo '<li class="page-item disabled" style="border-color: #e4d68f;"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Siguiente</a></li>';
				    }
				    ?>			 
				    <li class="page-item">
				      <a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Último</a>
				    </li>
			  </ul>
			</nav>
     </div>
<?php
include "footer.php";
?>  
