<html>
    <head>
        <title>@yield('title')</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <h1>DATA LOGISTIK LEMBAR KERJA SISWA (LKS)</h1>

        Programmer : Muhamad ilham
        <br><br>
        <a href="{{ route('lks.index') }}">Input Stock</a> &nbsp;&nbsp;&nbsp; <a href="{{ route('distribution.index') }}">Distribusi</a> &nbsp;&nbsp;&nbsp; <a
            href="{{ url('stock') }}">Cek Stock</a>
        @yield('content')
    </body>
</html>
