@csrf
<div class="row">

    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Username</label>
        <input type="text" name="name" value=" {{ isset($user) ? $user->name : '' }} " class="form-control @error('name') is-invalid @enderror">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Email address</label>
        <input type="email" name="email" value=" {{ isset($user) ? $user->email : '' }} " class="form-control @error('email') is-invalid @enderror">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">

        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
    </div>
    
</div>