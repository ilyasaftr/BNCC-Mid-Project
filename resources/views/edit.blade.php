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
        <div class="form">
                <h1 class="text-center">Edit Karyawan</h1>
                <form action="{{route('updateEmployee', ['id' => $employee->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input name="Nama" type="text" value="{{$employee->name}}" class="form-control" id="formGroupExampleInput" placeholder="Input Nama Lengkap Anda">
                        @error('Nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Umur" class="form-label">Umur</label>
                        <input name="Umur" type="numeric" value="{{$employee->age}}" class="form-control" id="formGroupExampleInput" placeholder="Input Umur Anda">
                        @error('Umur')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Alamat" class="form-label">Alamat</label>
                        <input name="Alamat" type="text" value="{{$employee->address}}" class="form-control" id="formGroupExampleInput" placeholder="Input Alamat Anda">
                        @error('Alamat')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="NomorTelp" class="form-label">Nomor Telepon</label>
                        <input name="NomorTelp" type="text" value="{{$employee->phoneNumber}}" class="form-control" id="formGroupExampleInput" placeholder="Input Nomor Telepon Anda">
                        @error('NomorTelp')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="card-body text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-danger">Reset Form</button>
                    </div>
                </form>
            </div>
      </div>
    </div>
  </div>
</body>