
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="question" class="col-md-2 control-label">Customer Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" value="{{ old('name', optional($Customer)->name) }}" minlength="1" placeholder="Enter customer Name here...">
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="question" class="col-md-2 control-label">Phone Number</label>
    <div class="col-md-10">
        <input class="form-control" name="number" type="number" value="{{ old('number', optional($Customer)->number) }}" minlength="1" placeholder="Enter customer number here...">
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
    <label for="quantity" class="col-md-2 control-label">Quantity</label>
    <div class="col-md-10">
        <input class="form-control" name="quantity" type="text" id="quantity"  minlength="1" placeholder="Enter quantity here...">
        {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

