@extends('user.layout.layout')
@section('title')
Dashboard
@stop
@section('content')
    <!--state overview start-->
    <div class="row state-overview">
      <div class="col-lg-3 col-sm-6">
          <section class="card">
              <div class="symbol terques">
                  <i class="fa fa-user"></i>
              </div>
              <div class="value">
                  <h1 class="count">
                  {{$stats->total_quantity}}
                  </h1>
                  <p>Total Voucher</p>
              </div>
          </section>
      </div>
      <div class="col-lg-3 col-sm-6">
          <section class="card">
              <div class="symbol red">
                  <i class="fa fa-tags"></i>
              </div>
              <div class="value">
                  <h1 class=" count2">
                  {{$stats->quantity}}
                  </h1>
                  <p>current Coupons</p>
              </div>
          </section>
      </div>
      <div class="col-lg-3 col-sm-6">
          <section class="card">
              <div class="symbol yellow">
                  <i class="fa fa-shopping-cart"></i>
              </div>
              <div class="value">
                  <h1 class=" count3">
                  {{$stats->total_quantity - $stats->quantity}}
                  </h1>
                  <p>Sales Coupons</p>
              </div>
          </section>
      </div>
      <div class="col-lg-3 col-sm-6">
          <section class="card">
              <div class="symbol blue">
                  <i class="fa fa-bar-chart-o"></i>
              </div>
              <div class="value">
                  <h1 class=" count4">
                  {{ $customer }}
                  </h1>
                  <p>Total Customer</p>
              </div>
          </section>
      </div>
    </div>
    <!--state overview end-->

    

@endsection




