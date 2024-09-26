@extends('layouts.app')
@section('content')
@if(session('success'))
<p class="alert alert-success">success</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="row row-cols-auto g-1">
          <div class="col">
            <input class="form-control" type="text" name="a" value="" placeholder="Cari Data...">
          </div>
          <div class="col">
            <button type="submit" class="btn btn-success">Cari</button>
          </div>
            <div class="col">
                <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </form>
    </div>
    <div class="card body p-0 table-responsive">
    <table class="table table-bordered table-striped table-hover mb-0">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Alamat</th>
      <th>Ekstrakulikuler</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <?php $no= 1 ?>
  @foreach ($siswa as $siswa)
  <tr>
    <td>{{$no++}}</td>
    <td>{{$siswa->nama}}</td>
    <td>{{$siswa->kelas}}</td>
    <td>{{$siswa->alamat}}</td>
    <td>{{$siswa->ekstrakulikuler}}</td>

    <td>
    <a class="btn btn-sm btn-warning" href="{{route('siswa.edit', $siswa->id)}}">Edit</a>
      <form method="post" action="{{route('siswa.destroy', $siswa->id)}}" style="display: inline-block">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
    </div>
</div>
@endsection