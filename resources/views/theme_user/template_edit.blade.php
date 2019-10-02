@extends('layouts.app')

@section('kotak_biru')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">        

<div class="card">
<div class="card-header">{{ __('Tambah User') }}</div>

<div class="card-body">

@include('layouts.alerts')

<form method="POST" action="">
    @csrf
    <!-- <input type="hidden" name="_method" value="PATCH"> -->
    @method('PATCH')
    
    <div class="form-group row">
        <label for="title_id" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

        <div class="col-md-6">
            <select id="title_id" class="form-control @error('title_id') is-invalid @enderror" name="title_id">
                <option value="1"{{ $user->title_id == 1 ? ' selected="selected"' : null }}>Encik</option>
                <option value="2"{{ $user->title_id == 2 ? ' selected="selected"' : null }}>Cik</option>
            </select>

            @error('title_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}"  autocomplete="name" autofocus>

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
            <input id="nric" type="text" class="form-control @error('nric') is-invalid @enderror" name="nric" value="{{ $user->nric }}"  autocomplete="nric" autofocus>

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
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}"  autocomplete="email">

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
            <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address">{{ $user->address }}</textarea>

            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="race_id" class="col-md-4 col-form-label text-md-right">{{ __('Race') }}</label>

        <div class="col-md-6">
            
            <select id="race_id" class="form-control @error('race_id') is-invalid @enderror" name="race_id">
            @foreach( $senaraiRace as $item )
                <option value="{{ $item->id }}"{{ $user->race_id == $item->id ? ' selected="selected"' : null }}>{{ $item->name }}</option>
            @endforeach
            </select>

            @error('race_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>

        <div class="col-md-6">
            
        <select id="religion_id" class="form-control @error('religion_id') is-invalid @enderror" name="religion_id">
            @foreach( $senaraiReligion as $item )
                <option value="{{ $item->id }}"{{ $user->race_id == $item->id ? ' selected="selected"' : null }}>{{ $item->name }}</option>
            @endforeach
        </select>

            @error('religion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="nationality_id" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>

        <div class="col-md-6">
            <select id="nationality_id" class="form-control @error('nationality_id') is-invalid @enderror" name="nationality_id">
                <option value="1"{{ $user->nationality_id == '1' ? 'selected="selected"' : null }}>Malaysian</option>
                <option value="2"{{ $user->nationality_id == '2' ? 'selected="selected"' : null }}>Lain - Lain</option>
            </select>

            @error('nationality')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

        <div class="col-md-6">
            <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender">
                <option value="lelaki"{{ $user->gender == 'lelaki' ? 'selected="selected"' : null }}>Lelaki</option>
                <option value="perempuan"{{ $user->gender == 'perempuan' ? 'selected="selected"' : null }}>Perempuan</option>
                <option value="lain"{{ $user->gender == 'lain' ? 'selected="selected"' : null }}>Lain - Lain</option>
            </select>

            @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="status_perkahwinan" class="col-md-4 col-form-label text-md-right">{{ __('status_perkahwinan Perkahwinan') }}</label>

        <div class="col-md-6">
            <select id="status_perkahwinan" class="form-control @error('status_perkahwinan') is-invalid @enderror" name="status_perkahwinan">
                <option value="berkahwin"{{ $user->status_perkahwinan == 'berkahwin' ? 'selected="selected"' : null }}>Berkahwin</option>
                <option value="bujang"{{ $user->status_perkahwinan == 'bujang' ? 'selected="selected"' : null }}>Bujang</option>
                <option value="lain"{{ $user->status_perkahwinan == 'lain' ? 'selected="selected"' : null }}>Lain - Lain</option>
            </select>

            @error('status_perkahwinan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

        <div class="col-md-6">
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}"  autocomplete="phone" autofocus>

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
                <option value="admin"{{ $user->role == 'admin' ? 'selected="selected"' : null }}>Admin</option>
                <option value="user"{{ $user->role == 'user' ? 'selected="selected"' : null }}>User</option>
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