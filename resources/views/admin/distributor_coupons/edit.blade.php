@extends('admin.layout.layout')

@section('content')

    <div class="card">
  
        <header class="card-header">

            <div class="pull-left">
                <h4>{{ !empty($title) ? $title : 'Distributor Coupon' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('distributor_coupon.distributor_coupons.index') }}" class="btn btn-primary" title="Show All Distributor Coupon">
                    <i class="fa fa-list" aria-hidden="true"></i>
                </a>

                <a href="{{ route('distributor_coupon.distributor_coupons.create') }}" class="btn btn-success" title="Create New Distributor Coupon">
                   <i class="fa fa-plus-square" aria-hidden="true"></i>
                </a>

            </div>
        </header>

        <div class="card-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('distributor_coupon.distributor_coupons.edit', $distributorCoupon->id ) }}" id="edit_distributor_coupon_form" name="edit_distributor_coupon_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('admin.distributor_coupons.form', [
                                        'distributorCoupon' => $distributorCoupon,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection