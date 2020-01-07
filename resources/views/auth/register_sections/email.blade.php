<div class="form-group row justify-content-center">
    <div class="col-md-10">
        <label for="email"
               class="col-form-label text-md-right">{{ __('register.emailadres')}}*</label>

        <input id="email" type="email"
               class="form-control @error('email') is-invalid @enderror" name="email"
               value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>
