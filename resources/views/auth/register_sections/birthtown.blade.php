<div class="col-md-3">
    <label class="col-form-label" for="birthtown">{{__('register.birthtown')}}*</label>

    <input id="birthtown" type="text"
           class="form-control @error('birthtown') is-invalid @enderror"
           name="birthtown" value="{{ old('birthtown') }}" required>

    @error('birthtown')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
