<?php
include "header1.php";
?>
     
<div class="container">
	<div class="card w-100 border-light">
		<div class="row">
			
			<div class="col-sm-6">
				<?php
				$columna = mysqli_fetch_array($resultado);
    			echo "<img class='card-img' src='img/".$columna['portada']."'alt='Card image'/>";
				?>
  			</div>
  			<div class="col-sm-6">
  				<div class="card-body-right">
  				
				<h2>Contenido</h2>
				<h3>Libro :</h3>
		
  					<?php
  					$nombre = explode('#',$columna['nombre']);
						for($x=0 ; $x < count($nombre) ; $x++) {
							echo "<h4 class='card-title'>'".$nombre[$x]."'</h4>";
						}
  					?>
  					<h4>Art&iacute;culos :</h4>
  					
      			<?php
      			while ($columna1 = mysqli_fetch_array( $resultado1 ))
      				{
      					echo "<p class='card-text' style='display:inline'><a href='pdf.php?libro=".$columna1['libro_id']."&pdf=".$columna1['archivo']."' class='text-dark' style='font-size: 1.1em; text-align: justify;'> ".$columna1['titulo']."</a></p>  <p style='display:inline; font-size: 0.9rem'><i>".$columna1['autor']."</i></p><br>"; 
      				}
      			?>
  				</div>
  			</div>
		</div>
	</div>
</div>

<div class="spacer"></div>
	  
<div class="container-fluid">
	<nav aria-label="Page">
		<ul class="pagination justify-content-center" style="font-size: 0.7em;"> 
			<li class="page-item"><a class="page-link" href="?disk=1">Primero</a></li>
		   	<?php if($disk <= 1){
		    		echo '<li class="page-item disabled" style="border-color: #e4d68f;"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a></li>';
		    			 } else {
		    		echo '<li class="page-item"><a class="page-link" href="?disk='.($disk - 1).'">Anterior</a></li>';	 
		    			 }
		    	?>
	
		    	<?php if($disk < $total_pages){
					echo '<li class="page-item"><a class="page-link" href="?disk='.($disk + 1).'">Siguiente</a></li>';				    
		    			} else {
		    		echo '<li class="page-item disabled" style="border-color: #e4d68f;"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Siguiente</a></li>';
		    			}
		    	?>			 
		   <li class="page-item">
		      <a class="page-link" href="?disk=<?php echo $total_pages; ?>">&Uacute;ltimo</a>
		   </li>
	  </ul>
	</nav>
</div>

<?php
include "footer.php";
?>  
