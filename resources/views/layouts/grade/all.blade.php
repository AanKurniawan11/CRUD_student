@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Kelas</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1 @endphp
            @foreach($kelaz as $klas)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $klas->nama }}</td>
                <td>
                    <a href="/kelaz/edit/{{ $klas->id }}" class="btn btn-info">Edit</a>
                    <button class="btn btn-danger" onclick="confirmDelete({{ $klas->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/kelaz/add') }}" class="btn btn-info">Add Data</a>

</div>

<script>
    function confirmDelete(kelazId) {
        if (confirm('apakah anda yakin ?')) {
            window.location.href = '/kelaz/delete/' + kelazId;
        }
    }
</script>
@endsection
