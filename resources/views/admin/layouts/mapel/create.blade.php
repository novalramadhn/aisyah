@extends('admin.master')

@section('title', 'Admin | Tambah Mapel')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-6 col-md-6">
                <div class="card border-0 shadow rounded">
                    <div class="card-header bg-white">
                        <h4 class="card-title"><strong>Tambah Mapel</strong></h4>
                        <div class="card-tools">
                            <a href="{{ route('mapels.index') }}" class="btn btn-sm btn-danger warna">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mapels.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Mapel</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="kode_mapel" value="{{ old('kode_mapel') }}" placeholder="Masukkan Kode Mapel">

                                @error('kode_mapel')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Mapel</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="nama_mapel" value="{{ old('nama_mapel') }}" placeholder="Masukkan Nama Mapel">

                                @error('nama_mapel')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="guru_id">Pengajar</label>
                                <select name="guru_id" id="guru_id" class="form-control @error('guru_id') is-invalid @enderror select2bs4">
                                    <option value="">-- Pilih Pengajar --</option>
                                    @foreach ($guru as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_guru }}</option>
                                    @endforeach
                                </select>

                                {{-- <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-expanded="false">
                                        Pilih Pengajar
                                    </button>
                                    <div class="dropdown-menu">
                                        @foreach ($pengajar as $item)
                                            <a href="#" class="dropdown-item">{{ $item->nama_guru }}</a>
                                        @endforeach
                                    </div>
                                </div> --}}

                            </div>
                            <button type="submit" class="btn btn-md btn-primary warna">Simpan</button>
                            <button type="reset" class="btn btn-md btn-warning warna">Reset</button>
                            <style>
                                .warna {
                                    color: #ffffff;
                                }
                            </style>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
