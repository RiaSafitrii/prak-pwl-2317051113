@extends('layouts.app')

@section('content')

<div class="bg-wrapper">
    <div class="content-box">
        <h1 class="mb-3 fw-bold text-purple text-center">Daftar Pengguna</h1>

        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow-sm text-center m-0">
                <thead style="background-color: #6f42c1; color: white;">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->npm }}</td>
                            <td>{{ $user->nama_kelas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection