/**
 * Ajax action to api rest
*/
function products(){
    var $form = $('#products_form'), __data = new FormData(document.getElementById('products_form'));
    if(undefined == $form.data('locked') || false == $form.data('locked')) {

        var l = Ladda.create(document.querySelector('#products_btn'));
        l.start();

        $.ajax({
            type : "POST",
            url : base_url + 'panel/products/' + $('[data-id_product]').data('id_product'),
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
$('form#products_form').submit(function(e) {
    e.defaultPrevented;
    products();
    return false;

});
