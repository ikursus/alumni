@extends('layouts.app')

@section('kotak_biru')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">        

<div class="card">
<div class="card-header">{{ __('Tambah User') }}</div>

<div class="card-body">

<form method="POST" action="">
    @csrf

    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

        <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="nric" class="col-md-4 col-form-label text-md-right">{{ __('No. IC') }}</label>

        <div class="col-md-6">
            <input id="nric" type="text" class="form-control @error('nric') is-invalid @enderror" name="nric" value="{{ old('nric') }}"  autocomplete="nric" autofocus>

            @error('nric')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row">
        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

        <div class="col-md-6">
            <textarea id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" autofocus></textarea>

            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="race" class="col-md-4 col-form-label text-md-right">{{ __('Race') }}</label>

        <div class="col-md-6">
            <input id="race" type="text" class="form-control @error('race') is-invalid @enderror" name="race" value="{{ old('race') }}"  autocomplete="race" autofocus>

            @error('race')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>

        <div class="col-md-6">
            <input id="religion" type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}"  autocomplete="religion" autofocus>

            @error('religion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>

        <div class="col-md-6">
            <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}"  autocomplete="nationality" autofocus>

            @error('nationality')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status Perkahwinan') }}</label>

        <div class="col-md-6">
            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
                <option value="berkahwin">Berkahwin</option>
                <option value="bujang">Bujang</option>
                <option value="lain">Lain - Lain</option>
            </select>

            @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

        <div class="col-md-6">
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" autofocus>

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

        <div class="col-md-6">
            <select id="role" class="form-control @error('role') is-invalid @enderror" name="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

            @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <a href="/users" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">
                {{ __('Submit') }}
            </button>
        </div>
    </div>
</form>

</div>

</div>
</div>
</div>
</div>
@endsection