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
                <h4>Customers</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('salecoupon.create') }}" class="btn btn-success" title="Create New Faq">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                </a>
            </div>

        </header>
        
        @if(count($customers) == 0)
            <div class="card-body text-center">
                <h6>No Customers Available.</h6>
            </div>
        @else
        <div class="card-body">
            <div class="adv-table">

                <table class="display table table-bordered table-striped table-responsive" id="dynamic-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Quantity </th>
                            <th>Distributor </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{!! $customer->number !!}</td>
                            <td>{{ $customer->quantity }}</td>
                            <td>{{ Auth::user()->name }}</td>
                            <td>
                                <a href="{{ route('saleDownloadPdf',['name'=>$customer->name,'id'=>$customer->id]) }}">Download PDF</a>
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