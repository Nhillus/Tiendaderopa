/**
 * Ajax action to api rest
*/
function categories(){
    var $form = $('#categories_form'), __data = new FormData(document.getElementById('categories_form'));
    if(undefined == $form.data('locked') || false == $form.data('locked')) {

        var l = Ladda.create(document.querySelector('#categories_btn'));
        l.start();

        $.ajax({
            type : "POST",
            url : base_url + 'panel/categories/' + $('[data-id_category]').data('id_category'),
            contentType:false,
            processData:false,
            data : __data,
            beforeSend: function(){
                $form.data('locked', true)
                emptyErrorSpans()
            },
            success : function(json) {
                if(json.success == 1) {
                    success_toastr('Éxito', json.message);
                    setTimeout(function() {
                        location.href = json.url;
                    }, 1000);
                } else {
                    error_toastr('Ups!', json.message);
                }
            },
            error : function(xhr, status) {
                parseErrors(xhr);
            },
            complete: function(){
                $form.data('locked', false);
                l.stop();
            }
        });
    }
}

/**
 * Events
 */
$('form#categories_form').submit(function(e) {
    e.defaultPrevented;
    categories();
    return false;

});
