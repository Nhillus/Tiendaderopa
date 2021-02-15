function toastr_alert(data){
    toastr.options.closeDuration = data.duration;
    toastr.options.progressBar = data.progress;
    toastr[data.type](data.message, data.title);
}
/**
 * Alerta de error
 * 
 * @param {*} titulo 
 * @param {*} contenido 
 */
function error_toastr(titulo, contenido) {
    toastr_alert({
        type: 'error',
        title: titulo,
        message: contenido,
        progress: true,
        duration: 2500
    });
    /*$.toast({
        heading: titulo,
        text: contenido,
        position: 'top-right',
        loaderBg: '#ff6849',
        icon: 'error',
        hideAfter: 2500
    });*/
}

/**
 * Alerta de error delayed
 * 
 * @param {*} titulo 
 * @param {*} contenido 
 */
function error_toastr_delayed(titulo, contenido) {
    toastr_alert({
        type: 'error',
        title: titulo,
        message: contenido,
        progress: true,
        duration: 5500
    });
}

/**
 * Alerta de informaciÃ³n
 * 
 * @param {*} titulo 
 * @param {*} contenido 
 */
function info_toastr(titulo, contenido, time) {
    toastr_alert({
        type: 'info',
        title: titulo,
        message: contenido,
        progress: true,
        duration: time
    });
}

/**
 * Alerta de peligro
 * 
 * @param {*} titulo 
 * @param {*} contenido 
 */
function warning_toastr(titulo, contenido) {
    toastr_alert({
        type: 'warning',
        title: titulo,
        message: contenido,
        progress: true,
        duration: 2500
    });
}

/**
 * Alerta de Ã©xito
 * 
 * @param {*} titulo 
 * @param {*} contenido 
 */
function success_toastr(titulo, contenido) {
    toastr_alert({
        type: 'success',
        title: titulo,
        message: contenido,
        progress: true,
        duration: 2500
    });
}