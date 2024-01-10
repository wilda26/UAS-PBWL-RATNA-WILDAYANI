@extends('layouts.app')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{ url('/siswa/store') }}" method="POST">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Siswa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nis" class="form-label">Nis</label>
                            <input type="text" class="form-control" id="nis" name="nis"
                                value="{{ $generateNis }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin Siswa</label>
                            <select name="jk" id="jk" class="form-select">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Siswa</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="form-label">No Hp Siswa</label>
                            <input type="number" class="form-control" id="nohp" name="nohp">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <h1>Data Siswa</h1>
        <hr>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><strong>+</strong>
            Tambah</a>
        <table class="table my-3">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row['nis'] }}</td>
                        <td>{{ $row['nama'] }}</td>
                        <td>{{ $row['jk'] }}</td>
                        <td>{{ $row['alamat'] }}</td>
                        <td>{{ $row['no_hp'] }}</td>
                        <td>
                            <a href="#edit{{ $row['id'] }}" class="btn btn-warning" data-bs-toggle="modal">Edit</a>
                            <a href="{{ url('/siswa/delete/' . $row['id']) }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Hapus</a>
                        </td>
                    </tr>
                    @include('siswa.edit')
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
