<div class="col-md-5">
    <label class="col-form-label" for="adress">{{__('register.adress')}}*</label>

    <input id="adress" type="text"
           class="form-control @error('adress') is-invalid @enderror"
           name="adress" value="{{ old('adress') }}" required>

    @error('adress')
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
</div>
