@extends('layouts.partial.dashboard')

@section('content')

<style>
    #pot{
        background-color: #B5C0D0;
        color: black;
    }
</style>
<div class="container mt-4">
    <h1>Add Kelas Data</h1>

    <form action="{{ url('/kelaz/store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" required value="{{ old('nama')}}">
        </div>
        <button type="submit" class="btn" id="pot">Submit</button>
    </form>

</div>
@endsection