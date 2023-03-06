<?php
function mostrar_imagenes($ruta){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);

        // Recorre todos los archivos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
            // Solo buscamos archivos sin entrar en subdirectorios
            if (is_file($ruta."/".$archivo)) {
                echo "</br>";
                echo $ruta."/".$archivo;
            }            
        }
        // Cierra el gestor de directorios
        closedir($gestor);
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}
$imagenes = __DIR__.'\imagenes';
mostrar_imagenes($imagenes);

	
