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
                <h4>Distributers</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('distributor.create') }}" class="btn btn-success" title="Create New Faq">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                </a>
            </div>

        </header>
        
        @if(count($distributors) == 0)
            <div class="card-body text-center">
                <h6>No Distrbutor Created.</h6>
            </div>
        @else
        <div class="card-body">
            <div class="adv-table">

                <table class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Total Voucher </th>
                            <th>Pending Voucher </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($distributors as $distributor)
                        <tr>
                            <td>{{ $distributor->name }}</td>
                            <td>{!! $distributor->email !!}</td>
                            <td>{{ $distributor->distributeCoupon->total_quantity ?? '' }}</td>
                            <td>{{ $distributor->distributeCoupon->quantity ?? '' }}</td>
                            <td>

                                <a href="{{ route('distributor.edit', $distributor->id ) }}" class="btn btn-primary tooltips" title="Edit Faq" data-toggle="tooltip" data-placement="bottom" data-original-title="Tooltip on bottom">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>

                                <a class="btn btn-danger tooltips" href="{{ route('distributor.destroy', $distributor->id) }}" title="Delete Faq" data-toggle="tooltip" data-placement="bottom" data-original-title="Tooltip on bottom">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                                
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