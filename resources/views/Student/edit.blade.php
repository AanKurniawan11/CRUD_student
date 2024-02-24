@extends('layouts.partial.dashboard')

@section('content')
<div class="container mt-4">
    <h1>Edit Student</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ url('/student/update/' . $student->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" placeholder="Enter NIS" required  value="{{ old('nis', $student->nis) }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" required  value="{{ old('nama', $student->nama) }}">
        </div>
        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <select name="kelas_id" class="form-control">
                @foreach ($kelazs as $grade)
                    <option value="{{ $grade->id }}" {{ $grade->id == $student->kelas_id ? 'selected' : '' }}>{{ $grade->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required  value="{{ old('tgl_lahir', $student->tgl_lahir) }}">
        </div>
        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Enter Hobi" required  value="{{ old('hobi', $student->hobi) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
