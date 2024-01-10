@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data Spp</h1>
        <hr>
        <table class="table my-3">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>Bulan</th>
                    <th>Nominal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row['bulan'] }}</td>
                        <td>{{ 'Rp. ' . number_format($row['nominal']) }}</td>
                        <td>
                            <a href="#edit{{ $row['id'] }}" class="btn btn-warning" data-bs-toggle="modal">Edit</a>
                        </td>
                    </tr>
                    @include('spp.edit')
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
