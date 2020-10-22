@extends('admin.layout.layout')

@section('content')

    <div class="card">
    
        @if(Session::has('error_message'))
            <div class="alert alert-danger">
                {!! session('error_message') !!}

                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        @endif


        @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
        <header class="card-header">
            
            <span class="pull-left">
                <h4>Coupon Selection</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('salecoupon.index') }}" class="btn btn-primary" title="Coupon Selection ">
                    <i class="fa fa-list" aria-hidden="true"></i>
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

            <form method="POST" action="{{ route('coupon_selections.create') }}" accept-charset="UTF-8" id="create_distributor_coupon_form" name="create_distributor_coupon_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('admin.coupon_selections.form', [
                                        'Customer' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@stop
@section('js')
<script type="text/javascript" src="/ad_asset/assets/select2/js/select2.min.js"></script>
<script src="/ad_asset/js/advanced-form-components.js"></script>
<!--select2-->
<script type="text/javascript">

  $(document).ready(function () {
      $(".js-example-basic-single").select2();

      $(".js-example-basic-multiple").select2();
  });
</script>
@endsection


