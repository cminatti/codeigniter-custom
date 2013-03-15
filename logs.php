<?php

if (!isset($_GET['pass']) || $_GET['pass'] != 'asdf')
{
	die('Directory access is forbidden.');	
}

function listar_directorios_ruta($ruta){ 
   // abrir un directorio y listarlo recursivo 
   if (is_dir($ruta)) { 
      if ($dh = opendir($ruta)) { 
         while (($file = readdir($dh)) !== false) {
		if (!is_dir($ruta . $file) && $file!="." && $file!=".." && ($file!="index.php")){  

			echo '<br /> <a href="logs.php?file='.urlencode($file).'&pass='.$_GET['pass'].'" > '.$file.'</a> '; 
            } 
         } 
      closedir($dh); 
      } 
   }else 
      echo "<br>No es ruta valida"; 
} 


// Mostramos
echo '
	<html> 
	<head> 
	<title>Logs</title> 
	</head> 
	<body>';



if (isset($_GET['file']))
{
	// read file and show it on the page:
	echo '<h1> Today: '.date('Y-m-d H:i:s e O').'</h1>';
	echo '<p>Logs del: '.$_GET['file'].'</p> ';
        $ruta = './application/logs/'.preg_replace('/(\.\.)|\//','',$_GET['file']);//remove evil ../ or any /
	echo nl2br(file_get_contents($ruta));
}
elseif (isset($_GET['delete']))
{
    //unlink
}
else
{
	// show the list of files
	echo '<h1> Today: '.date('Y-m-d H:i:s e O').'</h1>';
	echo '<p>Archivos de Logs: </p> ';
	listar_directorios_ruta("./application/logs/"); 
}

echo '
	</body> 
	</html> 
	';
