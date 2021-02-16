@extends('layouts.appcopy')
@section('content')


<div class="modal fade" id="crud-modal" aria-hidden="true" >
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="customerCrudModal"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                       <login-component/>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
  
   
 
@endsection