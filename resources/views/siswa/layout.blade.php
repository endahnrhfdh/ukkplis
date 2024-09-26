<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Web Siswa</title>
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap.min.css')}}">

</head>
<body>

    <div class="container">
        <h1>Data Siswa</h1>
        @yield('content')
    </div>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"> </script>

</body>
</html>