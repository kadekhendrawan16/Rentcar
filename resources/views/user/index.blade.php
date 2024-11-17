@extends('layout.app')
@section('content')
    @if (session()->has('message'))
        <p class="alert alert-info">{{ session('message') }}</p>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" name="q" value="{{ $q }}" placeholder="Pencarian..." />
                </div>
                <div class="col">
                    <a class="btn btn-success" href="{{ route('user.create') }}" ><i class="fa-solid fa-plus"> </i> Tambah</a>
                </div>
                <div class="col">
                    <a class="btn btn-success" href="{{ route('user.exportExcel', ['q' => $q]) }}"><i class="fa-solid fa-file-excel"></i> Export Excel</a>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped m-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Email</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <?php $no = 1;
                ?>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->nama_user }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->telp }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                            <form method="POST" class="d-inline" action="{{ route('user.destroy', $user) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
