@extends('panel.overall.layout')
@if(Auth::check() && Auth::user()->id_rol==1)
@section('head')
<link rel="stylesheet" href="{{ asset('vendor/datatables/datatables/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/datatables/responsive/css/responsive.dataTables.min.css') }}">
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categorías</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('panel/dashboard') }}">Tablero</a></li>
                    <li class="breadcrumb-item active">Listado</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listado de categorías</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('categories.create') }}" class="btn btn-outline-primary mb-3">Crear nuevo</a>
            <table class="datatable table table-bordered table-striped w-100">
                <thead>
                    <tr>
                        <th>Categoría</th>
                        <th>Promoción</th>
                        <th>Creación</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody></tbody>
          </table>
        </div>

    </div>
</section>
@endsection


@section('footer')
<script src="{{ asset('vendor/datatables/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script>
    $(function () {
        $('.datatable').DataTable({
            ajax: "{{ url('api/categories') }}",
            responsive: true,
            initComplete: function(settings, json) {},
            columnDefs: [
		        { width: '10%', targets: 3 }
		    ],
            language : {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "No hay resultados.",
                "sInfo":           "Mostrando _START_ al _END_ de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
            }
        });
    });
</script>
@endsection
@else 
<script>window.location = "/error404";</script>
@endif
