<?php
ob_start();


// Prüfung fehlt!
mail('xxx','Hochzeit', print_r($_POST,1));


// Fehler noch abfangen!
file_put_contents(
	__dir__.'/logs/'.time().'_'.$_SERVER['REMOTE_ADDR'].'.txt',
	json_encode(array($_POST,$_SERVER))
);


?> 
<meta http-equiv="refresh" content="5; URL=/">
Informationen gespeichert. 
<script>
sessionStorage.setItem("done", "yes");

</script>

Weiterleitung in 5 Sekunden.