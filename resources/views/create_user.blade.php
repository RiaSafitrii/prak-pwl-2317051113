@extends('layouts.app')

@section('content')
<div class="bg-wrapper d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="content-box w-75">
        <h1 class="mb-4 fw-bold text-purple text-center">Buat Pengguna Baru</h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="row mb-3 align-items-center">
                <label for="nama" class="col-sm-3 col-form-label text-end fw-semibold">Nama</label>
                <div class="col-sm-9">
                    <input type="text" id="nama" name="nama" 
                           class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label for="npm" class="col-sm-3 col-form-label text-end fw-semibold">NPM</label>
                <div class="col-sm-9">
                    <input type="text" id="npm" name="npm" 
                           class="form-control" placeholder="Masukkan NPM" required>
                </div>
            </div>

            <div class="row mb-4 align-items-center">
                <label for="kelas_id" class="col-sm-3 col-form-label text-end fw-semibold">Kelas</label>
                <div class="col-sm-9">
                    <select name="kelas_id" id="kelas_id" class="form-select" required>
                        <option value="" disabled selected>Pilih kelas</option>
                        @foreach($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-purple px-4">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

