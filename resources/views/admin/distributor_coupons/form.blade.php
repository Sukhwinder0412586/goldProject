
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="js-example-basic-single" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($distributorCoupon)->user_id ?: '') == '' ? 'selected' : '' }} disabled="" abled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($distributorCoupon)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>      
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
    <label for="quantity" class="col-md-2 control-label">Quantity</label>
    <div class="col-md-10">
        <input class="form-control" name="quantity" type="text" id="quantity" value="{{ old('quantity', optional($distributorCoupon)->quantity) }}" minlength="1" placeholder="Enter quantity here...">
        {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

