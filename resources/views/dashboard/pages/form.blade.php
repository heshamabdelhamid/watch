@csrf
<div class="row">

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">page name</label>
            <input type="text" name="name" value=" {{ isset($page) ? $page->name : '' }} " class="form-control @error('name') is-invalid @enderror">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">page des</label>
            <input type="text" name="des" value=" {{ isset($page) ? $page->des : '' }} " class="form-control @error('des') is-invalid @enderror">

            @error('des')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Keywords </label>
            <input type="text" name="meta_keywords" value=" {{ isset($page) ? $page->meta_keywords : '' }} " class="form-control @error('meta_keywords') is-invalid @enderror">

            @error('meta_keywords')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Description</label>
            <textarea name="meta_des" id="" cols="30" class="form-control @error('meta_des') is-invalid @enderror" rows="10">
                {{ isset($page) ? $page->meta_des : '' }} 
            </textarea>
            @error('meta_des')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>
    
</div>