@extends('layouts.partial.dashboard')

@section('content')


<style>
    .txt{
        text-align: center;
        margin-right: 60px;
        font-weight: 700;
    }

    #top{
        background-color:   #B5C0D0;
        font-weight: 600;
    }

    #ad{
        font-weight: 800;
    }

</style>
<div class="container mt-4">
    <h1 class="txt">STUDENT</h1>

    <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="data_filter">Filter by kelas:</label>
                    <form method="GET" action="{{ url('/dash/filter') }}">
                        <div class="input-group">
                            <select class="form-select" name="kelas_id">
                                @foreach($filter as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>


                </div>
            </div>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
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
                <a href="{{ url('dash/siswa/detail/' . $stud->id) }}" class="btn btn-primary"> <i class="bi bi-eye"></i> Detail</a>
                    <a href="/student/edit/{{ $stud->id }}" class="btn btn-info"> <i class="bi bi-pen"></i> Edit </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $stud->id }}">
                    <i class="bi bi-trash"></i>   Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $students->links() }}

    <div class="row mt-4">
    <div class="col">
        <a href="{{url('/dash/siswa/all')}}" class="btn btn-success d-inline-block">Show all data</a>
        <a href="{{ url('student/add') }}" class="btn btn-primary d-inline-block "> <i class="bi bi-plus-circle"></i> Add Data</a>
    </div>
</div>


</div>

<div class="modal fade" id="delete{{ $stud->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin ingin menghapus {{ $stud->nama }}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{ url('/dash/delete/' . $stud->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection
