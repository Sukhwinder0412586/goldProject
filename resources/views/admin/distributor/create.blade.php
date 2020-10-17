@extends('admin.layout.layout')

@section('content')

    <div class="card">

        <header class="card-header">
            
            <span class="pull-left">
                <h4>Create New Distributor</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('distributor.index') }}" class="btn btn-primary" title="Show All Faq">
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

            <form method="POST" action="{{ route('distributor.create') }}" accept-charset="UTF-8" id="create_faq_form" name="create_faq_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('admin.distributor.form', [
                                        'distributor' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


