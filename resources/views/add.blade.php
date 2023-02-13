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
        <div class="form border ">
                <h1 class="text-center">Tambah Karyawan</h1>
                <form action="/create-employee" method="POST" enctype="multipart/form-data">@csrf
                    <div class="mb-3">
                        <label for="Nama">Nama Lengkap</label>
                        <input name="Nama" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Nama Lengkap Anda">
                            @error('Nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Umur">Umur</label>
                        <input name="Umur" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Umur Anda">
                        @error('Umur')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Alamat">Alamat</label>
                        <input name="Alamat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Alaman Lengkap Anda">
                        @error('Alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="NomorTelp">Nomor Telepon</label>
                        <input name="NomorTelp" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Nomor Telepon Anda">
                        @error('NomorTelp')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    <button type="reset" class="btn btn-danger">Reset Form</button>
                </form>
            </div>
      </div>
    </div>
  </div>
</body>