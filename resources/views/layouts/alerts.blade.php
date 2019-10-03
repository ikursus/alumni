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
       <li>{{ session('sukses_mesej') }}</li>
    </ul>
</div>
@endif