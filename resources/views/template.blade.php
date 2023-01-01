<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand bg-dark">
  <ul class="nav">
    <li>
        <a href="{{ url('/beranda') }}" class="nav-link">Home</a>
    </li> 
    <li>
        <a href="{{ url('/data-siswa') }}" class="nav-link">Data Siswa</a>
    </li>
    <li>
        <a href="{{ url('/info-kegiatan') }}" class="nav-link">Info Kegiatan</a>
    </li>
  </ul>
</nav>
</body>
@yield('content')

<footer class="fixed-bottom bg-primary">
    <div class="text-center">
        (C) 2022 Copyright : SMA 404
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</footer>