<div class="col-md-4">
    <label class="col-form-label" for="birthday">{{__('register.birthday')}}*</label>
    <input id="birthday" type="text"
           class="form-control @error('birthday') is-invalid @enderror"
           name="birthday" value="{{ old('birthday') }}" placeholder="dd-mm-jjjj" required>

    @error('birthday')
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
</div>
