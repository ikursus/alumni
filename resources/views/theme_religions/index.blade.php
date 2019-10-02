@extends('layouts.app')

@section('kotak_biru')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">        

<p>
<a href="/religions/create" class="btn btn-primary">Tambah Religion</a>
</p>


<div class="card">
<div class="card-header">{{ __('Senarai Religions') }}</div>

<div class="card-body">
@include('layouts.alerts')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($senaraiReligions as $item)

        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
            <a href="/religions/{{ $item->id }}" class="btn btn-primary btn-sm">VIEW</a>
            <a href="/religions/{{ $item->id }}/edit" class="btn btn-warning btn-sm">EDIT</a>
            
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{ $item->id }}">
DELETE
</button>

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <form method="POST" action="/religions/{{ $item->id }}">
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
        <p>Adakah anda bersetuju untuk delete rekod {{ $item->name }}
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

</div>
</div>
</div>
</div>
</div>
@endsection
