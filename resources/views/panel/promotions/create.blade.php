@extends('panel.overall.layout')

@section('head')
<link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/dropify/css/dropify.min.css') }}">
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Nueva promoción</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ route('promotions.index') }}">Promociones</a></li>
                      <li class="breadcrumb-item active">Crear promoción</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
              <h3 class="card-title">Crear nueva promoción</h3>
        </div>

        <form role="form" id="promotions_form">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_title">Título <span class="required">*</span></label>
                        <input type="text" name="title" id="id_title" class="form-control" placeholder="Nombre de la promoción">
                        <span class="error-message" validation-name="title"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_shipping">Tipo de entrega</label>
                        <input type="text" name="shipping" id="id_shipping" class="form-control" placeholder="Tipo de entrega">
                        <span class="error-message" validation-name="shipping"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_offer_percent">Porcentaje de la oferta</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-percent"></i></span>
                            </div>
                            <input type="text" class="form-control numeric" name="offer_percent" id="id_offer_percent" placeholder="Porcentaje de descuento">
                        </div>
                        <span class="error-message" validation-name="offer_percent"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_offer_time">Tiempo de la oferta</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                            </div>
                            <input type="text" class="form-control float-right date-range" id="id_offer_time" name="offer_time">
                        </div>
                        <span class="error-message" validation-name="offer_time"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_description">Descripción <span class="required">*</span></label>
                        <textarea name="description" rows="9" id="id_description" class="form-control" placeholder="Descripción de la promoción"></textarea>
                        <span class="error-message" validation-name="description"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="id_image">Asignar imagen</label>
                            <input type="file" id="id_image" name="image_promotion" class="dropify" data-default-file="" data-height="218" data-width="200px" data-allowed-file-extensions="jpg jpeg png gif"/>
                            <span class="error-message" validation-name="image_promotion"></span>
                        </div>
                    </div>
                </div>



            </div>


            <div class="card-footer">
                <button type="submit" id="promotions_btn" class="btn btn-primary">Guardar</button>
            </div>

        </form>

    </div>
</section>
@endsection

@section('footer')
<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendor/dropify/js/dropify.min.js') }}"></script>

<script>
    $('.date-range').daterangepicker({
        autoUpdateInput: false,
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A',
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "Desde",
            toLabel: "Hasta",
            customRangeLabel: "Personalizado",
            daysOfWeek: [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa"
            ],
            monthNames: [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ]
        }
    },
    (from_date, to_date) => {
        $('.date-range').val(from_date.format('DD/MM/YYYY hh:mm a') + ' - ' + to_date.format('DD/MM/YYYY hh:mm a'));
    })

    $('.dropify').dropify();
</script>
<script src="{{ asset('admin/jscontrollers/promotions/create.js') }}"></script>
@endsection
