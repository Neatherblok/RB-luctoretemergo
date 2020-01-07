<div class="col-md-5">
    <label for="last_name"
           class="col-form-label text-md-right">{{__('register.lastname')}}*</label>

    <input id="last_name" type="text"
           class="form-control @error('last_name') is-invalid @enderror"
           name="last_name" value="{{ old('last_name') }}" required
           autocomplete="last_name" autofocus>

    @error('last_name')
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
</div>
