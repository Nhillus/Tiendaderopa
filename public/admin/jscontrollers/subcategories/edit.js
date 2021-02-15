/**
 * Ajax action to api rest
*/
function subcategories(){
    var $form = $('#subcategories_form'), __data = new FormData(document.getElementById('subcategories_form'));
    if(undefined == $form.data('locked') || false == $form.data('locked')) {

        var l = Ladda.create(document.querySelector('#subcategories_btn'));
        l.start();

        $.ajax({
            type : "POST",
            url : base_url + 'panel/subcategories/' + $('[data-id_subcategory]').data('id_subcategory'),
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
$('form#subcategories_form').submit(function(e) {
    e.defaultPrevented;
    subcategories();
    return false;

});
