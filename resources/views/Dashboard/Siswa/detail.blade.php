@extends('layouts.partial.dashboard')

@section('content')

<style>
    .card-text{
        font-size: 20px;
        font-weight: 600;
    }
    #bac{
        font-weight: 600;
        background-color: #C4C4C4;
    }

</style>
<div class="container mt-4">
    <h1>Student Detail</h1>

    <div class="card">
        <div class="card-body">
            <p class="card-text">NIS : {{ $student->nis }}</p>
            <p class="card-text">Nama : {{ $student->nama }}</p>
            <p class="card-text">Kelas : {{ $student->kelas->nama }}</p>
            <p class="card-text">Tanggal Lahir : {{ $student->tgl_lahir }}</p>
            <p class="card-text">Hobi : {{ $student->hobi }}</p>
        </div>
    </div>
    <br>
    <a href="{{ url('dash/siswa/all') }}" class="btn" id="bac">Back</a>
</div>
@endsection
