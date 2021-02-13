<?php

/**
 * Obtiene el rango e fechas en formato unix
 *
 * @param string : Rango de fechas
 *
 * @return array con las fechas en formato unix | null
 */
function getTimeOffer($offer_time){
    if (null != $offer_time) {
        $offer_time = explode('-', $offer_time);
        return [
            'offer_from' => strtotime(str_replace('/', '-', $offer_time[0])),
            'offer_to' => strtotime(str_replace('/', '-', $offer_time[1]))
        ];
    }
    return null;
}

/**
 * Elimina un directorio de forma recursiva
 *
 * @param string $dir: Directorio a eliminar
 *
 * @return bool true | false
 */
function rm_dir($dir) {
    if (\file_exists($dir)) {
        foreach (glob($dir . "/*") as $archivos_carpeta) {
            if (is_dir($archivos_carpeta)) {
                rm_dir($archivos_carpeta);
            } else {
                unlink($archivos_carpeta);
            }
        }
        rmdir($dir);

        return true;
    }

    return false;

}
/**
 * Saca el porcentaje de un valor
 *
 * @param double $value : Valor a calcular el porcentaje
 * @param double $percent : Porcentaje a calcular
 *
 * @return double con el porcentaje del valor
 */
function percentOfValue($value, $percent){
    return \round(
        ($value - ($value * ($percent / 100))),
        2
    );
}

/**
 * Devuelve en un arreglo numérico, la ruta de todos los ficheros en un directorio filtrado por tipos
 *
 * @param string $dir: directorio completo
 * @param string $types: tipos de archivos a buscar, por defecto '' significa todos, se puede pasar por ejemplo 'jpg'
 *
 * @return array con las rutas de todos los ficheros encontrados, un array vacío si no encontró ficheros
 */
function get_files_in_dir(string $dir, string $types = '') : array {
    $array = array();
    if (\is_dir($dir)) {
      foreach (\glob($dir . '*' . $types) as $file) {
        $array[] = $file;
      }
    }
    return $array;
}


function getFilesWithName(string $dir, string $types = ''){
    $files = get_files_in_dir($dir, $types);
    $result = [];

    foreach ($files as $file) {

        $result[] = [
            'id' => \uniqid(),
            'name' => \basename($file),
            'fullFile' => str_replace(
                [public_path(), '\\'],
                [url('/'), '/'],
                $file
            )
        ];
    }
    return $result;
}
