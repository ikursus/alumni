@extends('layouts.app')

@section('kotak_biru')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">        

<p>
<a href="{{ route('titles.create') }}" class="btn btn-primary">Tambah Title</a>
</p>


<div class="card">
<div class="card-header">{{ __('Senarai Title') }}</div>

<div class="card-body">
@include('layouts.alerts')
<table class="table" id="datatables-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ACTION</th>
        </tr>
    </thead>
</table>

</div>
</div>
</div>
</div>
</div>
@endsection

@section('javascript')
<script>
$(function() {
    $('#datatables-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('titles.datatables') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'actions', name: 'actions', orderable: false, searchable: false },
        ]
    });
});
</script>
@endsection
