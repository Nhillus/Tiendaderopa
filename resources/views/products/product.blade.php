@section('appHead')
@extends('overall.layout')

@endsection


@section('appBody')

                                    
    <form action="{{route('api.securepay')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <script src="https://securionpay.com/checkout.js"
            class="securionpay-button"
            data-key="pk_test_E2mbQMCl2nDAIKpG83LKsEaK"
            data-checkout-request="YjRkZjQxNjEzNDY2ZTBlYWM1ZmZiZDhmNjM3MDhhZTcwMjk5MDk0MzVjMGIyZTAzNjFmMDQxZDQ5ODViNzMwYnx7ImNoYXJnZSI6eyJhbW91bnQiOjQ5OSwiY3VycmVuY3kiOiJFVVIifX0="
            data-name="SecurionPay"
            data-description="Checkout example"
            data-checkout-button="Payment button">
        </script>
    </form>
    
    <form action="{{url('/secure-pay')}}"  method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Pagar</button>
    </form>




@endsection