@extends('layouts.app')

@section('kotak_biru')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">        

<div class="card">
<div class="card-header">{{ __('Tambah Religion') }}</div>

<div class="card-body">

@include('layouts.alerts')

<form method="POST" action="/religions">
    @csrf


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


    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <a href="/religions" class="btn btn-secondary">Back</a>
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