@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Student</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">nis</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Hobi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1 @endphp
            @foreach($students as $stud)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $stud->nis }}</td>
                <td>{{ $stud->nama }}</td>
                <td>{{ optional($stud->kelas)->nama }}</td>
                <td>{{ $stud->tgl_lahir }}</td>
                <td>{{ $stud->hobi }}</td>
                <td>
                <a href="{{ url('/student/detail/' . $stud->id) }}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
