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
