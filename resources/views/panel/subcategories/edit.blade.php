@extends('panel.overall.layout')
@if(Auth::check() && Auth::user()->id_rol==1)


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
                <h1>Edición de sub-categoría</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ route('subcategories.index') }}">Sub-Categorías</a></li>
                      <li class="breadcrumb-item active">Editar sub-categoría</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
              <h3 class="card-title">Editar sub-categoría</h3>
        </div>

        <form role="form" id="subcategories_form">
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_name">Sub-Categoría <span class="required">*</span></label>
                        <input type="text" name="name" id="id_name" class="form-control" placeholder="Nombre de la sub-categoría" value="{{ $subcategory->name }}">
                        <span class="error-message" validation-name="name"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_category_id">Categoría <span class="required">*</span></label>
                        <select class="form-control select2bs4" id="id_category_id" style="width: 100%;" name="category_id">
                            <option value>Seleccionar categoría</option>
                            @foreach ($category as $c)
                            <option {{ $subcategory->category_id == $c->id ? 'selected' : '' }} value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                        <span class="error-message" validation-name="category_id"></span>
                    </div>
                </div>



            </div>


            <div class="card-footer">
                <button type="submit" id="subcategories_btn" class="btn btn-primary">Guardar</button>
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
<script src="{{ asset('admin/jscontrollers/subcategories/edit.js') }}" data-id_subcategory="{{ $subcategory->id }}"></script>
@endsection
<script>window.location = "/error404";</script>
@endif
