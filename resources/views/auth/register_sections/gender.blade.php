<div class="col-md-3">
    <label class="col-form-label" for="select_1">{{__('register.gender')}}*</label>
    <select class="form-control @error('gender') is-invalid @enderror" id="select_1" name="gender" required>
        <option value="">-</option>
        <option value="male">{{__('register.genders.male')}}</option>
        <option value="female">{{__('register.genders.female')}}</option>
        <option value="other">{{__('register.genders.other')}}</option>
    </select>
</div>
