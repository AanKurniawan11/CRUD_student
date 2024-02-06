@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Edit Kelazzz</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/kelaz/submit/{{ $kelaz->id }}">
    @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Kelazzz</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Kelazzz" required value="{{ old('nama', $kelaz->nama) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
