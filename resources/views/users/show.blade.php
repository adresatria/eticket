@extends('layouts.master')

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Detail User</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">User Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail User</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row row-deck">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">User Details</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('users.updateDetails', $user->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <input type="text" class="form-control" id="role" name="role" value="@switch($user->role)
                                        @case(1) Admin @break
                                        @case(2) Kepala Petugas @break
                                        @case(3) Bendahara @break
                                        @case(4) Petugas @break
                                        @case(5) Pengunjung @break
                                    @endswitch" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp_pengunjung">Nomor HP</label>
                                    <input type="text" class="form-control" id="nomor_hp_pengunjung" name="nomor_hp_pengunjung" value="{{ old('nomor_hp_pengunjung', optional($user->detailPengguna)->nomor_hp_pengunjung) }}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir_pengunjung">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir_pengunjung" name="tanggal_lahir_pengunjung" value="{{ old('tanggal_lahir_pengunjung', optional($user->detailPengguna)->tanggal_lahir_pengunjung) }}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin', optional($user->detailPengguna)->jenis_kelamin) }}">
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ old('provinsi', optional($user->detailPengguna)->provinsi) }}">
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ old('kabupaten', optional($user->detailPengguna)->kabupaten) }}">
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ old('kecamatan', optional($user->detailPengguna)->kecamatan) }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', optional($user->detailPengguna)->alamat) }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->

        </div>
    </div>
</div>
@endsection
