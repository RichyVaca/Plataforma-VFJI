<?php


$nombre=$_FILES['archivo2']['name'];
$guardado=$_FILES['archivo2']['tmp_name'];

if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		echo "Archivo guardado con exito";
	}else{
		echo "Archivo no se pudo guardar";
	}
}

?>
