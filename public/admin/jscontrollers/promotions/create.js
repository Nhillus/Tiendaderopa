/**
 * Ajax action to api rest
*/
function promotions(){
    var $form = $('#promotions_form'), __data = new FormData(document.getElementById('promotions_form'));
    if(undefined == $form.data('locked') || false == $form.data('locked')) {

        var l = Ladda.create(document.querySelector('#promotions_btn'));
        l.start();

        $.ajax({
            type : "POST",
            url : base_url + 'panel/promotions',
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
$('form#promotions_form').submit(function(e) {
    e.defaultPrevented;
    promotions();
    return false;

});
