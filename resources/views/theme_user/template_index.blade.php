@extends('layouts.app')

@section('kotak_biru')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">        

<p>
<a href="/users/add" class="btn btn-primary">Tambah User</a>
</p>


<div class="card">
<div class="card-header">{{ __('Senarai Users') }}</div>

<div class="card-body">

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($senaraiUsers as $user)

        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>
            <a href="/users/{{ $user->id }}" class="btn btn-primary btn-sm">VIEW</a>
            <a href="/users/{{ $user->id }}/edit" class="btn btn-warning btn-sm">EDIT</a>
            <button type="button" class="btn btn-danger btn-sm">DELETE</button>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection
