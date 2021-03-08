@extends('panel.overall.layout')
@if(Auth::check() && Auth::user()->rol_id==1)

@section('head')
<link rel="stylesheet" href="{{ asset('vendor/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Nuevo producto</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productoss</a></li>
                      <li class="breadcrumb-item active">Crear producto</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
              <h3 class="card-title">Crear nuevo producto</h3>
        </div>

        <form role="form" id="products_form">
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_title">Título <span class="required">*</span></label>
                        <input type="text" name="title" id="id_title" class="form-control" value="{{ $product->title }}" placeholder="Título del producto">
                        <span class="error-message" validation-name="title"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_category_id">Categoría <span class="required">*</span></label>
                        <select class="form-control select2bs4" id="id_category_id" style="width: 100%;" name="category_id">
                            <option value>Seleccionar categoría</option>
                            @foreach ($category as $c)
                            <option {{ $product->category_id == $c->id ? 'selected' : '' }} value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                        <span class="error-message" validation-name="category_id"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_subcategory_id">Sub-Categoría</label>
                        <select class="form-control select2bs4" id="id_subcategory_id" style="width: 100%;" name="subcategory_id">
                            <option value>Seleccionar sub-categoría</option>
                        </select>
                        <span class="error-message" validation-name="subcategory_id"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_real_price">Precio real <span class="required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="text" class="form-control numeric" id="id_real_price" name="real_price" value="{{ $product->real_price }}" placeholder="Precio real del producto">
                        </div>
                        <span class="error-message" validation-name="real_price"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_offer_price">Precio descuento</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="text" class="form-control numeric" readonly id="id_offer_price" value="{{ $product->offer_price }}" name="offer_price" placeholder="Precio de descuento">
                        </div>
                        <span class="error-message" validation-name="offer_price"></span>
                    </div>


                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_offer_percent">Porcentaje descuento</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-percent"></i></span>
                            </div>
                            <input type="text" class="form-control numeric" id="id_offer_percent" value="{{ $product->offer_percent }}" name="offer_percent" placeholder="Porcentaje del descuento">
                        </div>
                        <span class="error-message" validation-name="offer_percent"></span>
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_shipping_price">Precio de envío</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="text" class="form-control numeric" id="id_shipping_price" value="{{ $product->shipping_price }}" name="shipping_price" placeholder="Precio de envío">
                        </div>
                        <span class="error-message" validation-name="shipping_price"></span>
                    </div>


                    <div class="form-group col-md-6 col-lg-6">
                        <label for="id_shipping_days">Días de envío</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-shipping-fast"></i></span>
                            </div>
                            <input type="text" class="form-control numeric" id="id_shipping_days" value="{{ $product->shipping_days }}" name="shipping_days" placeholder="Días del envío">
                        </div>
                        <span class="error-message" validation-name="offer_percent"></span>
                    </div>


                    <div class="form-group col-md-12 col-lg-12">
                        <label for="id_description">Descripción <span class="required">*</span></label>
                        <textarea placeholder="Descripción del producto" id="id_description" name="description"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $product->description }}</textarea>
                        <span class="error-message" validation-name="description"></span>
                    </div>

                    <div class="form-group col-md-12 col-lg-12">
                        <hr>
                        <h4 class="mb-3">Imágenes del producto <span class="required">*</span></h4>
                        <ul class="list-images-upload" id="images_list">
                            <li>
                                <div class="upload-image-item add-image" id="upload_image_trigger">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <input type="file" class="d-none" id="upload_image_list" name="image_list" accept="image/*" multiple>
                            </li>

                            @foreach ($files as  $file)
                            <li id="ls_{{ $file['id'] }}">
                                <div class="upload-image-item">
                                    <img class="image" src="{{ $file['fullFile'] }}" alt="{{ $file['name'] }}">
                                    <div class="action">
                                        <a href="javascript:deleteFile('{{ $file['name'] }}', '{{ $file['id'] }}')">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div>


                    <input type="hidden" value="{{ $hash }}" id="id_hash" name="hash">
                </div>


            </div>


            <div class="card-footer">
                <button type="submit" id="products_btn" class="btn btn-primary">Guardar</button>
            </div>

        </form>

    </div>
</section>
@endsection
@section('footer')
<script src="{{ asset('vendor/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admin/jscontrollers/products/products.js') }}" data-subcategory="{{ $product->subcategory_id }}"></script>
<script>
    $('.dropify').dropify();
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });
    $('#id_description').summernote({
        height: 300
    });
    $('#id_category_id').trigger('change');
</script>
<script src="{{ asset('admin/jscontrollers/products/edit.js') }}" data-id_product="{{ $product->id }}"></script>
@endsection
@else 
<script>window.location = "/error404";</script>
@endif


