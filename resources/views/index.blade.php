@extends('header')
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-2 bg-dark" style="height: 100vh;">
        <h5 class="text-white text-center py-3">PT. XYZ</h5>
        <hr>
        <ul class="list-unstyled text-center text-white">
          <li class="py-2">
            <i class="fas fa-home fa-2x"></i>
            <a href="/" class="text-white">Beranda</a>
          </li>
          <li class="py-2">
            <i class="fas fa-info-circle fa-2x"></i>
            <a href="/view" class="text-white">List Pegawai</a>
          </li>
          <li class="py-2">
            <i class="fas fa-list fa-2x"></i>
            <a href="/add" class="text-white">Tambah Pegawai</a>
          </li>
        </ul>
      </div>
      <div class="col-10">
        <h1 class="text-center py-3">Perusahaan XYZ</h1>
        <p class="text-justify py-5">
          Perusahaan XYZ didirikan pada tahun 2020 dengan tujuan untuk memberikan solusi inovatif bagi kebutuhan bisnis. Kami memiliki tim yang berpengalaman dan berdedikasi untuk menyediakan layanan terbaik bagi pelanggan kami.
        </p>
        <p class="text-justify py-5">
          Produk kami meliputi software aplikasi, sistem informasi, dan jasa konsultasi teknologi. Kami berfokus pada pengembangan teknologi yang intuitif dan mudah digunakan untuk membantu perusahaan meningkatkan efisiensi bisnis mereka.
        </p>
        <p class="text-justify py-5">
          Kami percaya bahwa teknologi adalah alat yang kuat untuk membantu perusahaan mencapai tujuannya dan kami berkomitmen untuk terus membangun produk dan layanan yang berkualitas untuk membantu perusahaan mencapai sukses.
        </p>
      </div>
    </div>
  </div>
</body>