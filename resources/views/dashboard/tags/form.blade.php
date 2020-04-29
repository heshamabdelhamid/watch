@csrf
<div class="row">

    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">tag name</label>
        <input type="text" name="name" value=" {{ isset($tag) ? $tag->name : '' }} " class="form-control @error('name') is-invalid @enderror">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
    </div>
    
</div>