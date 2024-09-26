@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-mb-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
    </div>
</div>
<form method="POST" action="{{ route('siswa.store') }}" >
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Form Tambah Siswa</h6>
                </div>
                <div class="card-body">        
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" name="nama" required value="{{ old('nama') }}">
                </div>    
                <div class="card-body">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" required value="{{ old('kelas') }}">
                </div>
                <div class="card-body">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" required value="{{ old('alamat') }}">
                </div>
                <div class="card-body">
                    <label>Ekstrakurikuler</label>
                    <input type="text" class="form-control" name="ekstrakulikuler" required value="{{ old('ekstrakulikuler') }}">
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
