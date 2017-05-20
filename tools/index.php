<?php
function listdir($dir){
	$dirstring = "";
	$files = scandir($dir);
	foreach($files as $file) {
		if(pathinfo($file, PATHINFO_EXTENSION) == "php" AND $file != "index.php"){
			$dirstring .= "<li><a href='$dir/$file'>$file</a></li>";
		}
	}
	return $dirstring;
}
echo '<h1>Administrar tu cuenta:</h1><ul>';
echo listdir("account");
echo'</ul><h1>Ayuda recien subida:</h1><ul>';
echo listdir(".");
echo "</ul><h1>The cron job (Repara CPs, autoban, etc.)</h1><ul>";
echo "<li><a href='cron/cron.php'>cron.php</a></li>";
echo "</ul><h1>Utilidad del Servidor</h1><ul>";
echo listdir("stats");
echo "</ul><h1>Reparar Nombres</h1><ul>";
echo listdir("cleanup");
echo "</ul><h1>Usuarios Baneados/ No Baneados</h1><ul>";
echo listdir("Usuarios");
?>
<body background="https://www.motionbackgroundsforfree.com/wp-content/uploads/2016/04/700-min.jpg" bgcolor="#999999">
