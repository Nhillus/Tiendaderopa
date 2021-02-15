$('#id_category_id').change(function(){
    var category_id = $(this).val();
    var $subcategory = $('#id_subcategory_id');
    var sub = $('[data-subcategory]').data('subcategory');

    $.ajax({
        type : "GET",
        url : base_url + 'api/subcategories/bycategory',
        data : {category_id : category_id},
        beforeSend: function(){},
        success : function(json) {
            var html = '<option value>Seleccionar sub-categoría</option>';

            json.forEach(data => {
                html += `<option ${sub == data.id ? 'selected' : ''} value="${data.id}">${data.name}</option>`;
            });
            $subcategory.html(html);
            $subcategory.select2({
                theme: 'bootstrap4'
            })
        },
        error : function(xhr, status) {},
        complete: function(){ }
    });
});

$('#id_offer_percent, #id_real_price').keyup(function(){
    var real_price = $('#id_real_price').val();
    var offer_percent = $('#id_offer_percent').val();

    if(!is_empty(real_price) && !is_empty(offer_percent)){
        real_price = parseFloat(real_price);
        var offer_price = (parseFloat(real_price) * (parseFloat(offer_percent) / 100));

        $('#id_offer_price').val((real_price - offer_price).toFixed(2));
    }else{
        $('#id_offer_price').val('');
    }
});

$('#upload_image_trigger').on('click',function(){
    $('#upload_image_list').click();
})

$('#upload_image_list').change(function(evt){
    var tgt = evt.target || window.event.srcElement;
	var files = tgt.files;

    var __data = new FormData();

    __data.append('tmp_folder', $('#id_hash').val());
	for (var i = 0; i < files.length; i++) {
		__data.append('image[]', files[i]);
	}

    $.ajax({
        type : "POST",
        url : base_url + "api/tmp",
        dataType: 'json',
        contentType: false,
     	processData: false,
        data : __data,
        beforeSend: function(){ },
        success : function(json) {
            if (json.success) {

                if (json.files.length > 0) {
                    success_toastr('Realizado', json.message);
                }

                json.files.forEach(d => {
                    var img = d.fullPath + d.name;
                    var id = uniqid();

                    $('#images_list').append(`<li id="ls_${id}">
                        <div class="upload-image-item">
                            <img class="image" src="${img}" alt="${d.name}">
                            <div class="action">
                                <a href="javascript:deleteFile('${d.name}', '${id}')">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </div>
                    </li>`);

                });

            }else{
                error_toastr('Ups!', json.message);
            }
        },
        error : function(xhr, status) {
            // error_toastr('Ups!', 'Ha ocurrido un problema interno');
        },
        complete: function(){}
    });
});

function deleteFile(file, id){

    $.ajax({
        type : "POST",
        url : base_url + "api/tmp/delete",
        dataType: 'json',
        data : {file_name: file, tmp: $('#id_hash').val()},
        beforeSend: function(){ },
        success : function(json) {
            console.log($('#ls_'+id));
            if (json.success)
                $('#ls_'+id).remove();
            else
                error_toastr('Ups!', json.message);
        },
        error : function(xhr, status) {
            error_toastr('Ups!', 'Ha ocurrido un problema interno');
        },
        complete: function(){}
    });
}
