<div class="form-group row justify-content-center">
    <div class="col-md-10 align-items-center">
        <label for="password"
               class="col-form-label text-md-right">{{ __('register.password') }}*</label>

        <input id="password" type="password"
               class="form-control @error('password') is-invalid @enderror"
               name="password"
               required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>
