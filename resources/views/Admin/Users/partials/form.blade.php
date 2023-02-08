@csrf

<div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
        value="{{ old('name') }} @isset($user) {{$user->name}} @endisset">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
        value="{{ old('email') }} @isset($user) {{$user->email}} @endisset">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

@isset($create)
<!-- <div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

</div> -->

<!-- <div class="row mb-3">
    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">Password Confirm</label>

    <div class="col-md-6">
        <input name="password" id="password" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

</div> -->
@endisset
<div class="mb-3">
    @foreach($roles as $role)
    <div class="form-check">
        <input  class="form-check-input" name="roles[]"
        type="checkbox" value="{{$role->id}}" id="{{$role->name}}"
        @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
        <label class="form-check-label" for="{{$role->name}}">
            {{$role->name}}
        </label>
    </div>
    @endforeach
</div>


<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
     Submit
        </button>