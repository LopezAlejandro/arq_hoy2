<?php
    $extensiones = array("pdf","zip");
    $f = $_GET["f"];
   
    $nombre = basename($f);
    
    $ftmp = explode(".",$f);
    $fExt = strtolower($ftmp[count($ftmp)-1]);

    if(!in_array($fExt,$extensiones)){
        die("<b>ERROR!</b> no es posible descargar archivos con la extensión $fExt");
    }

    header("Content-type: application/octet-stream");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Disposition: attachment; filename=\"$nombre\"\n");
    set_time_limit(0); 
	 $file = @fopen($f, "rb"); 
		while(!feof($file)) { 
    		print(@fread($file, 1024*8)); 
    		ob_flush(); 
    		flush(); 
		} 
?> 