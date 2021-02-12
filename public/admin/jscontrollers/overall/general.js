$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function deleteElement(url) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡Usted no podrá revertir ésto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.value) {

            $.ajax({
                type : "DELETE",
                url : url,
                dataType: 'json',
                beforeSend: function(){ },
                success : function(json) {
                    $.redirect(window.location.href, json.action, 'GET')
                },
                error : function(xhr, status) {},
                complete: function(){ }
            });

            Swal.fire(
                'Eliminado!',
                'Elemento eliminado con éxito.',
                'success'
            );
        }
    })
}

function emptyErrorSpans() {
    $('.error-message').html('');
}
function parseErrors(xhr) {
    emptyErrorSpans();

    var object = xhr.responseJSON;
    if(Object.keys(object).length) {
        $.each(object.errors, function( index, validator ) {
            $('span[validation-name="' + index + '"]').html(validator[0]);
        });
    } else {
        error_message('Ha ocurrido un problema interno');
    }
}
