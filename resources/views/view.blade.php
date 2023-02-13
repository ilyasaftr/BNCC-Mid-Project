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
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
                <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->phoneNumber }}</td>
                        <td>
                            <a href="/update-employee/{{ $employee->id }}"><button type="submit" class="btn btn-warning">Edit</button></a>
                        </td>
                        <td>
                            <form action="{{route('delete', ['id' => $employee->id])}}" method="post">
                                @csrf
                                @method('delete')
                                <button action="/delete-employee" type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
      </div>
    </div>
  </div>
</body>