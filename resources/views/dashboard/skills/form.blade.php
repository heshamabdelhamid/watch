@csrf
<div class="row">

    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Skill name</label>
        <input type="text" name="name" value=" {{ isset($skill) ? $skill->name : '' }} " class="form-control @error('name') is-invalid @enderror">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
    </div>
    
</div>