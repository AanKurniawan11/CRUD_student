@extends('layouts.partial.dashboard')

@section('content')

<style>
    #top{
        background-color:   #B5C0D0;
        font-weight: 600;
    }

    #ad{
        font-weight: 800;
    }

    .klas{
        text-align: center;
        margin-right: 90px;
        font-weight: 700;
    }
</style>
<div class="container mt-4">
    <h1 class="klas">Kelas</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
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
                    <a href="/kelaz/edit/{{ $klas->id }}" class="btn btn-info"><i class="bi bi-pen"></i>  Edit</a>
                    <button class="btn btn-danger" onclick="confirmDelete({{ $klas->id }})"> <i class="bi bi-trash"></i> Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/kelaz/add') }}" class="btn" id="top"> <i class="bi bi-plus-circle" id="ad"></i> Add</a>

</div>

<script>
    function confirmDelete(kelazId) {
        if (confirm('apakah anda yakin ?')) {
            window.location.href = '/kelaz/delete/' + kelazId;
        }
    }
</script>
@endsection
