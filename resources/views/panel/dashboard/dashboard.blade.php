@extends('panel.overall.layout')

@if(Auth::check() && Auth::user()->rol_id==1)
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tablero</h1>
            </div>
        </div>
    </div>
</section>
@endsection
@else 
<script>window.location = "/error404";</script>
@endif
