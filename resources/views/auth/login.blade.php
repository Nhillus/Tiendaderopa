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
<login-component/>
@endsection
