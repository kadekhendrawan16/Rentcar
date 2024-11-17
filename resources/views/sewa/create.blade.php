@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-info">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('sewa.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Tanggal Sewa</label>
                    <input class="form-control" type="date" name="tanggal_sewa"
                        value="{{ old('tanggal_sewa', date('Y-m-d')) }}" />
                </div>

                <div class="mb-3">
                    <label>Tanggal Kembali</label>
                    <input class="form-control" type="date" name="tanggal_kembali"
                        value="{{ old('tanggal_kembali', date('Y-m-d')) }}" />
                </div>

                <div class="mb-3">
                    <label>Mobil</label>
                    <select class="form-select" name="id_mobil" onchange="hitung(); fillCarInfo();">
                        <option value="form-select" disabled selected>Pilih Mobil</option>
                        @foreach ($rentcars as $rentcar)
                            @if (old('id_mobil') == $rentcar->id_mobil)
                                <option value="{{ $rentcar->id_mobil }}" data-harga="{{ $rentcar->harga_sewa }}"
                                    data-plat="{{ $rentcar->plat_mobil }}" selected>
                                    {{ $rentcar->nama_mobil }}
                                </option>
                            @else
                                <option value="{{ $rentcar->id_mobil }}" data-harga="{{ $rentcar->harga_sewa }}"
                                    data-plat="{{ $rentcar->plat_mobil }}">
                                    {{ $rentcar->nama_mobil }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Plat Mobil</label>
                    <input class="form-control" type="text" name="plat_mobil" id="plat_mobil"
                        value="{{ old('plat_mobil') }}" readonly />
                </div>

                <div class="mb-3">
                    <label>Harga Sewa</label>
                    <input class="form-control" type="text" name="harga_sewa" value="{{ old('harga_sewa') }}"
                        readonly />
                </div>

                <div class="mb-3">
                    <label>Lama Sewa</label>
                    <input class="form-control" type="text" name="lama_sewa" value="{{ old('lama_sewa') }}"
                        onkeyup="hitung()" />
                </div>

                <div class="mb-3">
                    <label>Total Hari</label>
                    <input class="form-control" type="text" name="total" value="{{ old('total') }}" readonly />
                </div>

                <div class="mb-3">
                    <label>Nama User</label>
                    <input class="form-control" type="text" name="nama_user" value="{{ old('nama_user') }}" />
                </div>

                <div class="mb-3">
                    <label>Status Sewa</label>
                    <select class="form-select" name="status_sewa" id="" value="{{ old('status_sewa') }}">
                        <option value="Disewa">Disewa</option>
                        <option value="Selesai">Tidak Disewa</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Telp</label>
                    <input class="form-control" type="text" name="telp" id="userTelp" value="{{ old('telp') }}" />
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" id="userEmail" value="{{ old('email') }}" />
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('sewa.index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <!-- ... (elemen-elemen sebelumnya) ... -->

    <script>
        function hitung() {
            let harga_sewa = $('select[name="id_mobil"]').find(':selected').data('harga');
            let lama_sewa = $('input[name="lama_sewa"]').val();
            let total = parseInt(harga_sewa) * parseInt(lama_sewa);
            $('input[name="total"]').val(total);
            $('input[name="harga_sewa"]').val(harga_sewa);
        }

        function fillCarInfo() {
            let plat_mobil = $('select[name="id_mobil"]').find(':selected').data('plat');

            // Isi nilai plat mobil otomatis
            $('#plat_mobil').val(plat_mobil);
        }
    </script>

@endsection