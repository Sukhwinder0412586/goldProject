

<div class="form-group {{ $errors->has('voucher') ? 'has-error' : '' }}">
    <label for="quantity" class="col-md-2 control-label">Voucher</label>
    <div class="col-md-10">
        <input class="form-control" name="voucher" type="text" id="voucher" value="{{ old('voucher') }}" minlength="1" placeholder="Enter voucher here...">
    {!! $errors->first('voucher', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>


