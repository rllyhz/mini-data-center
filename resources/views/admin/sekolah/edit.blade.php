@extends('layouts.admin.app')

@section('title', 'Data Sekolah')

@section('page-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Halaman Pendidikan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active">Sekolah</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="row">
    <div class="col-sm">
        <form action="{{ route('admin.sekolah.update', $sekolah['id']) }}" method="POST">
            <div class="modal-body">
                @csrf
                @method('PUT')
                <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" required value="{{ $sekolah['kota'] }}">
                </div>
                <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun" required value="{{ $sekolah['tahun'] }}">
                </div>
                <div class="form-group">
                <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
                <select name="jenjang_pendidikan" class="custom-select" required>
                    <option {{ $sekolah['jenjang_pendidikan'] == "SD" ? 'selected' : '' }} value="SD">SD</option>
                    <option {{ $sekolah['jenjang_pendidikan'] == "SMP" ? 'selected' : '' }} value="SMP">SMP</option>
                    <option {{ $sekolah['jenjang_pendidikan'] == "SMA" ? 'selected' : '' }} value="SMA">SMA/SMK</option>
                </select>
                </div>
                <div class="form-group">
                <label for="jenis_sekolah">Jenis Sekolah</label>
                <select name="jenis_sekolah" class="custom-select" required>
                    <option {{ $sekolah['jenis_sekolah'] == "Negeri" ? 'selected' : '' }} value="Negeri">Negeri</option>
                    <option {{ $sekolah['jenis_sekolah'] == "Swasta" ? 'selected' : '' }} value="Swasta">Swasta</option>
                </select>
                </div>
                <div class="form-group">
                <label for="jumlah">Jumlah Sekolah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $sekolah['jumlah'] }}">
                </div>

                <a href="{{ route('admin.sekolah.index') }}" class="btn btn-outline-dark">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection