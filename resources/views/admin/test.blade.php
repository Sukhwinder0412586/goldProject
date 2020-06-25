@extends('admin.layout.layout')

@section('content')

    <section class="card">

        <header class="card-header">
            Create New City 

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="" class="btn btn-dark" title="Show All City">
                  <i class="fa fa-tasks"></i>
                </a>
            </div>

        </header>

        <div class="card-body">
        
            <form method="POST" action="" accept-charset="UTF-8" id="create_city_form" name="create_city_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('admin.form')

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </section>

@endsection


