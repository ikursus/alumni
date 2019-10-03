@extends('layouts.app')

@section('kotak_biru')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">        

<div class="card">
<div class="card-header">{{ __('Profile User') }}</div>

<div class="card-body">

<img src="{{ asset('storage/' . $user->gambar) }}" style="max-width: 200px">

<p>Profile {{ $user->name }}</p>

<ul>
    <li>Email: {{ $user->email }}</li>
    <li>Phone: {{ $user->phone }}</li>    
    <li>NRIC: {{ $user->nric }}</li>
</ul>
</div>
<div class="card-footer">
<a href="/users" class="btn btn-secondary">Back</a>
<a href="{{ route('print.users', $user->id) }}" class="btn btn-primary">Download PDF</a>
</div>

</div>
</div>
</div>
</div>
@endsection