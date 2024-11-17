@extends('layout.app')

@section('content')
    @if (session()->has('message'))
        <p class="alert alert-info">{{ session('message') }}</p>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" name="q" value="{{ $q }}" type="search"
                            placeholder="Pencarian..." aria-label="Search">
                        <button class="btn me-2 btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="col">
                        <a class="btn btn-primary" href="{{ route('sewa.create') }}">Tambah</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="tcontainer mt-0 table-container">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mobil</th>
                    <th>Plat Mobil</th>
                    <th>Harga Sewa</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Kembali</th>
                    <th>Nama User</th>
                    <th>Status Sewa</th>
                    <th>Telp</th>
                    <th>Email</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php //$no = 1;
                ?>
                @foreach ($sewas as $sewa)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $sewa->nama_mobil }}</td>
                        <td>{{ $sewa->plat_mobil }}</td>
                        <td>{{ 'Rp'. number_format($sewa->harga_sewa) }}</td>
                        <td>{{ $sewa->tanggal_sewa }}</td>
                        <td>{{ $sewa->tanggal_kembali }}</td>
                        <td>{{ $sewa->nama_user }}</td>
                        <td>{{ $sewa->status_sewa }}</td>
                        <td>{{ $sewa->telp }}</td>
                        <td>{{ $sewa->email }}</td>
                        <td>{{ 'Rp'. number_format($sewa->total) }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('sewa.edit', $sewa) }}">Ubah</a>
                            <form method="POST" class="d-inline" action="{{ route('sewa.destroy', $sewa) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($sewas->hasPages())
            <div class="card-footer">
                {{ $sewas->links() }}
            </div>
        @endif
    </div>
@endsection