@extends('layouts.master')

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Ticket</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Ticket Pengunjung</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ticket</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="row row-deck">
                    <div class="col-xl-4 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <div class="card-title">Tiket Pantai Teluk Penyu</div>
                            </div>
                            <div class="card-body">
                                <p>Nikmati keindahan alam yang menakjubkan di Pantai Teluk Penyu, Cilacap. Dapatkan tiket
                                    Anda
                                    dan kunjungi kami setiap hari mulai dari jam 07.00 hingga 16.00
                                    untuk pengalaman pantai yang tak terlupakan!.</p>
                                <a href="#" class="btn btn-primary">Pesan</a>
                            </div>
                        </div>
                    </div><!-- COL END -->
                    <div class="col-xl-4 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <div class="card-title">Tiket Benteng Pendem</div>
                            </div>
                            <div class="card-body">
                                <p>With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Pesan</a>
                            </div>
                        </div>
                    </div><!-- COL END -->

                </div>
                <!-- ROW-9 CLOSED -->

            </div>
        </div>
    </div>
@endsection
