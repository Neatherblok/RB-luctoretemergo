<div class="col-md-3">
    <label class="col-form-label" for="hometown">{{__('register.hometown')}}*</label>

    <input id="hometown" type="text"
           class="form-control @error('hometown') is-invalid @enderror"
           name="hometown" value="{{ old('hometown') }}" required>

    @error('hometown')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
