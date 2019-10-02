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
@include('layouts.alerts')
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
            
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{ $user->id }}">
DELETE
</button>

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <form method="POST" action="/users/{{ $user->id }}">
    @csrf
    @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Adakah anda bersetuju untuk delete rekod {{ $user->name }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Confirm</button>
      </div>
    </div>
    </form>


  </div>
</div>

            </td>
        </tr>

    @endforeach
    </tbody>
</table>
{!! $senaraiUsers->links() !!}
</div>
</div>
</div>
</div>
</div>
@endsection
