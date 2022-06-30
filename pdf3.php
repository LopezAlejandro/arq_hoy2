<?php
include "header0.php";
$libro = $_GET["libro"];
$pdf = $_GET["pdf"];

?>

<div class="container-fluid" style="background: black;">

	<div class="col-xs-12" style="padding-bottom:10px; padding-top: 5px">
      <!--Normal FLipbook-->
      <?php
      echo "<div class='_df_book' height='550' webgl='true' backgroundcolor='black'
              source=pdf/".$libro."/".$pdf." id='df_manual_book'>";
      echo "</div>";
		?>
		
   </div>

</div>	

<div class="row" style="background: black;">
		<div class="col-md-3 align-self-end">
<!--			<img class="img-fluid" src="img/head/libro.png">-->
		</div>

		<div class="col-md-7">
		</div>
  
		<div class="col-md-2 justify-content-between align-self-end">
		</div>
  
</div>	  
	  
<div class="spacer-black">

<!-- jQuery  -->
<script src="./dflip/js/libs/jquery.min.js" type="text/javascript"></script>
<!-- Flipbook main Js file -->
<script src="./dflip/js/dflip.min.js" type="text/javascript"></script>
<?php
include "footer.php";
?>
