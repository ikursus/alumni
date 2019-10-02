@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('sukses_mesej'))
<div class="alert alert-success">
    <ul>
       {{ session('sukses_mesej') }}
    </ul>
</div>
@endif