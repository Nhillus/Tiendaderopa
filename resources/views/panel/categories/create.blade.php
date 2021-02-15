@extends('panel.overall.layout')

@section('head')
<link rel="stylesheet" href="{{ asset('vendor/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Nueva categoría</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categorías</a></li>
                      <li class="breadcrumb-item active">Crear categoría</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
              <h3 class="card-title">Crear nueva categoría</h3>
        </div>

        <form role="form" id="categories_form">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_name">Categoría <span class="required">*</span></label>
                        <input type="text" name="name" id="id_name" class="form-control" placeholder="Nombre de la categoría">
                        <span class="error-message" validation-name="name"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_promotion_id">Promoción</label>
                        <select class="form-control select2bs4" id="id_promotion_id" style="width: 100%;" name="promotion_id">
                            <option value>- Promoción -</option>
                            @foreach ($promotion as $p)
                            <option value="{{ $p->id }}">{{ $p->title }}</option>
                            @endforeach
                        </select>
                        <span class="error-message" validation-name="promotion_id"></span>
                    </div>
                </div>



            </div>


            <div class="card-footer">
                <button type="submit" id="categories_btn" class="btn btn-primary">Guardar</button>
            </div>

        </form>

    </div>
</section>
@endsection

@section('footer')
<script src="{{ asset('vendor/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $('.dropify').dropify();
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
</script>
<script src="{{ asset('admin/jscontrollers/categories/create.js') }}"></script>
@endsection
