@extends('admin.layout.layout')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="card">

        <header class="card-header clearfix">

            <div class="pull-left">
                <h4>Distributor Coupons</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('distributor_coupon.distributor_coupons.create') }}" class="btn btn-success" title="Create New Distributor Coupon">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                </a>
            </div>

        </header>
        
        @if(count($distributorCoupons) == 0)
            <div class="card-body text-center">
                <h6>No Distributor Coupons Available.</h6>
            </div>
        @else
        <div class="card-body">
            <div class="adv-table">

                <table class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Total Quantity</th>
                            <th>Pending Quantity</th>
                            <th></th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($distributorCoupons as $distributorCoupon)
                        <tr>
                            <td>{{ optional($distributorCoupon->user)->name }}</td>
                            <td>{{ $distributorCoupon->total_quantity }}</td>
                            <td>{{ $distributorCoupon->quantity }}</td>

                            <td>

                                {{-- <form method="POST" action="{!! route('distributor_coupon.distributor_coupons.destroy', $distributorCoupon->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }} --}}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('distributor_coupon.distributor_coupons.edit', $distributorCoupon->id ) }}" class="btn btn-primary tooltips" title="Edit Distributor Coupon" data-toggle="tooltip" data-placement="bottom" data-original-title="Tooltip on bottom">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>

                                       {{--  <button type="submit" class="btn btn-danger tooltips" title="Delete Distributor Coupon" onclick="return confirm(&quot;Click Ok to delete Distributor Coupon.&quot;)" data-toggle="tooltip" data-placement="bottom" data-original-title="Tooltip on bottom">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button> --}}
                                    </div>

                                {{-- </form> --}}
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        @endif
    
    </div>
@stop
@section('js')
<script type="text/javascript" language="javascript" src="/ad_asset/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/ad_asset/assets/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="/ad_asset/js/dynamic_table_init.js"></script>
@endsection