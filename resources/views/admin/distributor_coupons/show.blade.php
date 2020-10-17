@extends('admin.layout.layout')

@section('content')

<div class="card">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Distributor Coupon' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('distributor_coupon.distributor_coupons.destroy', $distributorCoupon->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('distributor_coupon.distributor_coupons.index') }}" class="btn btn-primary" title="Show All Distributor Coupon">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('distributor_coupon.distributor_coupons.create') }}" class="btn btn-success" title="Create New Distributor Coupon">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('distributor_coupon.distributor_coupons.edit', $distributorCoupon->id ) }}" class="btn btn-primary" title="Edit Distributor Coupon">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Distributor Coupon" onclick="return confirm(&quot;Click Ok to delete Distributor Coupon.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>User</dt>
            <dd>{{ optional($distributorCoupon->user)->id }}</dd>
            <dt>Quantity</dt>
            <dd>{{ $distributorCoupon->quantity }}</dd>

        </dl>

    </div>
</div>

@endsection