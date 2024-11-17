@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('sewa.update', $sewa) }}">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label>Status Sewa</label>
                    <select class="form-select" type="text" name="status_sewa"
                        value="{{ old('status_sewa', $sewa->status_sewa) }}">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="Disewa">Disewa</option>
                        <option value="Di Kembalikan">Di Kembalikan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <button class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('sewa.index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection