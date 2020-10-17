@extends('admin.layout.layout')

@section('content')

    <div class="card">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif

        <header class="card-header">
            
            <span class="pull-left">
                <h4>Change Password</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('dashboard') }}" class="btn btn-primary tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Dashboard">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                </a>
            </div>

        </header>

        <div class="card-body">
        

            <form method="POST" accept-charset="UTF-8"class="form-horizontal">
                {{ csrf_field() }}
                
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class="col-md-2 control-label">Old Password</label>
                    <div class="col-md-10">
                        <input class="form-control" name="oldpassword" type="password" placeholder="Enter password here...">
                        {!! $errors->first('oldpassword', '<p class="invalid-feedback" style="display:block;">:message</p>') !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class="col-md-2 control-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control" name="password" type="password" id="name" placeholder="Enter Password here...">
                        {!! $errors->first('password', '<p class="invalid-feedback" style="display:block;">:message</p>') !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class="col-md-2 control-label">Confirm Password</label>
                    <div class="col-md-10">
                        <input class="form-control" name="password_confirmation" type="password" placeholder="Enter confirm Password here...">
                        {!! $errors->first('password_confirmation', '<p class="invalid-feedback" style="display:block;">:message</p>') !!}
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Change Password">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


