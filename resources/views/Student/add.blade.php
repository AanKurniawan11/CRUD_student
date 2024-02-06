@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Add Student Data</h1>

    <form action="{{ url('/student/store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" placeholder="Enter NIS" required value="{{ old('nis')}}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" required value="{{ old('nama')}}">
        </div>

        <div class="mb-3">
            <label for="kelas_id" class a="form-label">Kelas</label>
            <select name="kelas_id" class="form-control">
                @foreach ($kelazs as $grade)
                <option name="kelas_id" value="{{ $grade->id }}">{{$grade->nama}}</option>
                @endforeach
            </select>

        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lahir')}}">
        </div>
        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Enter Hobi" required value="{{ old('hobi')}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection