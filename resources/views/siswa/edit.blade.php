@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-mb-6">
        @if($errors->any())
        @foreach($errors->all as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
    </div>
</div>
<form method="POST" action="{{ route('siswa.update',$siswa->id) }}">
    @csrf
 
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Form Edit Siswa</h6>
                </div>
                <div class="card-body">        
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control" nama="nama" required value="{{old('nama',$siswa->nama)}}">
                    </div>    
                    <div class="card-body">
                        <label>Kelas</label>
                        <input type="text" class="form-control" nama="kelas" required value="{{old('kelas',$siswa->kelas)}}">
                    </div>
                    <div class="card-body">
                        <label>Alamat</label>
                        <input type="text" class="form-control" nama="alamat" required value="{{old('alamat',$siswa->alamat)}}">
                    </div>
                    <div class="card-body">
                        <label>Ekstrakulikuler</label>
                        <input type="text" class="form-control" nama="ekstrakulikuler" required value="{{old('ekstrakulikuler',$siswa->ekstrakulikuler)}}">
                    </div>
 
                    </form>
                </div>
                <div class="card-footer">
                <a href="{{ route('siswa') }}">Edit Siswa</a>
                </div>
            </div>
        </div>
    </div>
    
</form>
@endsection