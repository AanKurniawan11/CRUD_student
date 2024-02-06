@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Student Detail</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">NIS: {{ $student->nis }}</h5>
            <p class="card-text">Nama: {{ $student->nama }}</p>
            <p class="card-text">Kelas: {{ $student->kelas->nama }}</p>
            <p class="card-text">Tanggal Lahir: {{ $student->tgl_lahir }}</p>
            <p class="card-text">Hobi: {{ $student->hobi }}</p>
        </div>
    </div>

    <a href="{{ url('/student/all') }}" class="btn btn-primary mt-3">Back to Student List</a>
</div>
@endsection
