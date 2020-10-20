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

            <!-- <div class="pull-left">
                <h4>Confirmation</h4>
            </div> -->


        </header>
        
       
        <div class="card-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Confirmation</h3>
                </div>
                <div class="panel-body">
                    Customer : {{ $data->customer->name }} <br>
                    Customer Phone Number : {{ $data->customer->number }} <br>
                    Distributor : {{ $data->distributor->name }} <br>
                    Distributor Email : {{ $data->distributor->email }} <br>
                    Voucher : {{ $data->coupon }}
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('coupon_transaction_save') }}" accept-charset="UTF-8" id="create_faq_form" name="create_faq_form" class="form-horizontal">
        @csrf
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="question" class="col-md-2 control-label">Enter Amount</label>
            <div class="col-md-10">
                <input class="form-control" name="amount" type="text" value="" minlength="1" placeholder="Enter amount  here...">
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <input type="hidden" name="distributor_id" value="{{ $data->distributor->id }}">
            <input type="hidden" name="cust_id" value="{{ $data->customer->id }}">
            <input type="hidden" name="coupon" value="{{$data->coupon }}">

        </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Send">
                    </div>
                </div>



    </form>
    
    </div>
@endsection