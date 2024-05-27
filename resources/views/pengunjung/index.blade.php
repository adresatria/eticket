@extends('layouts.master')

@section('content')

    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Data Table Pengunjung</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pengunjung</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Informasi Pengunjung</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Data Table Pengunjung</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">Nomor</th>
                                                <th class="border-bottom-0">Nama</th>
                                                <th class="border-bottom-0">Nomor HP</th>
                                                <th class="border-bottom-0">Tanggal Lahir</th>
                                                <th class="border-bottom-0">Jenis Kelamin</th>
                                                <th class="border-bottom-0">Email</th>
                                                <th class="border-bottom-0">Provinsi</th>
                                                <th class="border-bottom-0">Kabupaten</th>
                                                <th class="border-bottom-0">Kecamatan</th>
                                                <th class="border-bottom-0">Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($pengunjung as $p)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $p->nama_pengunjung }}</td>
                                                    <td>{{ $p->nomor_hp_pengunjung }}</td>
                                                    <td>{{ $p->tanggal_lahir_pengunjung }}</td>
                                                    <td>{{ $p->jenis_kelamin }}</td>
                                                    <td>{{ $p->email_pengunjung }}</td>
                                                    <td>{{ $p->provinsi }}</td>
                                                    <td>{{ $p->kabupaten }}</td>
                                                    <td>{{ $p->kecamatan }}</td>
                                                    <td>{{ $p->alamat }}</td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>

    @endsection