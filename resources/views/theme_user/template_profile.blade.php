@extends('layouts.app')

@section('kotak_biru')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">        

<div class="card">
<div class="card-header">{{ __('Profile User') }}</div>

<div class="card-body">

<p>Profile {{ $user->name }}</p>

<ul>
    <li>Email: {{ $user->email }}</li>
    <li>Phone: {{ $user->phone }}</li>    
    <li>NRIC: {{ $user->nric }}</li>
</ul>
</div>
<div class="card-footer">
<a href="/users" class="btn btn-secondary">Back</a>
</div>

</div>
</div>
</div>
</div>
@endsection