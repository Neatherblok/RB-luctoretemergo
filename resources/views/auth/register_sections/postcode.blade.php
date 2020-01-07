<div class="col-md-2">
    <label class="col-form-label" for="postcode">{{__('register.postcode')}}*</label>

    <input id="adress" type="text"
           class="form-control @error('postcode') is-invalid @enderror"
           name="postcode" value="{{ old('postcode') }}" placeholder="9999XX" required>

    @error('postcode')
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
</div>
