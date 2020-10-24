
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('ad_asset/css/make.css') }}">
<div style="background: url(https://static.vecteezy.com/system/resources/previews/000/558/627/non_2x/vector-abstract-background-technology-network-design.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
<div class="container tex-center">
<div class="row">
<div class="col-md-12 col-sm-12">
<center><img src="/ad_asset/img/make.jpg" class="make" width="100%"></center>

@if(Session::has('amount'))

<form action="/pay" method="POST">
<script src="/ad_asset/js/checkout.js"
                                data-key="rzp_test_W1PJyvPOyYKnhT"
                                data-amount="{{Session::get('amount')}}"
                                data-buttontext="Make Payment"
                                data-currency="INR"
                                data-order_id="{{Session::get('order_id')}}"
                                data-theme.color="#ff7529">
                        </script>
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">



</form>
</div>

</div>
</div>
@endif
</div>