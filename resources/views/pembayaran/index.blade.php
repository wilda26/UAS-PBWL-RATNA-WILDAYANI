@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data Pembayaran</h1>
        <hr>
        <div class="card">
            <div class="card-header">
                <h3>Transaski Pembayaran</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/pembayaran/store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" id="nama" class="form-label">Nama Siswa</label>
                        <select name="nama" id="nama" class="form-select">
                            <option value="">Pilih Nama Siswa</option>
                            @foreach ($siswa as $row)
                                <option value="{{ $row['id'] }}">{{ $row['nama'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="bulan" id="bulan" class="form-label">Bulan Dibayar</label>
                        <select name="bulan" id="bulan" class="form-select">
                            <option value="">Pilih Bulan</option>
                            @foreach ($spp as $row)
                                <option value="{{ $row['id'] }}">{{ $row['bulan'] }} /
                                    {{ 'Rp. ' . number_format($row['nominal']) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Bayar</button>
                    </div>
                </form>
            </div>
        </div>
        <h1 class="mt-5">Data Transaksi Pembayaran</h1>
        <hr>
        <table class="table my-3">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>Nama Siswa</th>
                    <th>Bulan Bayar</th>
                    <th>Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row['siswa']['nama'] }}</td>
                        <td>{{ $row['spp']['bulan'] }}</td>
                        <td>{{ 'Rp. ' . number_format($row['spp']['nominal']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
