@extends('user.layout.layout')

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
                <h4>Winners Coupon</h4>
            </div>

           

        </header>
        
        @if(count($data) == 0)
            <div class="card-body text-center">
                <h6>No Winners yet.</h6>
            </div>
        @else
        <div class="card-body">
            <div class="adv-table">

                <table class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Voucher</th>
                            <th>Amount </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dt)
                        <tr>
                            <td>{{ $dt->customer->name }}</td>
                            <td>{!! $dt->coupon !!}</td>
                            <td>{{ $dt->amount }}</td>
                            <td>
                                @if($dt->is_delivered == 0)

                                    <a href="{{ route('winner_status',['id'=>$dt->id]) }}">Not Delivered</a>
                                @else
                                    <span style="color: green;">Delivered</span>
                                @endif
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