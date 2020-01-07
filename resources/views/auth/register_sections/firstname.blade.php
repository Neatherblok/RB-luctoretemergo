<div class="col-md-5">
    <label for="first_name"
           class="col-form-label text-md-right">{{__('register.firstname')}}*</label>

    <input id="first_name" type="text"
           class="form-control @error('first_name') is-invalid @enderror"
           name="first_name" value="{{ old('first_name') }}" required
           autocomplete="first_name" autofocus>

    @error('first_name')
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
</div>
