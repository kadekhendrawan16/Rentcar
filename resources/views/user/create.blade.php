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
            <form method="POST" action="{{ route('user.store') }}">
                @csrf
                <div class="mb-3">
                    <label>Nama User</label>
                    <div class="input-group">
                        <input class="form-control" type="text" name="nama_user" value="{{ old('nama_user') }}">
                    </div>
                </div>
            
                <div class="mb-3">
                    <label>Username</label>
                    <div class="input-group">
                        <input class="form-control" type="text" name="username" value="{{ old('username') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label>Telp</label>
                    <div class="input-group">
                        <input class="form-control" type="text" name="telp" value="{{ old('telp') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <div class="input-group">
                        <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                    </div>
                </div>
               <div class="mb-3">
                    <label>Level</label>
                    <select class="form-select" name="level">
                        @foreach ($levels as $level)
                            @if (old('level') == $level)
                                <option value="{{ $level }}" selected> {{ $level }}
                                </option>
                            @else
                                <option value="{{ $level }}"> {{ $level }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('user.index') }}">Kembali</a>
            </form>
        </div>
    </div>
@endsection