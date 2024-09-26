<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
</head>
<body>
    <h1>Biodata Siswa {{$nama}}</h1>
    <br>
    <p> Nama : {{$nama}}</p>
    <p> Ekstrakulikuler Yang Di Ikuti</p>
    <ul>
        @foreach ($ekstrakulikuler as $ekstrakulikuler)
        <li>{{$ekstrakulikuler}}</li>
        @endforeach
    </ul>
</br>
</body>
</html>