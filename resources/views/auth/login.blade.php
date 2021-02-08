@extends('layouts.app')

@section('content')
 
@if (session('info'))
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger" role="alert">
                        <strong>{{session('info')}}</strong>
                    </div>
                </div>
            </div>
        </div>  
@endif
<div>Esto de aqui abajo esta dentro de un componente revisa resource/js/auth/login.blade.php, luego de ver lo anterior revisa el componente prueba.vue y revisa app.js en la linea 9 hago la llamada de este componente</div>
<login-component/>
@endsection
