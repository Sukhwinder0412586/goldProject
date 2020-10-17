
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="question" class="col-md-2 control-label">Distributor Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" value="{{ old('name', optional($distributor)->name) }}" minlength="1" placeholder="Enter distributor Name here...">
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="question" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="email" value="{{ old('email', optional($distributor)->email) }}" minlength="1" placeholder="Enter distributor Name here...">
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

@if(\Request::route()->getName() != "distributor.edit")
    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <label for="question" class="col-md-2 control-label">Password</label>
        <div class="col-md-10">
            <input class="form-control" name="password" type="Password"  minlength="1" placeholder="Enter distributor Name here...">
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
@endif

