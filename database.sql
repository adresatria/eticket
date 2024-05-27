create database eticket;

create table petugas (
    id_petugas VARCHAR (40) PRIMARY KEY,
    nomor_petugas VARCHAR (4) NOT NULL,
    nama_petugas VARCHAR (80)  NOT NULL,
    nomor_hp_petugas INTEGER (14)  NOT NULL,
    alamat_petugas VARCHAR (150)  NOT NULL,
    jabatan VARCHAR (1)  NOT NULL,
    status VARCHAR (1)  NOT NULL,
    password VARCHAR (150) NOT NULL

)

create table pengunjung (
    id_pengunjung VARCHAR (40) PRIMARY KEY,
    nomor_pengunjung VARCHAR (20) NOT NULL,
    nama_pengunjung VARCHAR (80) NOT NULL,
    nomor_hp_pengunjung INTEGER (14) NOT NULL,
    alamat_pengunjung VARCHAR (80) NOT NULL,
    email VARCHAR (40) NOT NULL,
    password VARCHAR (150) NOT NULL
)

create table tiket (
    id_tiket VARCHAR (40) PRIMARY KEY,
    id_pengunjung VARCHAR (40) NOT NULL,
    nomor_tiket VARCHAR (8) NOT NULL,
    jenis_tiket VARCHAR (1) NOT NULL,
    jumlah_pengunjung INTEGER (15) NOT NULL,
    tanggal_tiket VARCHAR (25) NOT NULL,
    total_bayar INTEGER (30) NOT NULL,
    status_pembayaran VARCHAR (1) NOT NULL,
    FOREIGN KEY (id_pengunjung) REFERENCES pengunjung (id_pengunjung)
)

create table transaksi (
    id_transaksi VARCHAR (40) PRIMARY KEY,
    id_tiket VARCHAR (40) NOT NULL,
    nomor_transaksi VARCHAR (20) NOT NULL,
    bukti_transaksi VARCHAR (40) NOT NULL,
    status_verifikasi VARCHAR (1) NOT NULL,
    FOREIGN KEY (id_tiket) REFERENCES tiket (id_tiket)
)

create table laporan (
    id_laporan VARCHAR (40) PRIMARY KEY
    jenis_laporan VARCHAR (1),
    tahun_laporan VARCHAR(4),
    bulan_laporan VARCHAR (2),
    tanggal_laporan VARCHAR (25),
    total_jumlah_pengunjung VARCHAR (80),
    total_pendapatan VARCHAR (80)
)



-- //Struktur 

-- Petugas (0 Admin, 1 Penjaga Loket Pantai (Gate 1,2,3,4), 2 Penjaga Loket Benteng Pendem, 3 Kepala Petugas)
-- Pengunjung
-- Tiket
-- Transaksi
-- Laporan

-- 1. Petugas
-- ID Petugas
-- Nama Petugas
-- Nomor HP
-- Alamat
-- Jabatan

-- 2. Pengunjung
-- ID Pengunjung
-- Nama Pengunjung
-- Alamat
-- Nomor HP
-- Email

-- 3. Tiket (Ada tambahan semi barcode)
-- ID Ticket
-- Nomor Order
-- Jenis Tiket
-- Tanggal
-- Jumlah Pengunjung
-- Total Bayar
-- Jenis Pembayaran
-- Status Pembayaran

-- 4. Transaksi
-- ID Transaksi
-- ID Ticket
-- Bukti Transaksi
-- Status Verifikasi

-- 5. Laporan
-- ID Laporan
-- Jenis Laporan (Pintu Pantai & Pintu Benteng)
-- Tanggal Laporan
-- Jumlah Pengunjung
-- Jumlah Pendapatan
