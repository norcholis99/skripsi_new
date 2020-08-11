-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2020 pada 16.25
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megahmedika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `no_faktur` varchar(20) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `tgl_jatuhtempo` date NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga` varchar(17) NOT NULL,
  `total_1` varchar(17) NOT NULL,
  `ppn` varchar(17) NOT NULL,
  `ongkir` varchar(17) NOT NULL,
  `total_bayar` varchar(17) NOT NULL,
  `metode_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`no_faktur`, `tgl_faktur`, `tgl_jatuhtempo`, `nama_pelanggan`, `alamat`, `kode_barang`, `nama_barang`, `quantity`, `satuan`, `harga`, `total_1`, `ppn`, `ongkir`, `total_bayar`, `metode_bayar`) VALUES
('01', '2020-06-02', '2020-07-02', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 1000, 'Pcs', '1000', '1000000', '100000', '150000', '1250000', ''),
('02', '2020-06-02', '2020-07-02', 'Dinkes Kota Bjm', 'jl pramuka', 'mejl', 'masker jilbab', 1000, 'Box', '134000', '134000000', '13400000', '20100000', '167500000', ''),
('03', '2020-06-03', '2020-07-03', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 500, 'Pcs', '1000', '500000', '50000', '75000', '625000', ''),
('04', '2020-06-04', '2020-07-04', 'RS Sari Mulia', 'jl jati', 'ub', 'urine bag', 50, 'Pcs', '45000', '2250000', '225000', '337500', '2812500', ''),
('05', '2020-06-05', '2020-07-05', 'RS Ulin Bjm', 'jl a yani km 02', 'sct', 'suction catheter', 29, 'Pcs', '50000', '1450000', '145000', '217500', '1812500', ''),
('06', '2020-06-05', '2020-07-05', 'RS Sari Mulia', 'jl jati', 'ub', 'urine bag 2000 ml', 33, 'Pcs', '50000', '1650000', '165000', '247500', '2062500', ''),
('07', '2020-06-06', '2020-07-06', 'RS Bhayangkara', 'jl a yani km 03', 'sct', 'suction catheter', 29, 'Pcs', '12000', '348000', '34800', '52200', '435000', ''),
('08', '2020-06-07', '2020-07-07', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 100, 'Pcs', '1000', '100000', '10000', '15000', '125000', ''),
('09', '2020-06-07', '2020-07-07', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 33, 'Pcs', '1000', '33000', '3300', '4950', '41250', ''),
('10', '2020-06-08', '2020-07-08', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 29, 'Pcs', '500', '14500', '1450', '2175', '18125', ''),
('11', '2020-06-08', '2020-07-08', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 29, 'Pcs', '1000', '29000', '2900', '4350', '36250', ''),
('12', '2020-07-16', '2020-08-16', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 29, 'Pcs', '1000', '29000', '2900', '4350', '36250', ''),
('13', '2020-07-20', '2020-08-20', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 1000, 'Pcs', '500', '500000', '50000', '75000', '625000', ''),
('14', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 12, 'Pcs', '1000', '12000', '1200', '1800', '15000', 'Cash'),
('15', '2020-07-30', '2020-07-30', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 15, 'Pcs', '500', '7500', '750', '1125', '9375', 'Cash'),
('16', '2020-07-30', '2020-07-30', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 33, 'Pcs', '1000', '33000', '3300', '4950', '41250', 'Cash'),
('17', '2020-07-30', '2020-08-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 9, 'Pcs', '1000', '9000', '900', '1350', '11250', 'Credit'),
('18', '2020-07-30', '2020-08-30', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 21, 'Pcs', '1000', '21000', '2100', '3150', '26250', 'Credit'),
('19', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 30, 'Pcs', '1000', '30000', '3000', '4500', '37500', 'Cash'),
('20', '2020-07-30', '2020-08-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 13, 'Pcs', '1000', '13000', '1300', '1950', '16250', 'Credit'),
('21', '2020-07-30', '2020-07-30', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 29, 'Pcs', '1000', '29000', '2900', '4350', '36250', 'Credit'),
('22', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 30, 'Pcs', '1000', '30000', '3000', '4500', '37500', ''),
('23', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 29, 'Pcs', '300', '8700', '870', '1305', '10875', 'Cash'),
('24', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 22, 'Pcs', '1000', '22000', '2200', '3300', '27500', 'Cash'),
('25', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 29, 'Pcs', '1000', '29000', '2900', '4350', '36250', 'Cash'),
('26', '2020-07-30', '2020-07-30', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 92, 'Pcs', '1000', '92000', '9200', '13800', '115000', ''),
('27', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', ''),
('28', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', ''),
('29', '2020-07-30', '2020-07-30', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', ''),
('30', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1250', '25000', '2500', '3750', '31250', ''),
('31', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1380', '27600', '2760', '4140', '34500', 'Credit'),
('32', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1950', '39000', '3900', '5850', '48750', 'Credit'),
('33', '2020-07-31', '2020-07-31', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'Cash'),
('34', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'Credit'),
('35', '2020-07-31', '2020-07-31', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 40, 'Pcs', '980', '39200', '3920', '5880', '49000', 'Cash'),
('36', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'Cash'),
('37', '2020-07-31', '2020-07-31', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '500', '10000', '1000', '1500', '12500', 'cash'),
('38', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1900', '38000', '3800', '5700', '47500', 'cash'),
('39', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '2000', '40000', '4000', '6000', '50000', 'cash'),
('40', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit'),
('41', '2020-07-31', '2020-07-31', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit'),
('42', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit'),
('43', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'cash'),
('44', '2020-08-01', '2020-08-01', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', '1'),
('45', '2020-08-01', '2020-08-01', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', '1'),
('46', '2020-08-01', '2020-08-01', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', '2'),
('47', '2020-08-01', '2020-08-01', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', '2'),
('48', '2020-08-01', '2020-08-01', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', '2'),
('49', '2020-08-01', '2020-08-01', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', '2'),
('50', '2020-08-01', '2020-08-01', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', '2'),
('51', '2020-08-01', '2020-08-01', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit'),
('52', '2020-08-02', '2020-08-02', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit'),
('53', '2020-08-02', '2020-08-02', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit'),
('54', '2020-08-02', '2020-08-02', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit'),
('55', '2020-08-02', '2020-08-02', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '2000', '40000', '4000', '6000', '50000', 'credit'),
('56', '2020-08-02', '2020-08-02', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit'),
('57', '2020-08-02', '2020-08-02', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '500', '10000', '1000', '1500', '12500', 'credit'),
('58', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'cash'),
('59', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit'),
('60', '2020-08-03', '2020-08-03', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'cash'),
('61', '2020-08-03', '2020-08-03', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '500', '10000', '1000', '1500', '12500', 'credit'),
('62', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1950', '39000', '3900', '5850', '48750', 'credit'),
('63', '2020-08-03', '2020-08-03', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1300', '26000', '2600', '3900', '32500', 'credit'),
('64', '2020-08-03', '2020-08-03', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1590', '31800', '3180', '4770', '39750', 'cash'),
('65', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1800', '36000', '3600', '5400', '45000', 'cash'),
('66', '2020-08-03', '2020-08-03', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1400', '28000', '2800', '4200', '35000', 'cash'),
('67', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1300', '26000', '2600', '3900', '32500', 'cash'),
('68', '2020-08-03', '2020-08-03', 'RS Ulin Bjm', 'jl a yani km 02', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1400', '28000', '2800', '4200', '35000', 'credit'),
('69', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'cash'),
('70', '2020-08-03', '2020-08-03', 'RS Bhayangkara', 'jl a yani km 03', 'sp01', 'spuit 1 cc', 20, 'Pcs', '1000', '20000', '2000', '3000', '25000', 'credit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `no_register` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`no_register`, `tanggal`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `keterangan`) VALUES
('mo3', '2020-07-07', 'sp01', 'spuit 1cc', 300, 'Pcs', 'dari surabaya'),
('mo4', '2020-07-31', 'sp01', 'spuit 1cc', 1000, 'Pcs', 'dari lampung'),
('mo5', '2020-07-31', 'sp01', 'spuit 1cc', 80, 'Pcs', 'dari jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cod`
--

CREATE TABLE `cod` (
  `no_faktur` varchar(8) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `tgl_jatuhtempo` date NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jumlah_tagihan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cod`
--

INSERT INTO `cod` (`no_faktur`, `tgl_faktur`, `tgl_jatuhtempo`, `nama_pelanggan`, `alamat`, `jumlah_tagihan`) VALUES
('08', '2020-06-07', '2020-07-07', 'RS Bhayangkara', 'jl a yani km 03', '125000'),
('09', '2020-06-07', '2020-07-07', 'RS Ulin Bjm', 'jl a yani km 02', '41250'),
('29', '2020-07-30', '2020-07-30', 'RS Ulin Bjm', 'jl a yani km 02', '25000'),
('30', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl jati', '31250'),
('31', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', '34500'),
('32', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl jati', '48750'),
('33', '2020-07-31', '2020-07-31', 'RS Ulin Bjm', 'jl a yani km 02', '25000'),
('45', '2020-08-01', '2020-08-01', 'RS Ulin Bjm', 'jl a yani km 02', '25000'),
('46', '2020-08-01', '2020-08-01', 'RS Bhayangkara', 'jl a yani km 03', '25000'),
('47', '2020-08-01', '2020-08-01', 'RS Sari Mulia', 'jl jati', '25000'),
('48', '2020-08-01', '2020-08-01', 'RS Sari Mulia', 'jl jati', '25000'),
('49', '2020-08-01', '2020-08-01', 'RS Ulin Bjm', 'jl a yani km 02', '25000'),
('50', '2020-08-01', '2020-08-01', 'RS Bhayangkara', 'jl a yani km 03', '25000'),
('51', '2020-08-01', '2020-08-01', 'RS Sari Mulia', 'jl jati', '25000'),
('52', '2020-08-02', '2020-08-02', 'RS Sari Mulia', 'jl jati', '25000'),
('53', '2020-08-02', '2020-08-02', 'RS Ulin Bjm', 'jl a yani km 02', '25000'),
('54', '2020-08-02', '2020-08-02', 'RS Sari Mulia', 'jl jati', '25000'),
('57', '2020-08-02', '2020-08-02', 'RS Ulin Bjm', 'jl a yani km 02', '12500'),
('67', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', '32500'),
('69', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', '25000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `garansi`
--

CREATE TABLE `garansi` (
  `tanggal` date NOT NULL,
  `beritaacara` varchar(20) NOT NULL,
  `kodebarang` varchar(20) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `pelanggan` varchar(20) NOT NULL,
  `masapembelian` varchar(30) NOT NULL,
  `ketrusak` varchar(40) NOT NULL,
  `jenisperbaikan` varchar(40) NOT NULL,
  `eswaktu` varchar(20) NOT NULL,
  `esbiaya` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `garansi`
--

INSERT INTO `garansi` (`tanggal`, `beritaacara`, `kodebarang`, `namabarang`, `pelanggan`, `masapembelian`, `ketrusak`, `jenisperbaikan`, `eswaktu`, `esbiaya`) VALUES
('2020-07-01', '001', 'ip1000', 'infusion pump', 'rs sari mulia', 'Dibawah 6 bulan', 'mesin mati total', 'ganti baru', '0', '0'),
('2020-07-02', '002', 'sy1000', 'syringe pump', 'rs ulin bjm', 'Diatas 6 bulan sampai bulan 12', 'tekanan cairan tidak berfungsi', 'service biasa', '1 hari pengerjaan', 'gratis'),
('2020-07-03', '003', 'pm1000', 'patient monitor', 'rs bedah siaga', 'Diatas 12 bulan', 'layar ada tompel', 'service berat', '4 hari pengerjaan', 'Rp 1.000.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lhs`
--

CREATE TABLE `lhs` (
  `tanggal` date NOT NULL,
  `rumahsakit` varchar(30) NOT NULL,
  `ruangan` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `hasil` varchar(60) NOT NULL,
  `respon` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lhs`
--

INSERT INTO `lhs` (`tanggal`, `rumahsakit`, `ruangan`, `user`, `hasil`, `respon`) VALUES
('2020-08-17', 'RS Sari Mulia', 'Kasir', 'Ibu Dita', 'Ngambil tagihan sebesar 3 juta', 'Sip'),
('2020-08-13', 'RS Ansari Saleh', 'Gudang', 'Ibu Hera', 'Tanda tangan berkas', 'Jangan lupa tanyakan kepastian bayar'),
('2020-08-11', 'RS Ulin Bjm', 'Akuntansi', 'Ibu Ida', 'Menayakan Kapan Faktur no 002 Dibayar', 'Ambil juga ssp'),
('2020-08-12', 'RS Sari Mulia', 'Farmasi', 'Ibu Redha', 'Menawarkan Polywin Safety ukuran 20 G', 'Pastikan agar bisa ter order bulan ini untuk barang itu'),
('2020-08-15', 'RS Bhayangkara', 'Keuangan', 'Ibu Rena', 'Ngambil ssp', 'Sekalian tanyakan apakah ada perubahan npwp'),
('2020-08-14', 'RS Bedah Siaga', 'Farmasi', 'Pa Abe', 'Ngantar Exam 20 box', 'Pastikan di ttd tgn dan stempel oleh rumah sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `level` varchar(4) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `email`, `level`, `password`) VALUES
('Hubul Wattan', 'admin@gmail.com', '1', 'hubulwattan'),
('Adi Widodo', 'bm@gmail.com', '3', 'adiwidodo'),
('Nurkholis', 'marketing@gmail.com', '2', 'nurkholis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `movement_on`
--

CREATE TABLE `movement_on` (
  `no` varchar(8) NOT NULL,
  `no_mo` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `movement_on`
--

INSERT INTO `movement_on` (`no`, `no_mo`, `tanggal`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `keterangan`) VALUES
('1', '010620', '2020-06-05', 'sp01', 'spuit 1cc', 1000, 'Pcs', 'baper stok rs ulin'),
('2', '020620', '2020-06-08', 'mejl', 'masker jilbab', 1000, 'Box', 'baper stok dinkes kota bjm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no` varchar(8) NOT NULL,
  `npwp` int(20) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telpon` varchar(16) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`no`, `npwp`, `nama_pelanggan`, `alamat`, `no_telpon`, `kategori`) VALUES
('01', 123456789, 'RSUD Ulin', 'Jl A Yani No. 43, Sungai Baru', '0511 123 456', 'Type A'),
('02', 123456790, 'RS Sari Mulia', 'Jl Pangeran Antasari No. 139', '0511 123 9090', 'Type B'),
('03', 123456791, 'RSUD Ansari Saleh', 'Jl Hasan Basri No. 01 Alalak Utara', '0511 8989 345', 'Type B'),
('04', 123456792, 'RSUD Sultan Suriansyah', 'Jl Rantauan Darat, Kelayan Selatan', '0511 9090 333', 'Type C'),
('05', 123456793, 'RS Khusus Bedah Siaga', 'Jl A Yani Km 4,5 No. 73', '0511 234 9027', 'Type C'),
('06', 123456794, 'RS Bhayangkara TK III', 'Jl A Yani Km 03, Kebun Bunga', '0511 8282 018', 'Type B'),
('07', 123456795, 'RS TPT Soeharsono', 'Jl Sutoyo S No. 408, Pelambuan', '0511 8462 002', 'Type C'),
('08', 123456796, 'RS Ciputra', 'Jl A Yani Km 7,8 Manarap Lama', '0511 9305 280', 'Type B'),
('09', 123456797, 'RS Suaka Insan', 'Jl Zafri Zam-zam No. 60 Belitung', '0511 2023 090', 'Type B'),
('10', 123456798, 'Dinkes Kota Banjarmasin', 'Jl Tirta Dharma, Sungai Lulut', '0511 000 1212', 'Type A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_lokal`
--

CREATE TABLE `pembelian_lokal` (
  `no` varchar(8) NOT NULL,
  `no_pl` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `penyedia` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian_lokal`
--

INSERT INTO `pembelian_lokal` (`no`, `no_pl`, `tanggal`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `penyedia`) VALUES
('1', '010620', '2020-06-07', 'alc7', 'alkohol 70', 100, 'Botol', 'arta mulia majujaya'),
('2', '020620', '2020-06-08', 'alc7', 'alkohol 70', 100, 'Botol', 'enseval');

-- --------------------------------------------------------

--
-- Struktur dari tabel `piutang`
--

CREATE TABLE `piutang` (
  `no_faktur` varchar(20) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `tgl_jatuhtempo` date NOT NULL,
  `hariberjalan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jumlah_tagihan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `piutang`
--

INSERT INTO `piutang` (`no_faktur`, `tgl_faktur`, `tgl_jatuhtempo`, `hariberjalan`, `nama_pelanggan`, `alamat`, `jumlah_tagihan`) VALUES
('08', '2020-06-07', '2020-07-07', '', 'RS Bhayangkara', 'jl a yani km 03', '125000'),
('12', '2020-07-16', '2020-08-16', '', 'RS Ulin Bjm', 'jl a yani km 02', '36250'),
('13', '2020-07-20', '2020-08-20', '', 'RS Ulin Bjm', 'jl a yani km 02', '625000'),
('14', '2020-07-30', '2020-07-30', '', 'RS Sari Mulia', 'jl jati', '15000'),
('15', '2020-07-30', '2020-07-30', '', 'RS Ulin Bjm', 'jl a yani km 02', '9375'),
('22', '2020-07-30', '2020-07-30', '', 'RS Sari Mulia', 'jl jati', '37500'),
('23', '2020-07-30', '2020-07-30', '', 'RS Sari Mulia', 'jl jati', '10875'),
('24', '2020-07-30', '2020-07-30', '', 'RS Sari Mulia', 'jl jati', '27500'),
('25', '2020-07-30', '2020-07-30', '', 'RS Sari Mulia', 'jl jati', '36250'),
('29', '2020-07-30', '2020-07-30', '', 'RS Ulin Bjm', 'jl a yani km 02', '25000'),
('30', '2020-07-31', '2020-07-31', '', 'RS Sari Mulia', 'jl jati', '31250'),
('31', '2020-07-31', '2020-07-31', '', 'RS Bhayangkara', 'jl a yani km 03', '34500'),
('34', '2020-07-31', '2020-07-31', '', 'RS Bhayangkara', 'jl a yani km 03', '25000'),
('35', '2020-07-31', '2020-07-31', '', 'RS Ulin Bjm', 'jl a yani km 02', '49000'),
('36', '2020-07-31', '2020-07-31', '', 'RS Bhayangkara', 'jl a yani km 03', '25000'),
('37', '2020-07-31', '2020-07-31', '', 'RS Ulin Bjm', 'jl a yani km 02', '12500'),
('38', '2020-07-31', '2020-07-31', '', 'RS Sari Mulia', 'jl a yani km 02', '47500'),
('39', '2020-07-31', '2020-07-31', '', 'RS Bhayangkara', 'jl a yani km 03', '50000'),
('40', '2020-07-31', '2020-07-31', '', 'RS Sari Mulia', 'jl jati', '25000'),
('42', '2020-07-31', '2020-07-31', '', 'RS Sari Mulia', 'jl jati', '25000'),
('43', '2020-07-31', '2020-07-31', '', 'RS Bhayangkara', 'jl a yani km 03', '25000'),
('44', '2020-08-01', '2020-08-01', '', 'RS Sari Mulia', 'jl jati', '25000'),
('58', '2020-08-03', '2020-08-03', '', 'RS Sari Mulia', 'jl jati', '25000'),
('63', '2020-08-03', '2020-08-03', '', 'RS Ulin Bjm', 'jl a yani km 02', '32500'),
('64', '2020-08-03', '2020-08-03', '', 'RS Bhayangkara', 'jl a yani km 03', '39750'),
('65', '2020-08-03', '2020-08-03', '', 'RS Sari Mulia', 'jl jati', '45000'),
('66', '2020-08-03', '2020-08-03', '', 'RS Ulin Bjm', 'jl a yani km 02', '35000'),
('68', '2020-08-03', '2020-08-03', '', 'RS Ulin Bjm', 'jl a yani km 02', '35000'),
('70', '2020-08-03', '2020-08-03', '', 'RS Bhayangkara', 'jl a yani km 03', '25000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `piutang2`
--

CREATE TABLE `piutang2` (
  `no_faktur` varchar(20) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `tgl_jatuhtempo` date NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jumlah_tagihan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `piutang2`
--

INSERT INTO `piutang2` (`no_faktur`, `tgl_faktur`, `tgl_jatuhtempo`, `nama_pelanggan`, `alamat`, `jumlah_tagihan`) VALUES
('09', '2020-06-07', '2020-07-07', 'RS Ulin Bjm', 'jl a yani km 02', '41250'),
('10', '2020-06-08', '2020-07-08', 'RS Bhayangkara', 'jl a yani km 03', '18125'),
('12', '2020-07-16', '2020-08-16', 'RS Ulin Bjm', 'jl a yani km 02', '36250'),
('13', '2020-07-20', '2020-08-20', 'RS Ulin Bjm', 'jl a yani km 02', '625000'),
('14', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', '15000'),
('15', '2020-07-30', '2020-07-30', 'RS Ulin Bjm', 'jl a yani km 02', '9375'),
('22', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', '37500'),
('23', '2020-07-30', '2020-07-30', 'RS Sari Mulia', 'jl jati', '10875'),
('29', '2020-07-30', '2020-07-30', 'RS Ulin Bjm', 'jl a yani km 02', '25000'),
('30', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl jati', '31250'),
('31', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', '34500'),
('34', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', '25000'),
('35', '2020-07-31', '2020-07-31', 'RS Ulin Bjm', 'jl a yani km 02', '49000'),
('36', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', '25000'),
('37', '2020-07-31', '2020-07-31', 'RS Ulin Bjm', 'jl a yani km 02', '12500'),
('38', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl a yani km 02', '47500'),
('39', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', '50000'),
('40', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl jati', '25000'),
('42', '2020-07-31', '2020-07-31', 'RS Sari Mulia', 'jl jati', '25000'),
('43', '2020-07-31', '2020-07-31', 'RS Bhayangkara', 'jl a yani km 03', '25000'),
('44', '2020-08-01', '2020-08-01', 'RS Sari Mulia', 'jl jati', '25000'),
('58', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', '25000'),
('63', '2020-08-03', '2020-08-03', 'RS Ulin Bjm', 'jl a yani km 02', '32500'),
('64', '2020-08-03', '2020-08-03', 'RS Bhayangkara', 'jl a yani km 03', '39750'),
('65', '2020-08-03', '2020-08-03', 'RS Sari Mulia', 'jl jati', '45000'),
('66', '2020-08-03', '2020-08-03', 'RS Ulin Bjm', 'jl a yani km 02', '35000'),
('68', '2020-08-03', '2020-08-03', 'RS Ulin Bjm', 'jl a yani km 02', '35000'),
('70', '2020-08-03', '2020-08-03', 'RS Bhayangkara', 'jl a yani km 03', '25000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `retur`
--

CREATE TABLE `retur` (
  `no_retur` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `total_1` varchar(20) NOT NULL,
  `ppn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `retur`
--

INSERT INTO `retur` (`no_retur`, `tanggal`, `nama_pelanggan`, `alamat`, `kode_barang`, `nama_barang`, `quantity`, `satuan`, `harga`, `total_1`, `ppn`) VALUES
('01', '2020-06-12', 'rs ulin', 'jl ahmad yani km 02', 'sp01', 'spuit 1cc', 100, 'Pcs', '1000', '100000', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `tanggal` date NOT NULL,
  `rumahsakit` varchar(30) NOT NULL,
  `ruangan` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `hasil` varchar(80) NOT NULL,
  `respon` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`tanggal`, `rumahsakit`, `ruangan`, `user`, `hasil`, `respon`) VALUES
('2020-08-17', 'RS Sari Mulia', 'Kasir', 'Ibu Dita', 'Ngambil tagihan sebesar 3 juta', 'Sip'),
('2020-08-13', 'RS Ansari Saleh', 'Gudang', 'Ibu Hera', 'Tanda tangan berkas', 'Jangan lupa tanyakan kepastian bayar'),
('2020-08-11', 'RS Ulin Bjm', 'Akuntansi', 'Ibu Ida', 'Menayakan Kapan Faktur no 002 Dibayar', 'Ambil juga ssp'),
('2020-08-12', 'RS Sari Mulia', 'Farmasi', 'Ibu Redha', 'Menawarkan Polywin Safety ukuran 20 G', 'Pastikan agar bisa ter order bulan ini untuk barang itu'),
('2020-08-15', 'RS Bhayangkara', 'Keuangan', 'Ibu Rena', 'Ngambil ssp', 'Sekalian tanyakan apakah ada perubahan npwp'),
('2020-08-14', 'RS Bedah Siaga', 'Farmasi', 'Pa Abe', 'Ngantar Exam 20 box', 'Pastikan di ttd tgn dan stempel oleh rumah sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokbarang2`
--

CREATE TABLE `stokbarang2` (
  `no` varchar(8) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `stok_akhir` varchar(15) NOT NULL,
  `kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stokbarang2`
--

INSERT INTO `stokbarang2` (`no`, `kode_barang`, `nama_barang`, `satuan`, `stok_akhir`, `kadaluarsa`) VALUES
('6', 'bs', 'blood set', 'Pcs', '500', '2024-02-28'),
('4', 'mejl', 'masker jilbab', 'Box', '1000', '2024-12-30'),
('8', 'mf05', 'mpack flat 50', 'Roll', '20', '2025-04-20'),
('2', 'msgn', 'glove non sterile', 'Box', '1200', '2025-03-29'),
('3', 'msgs', 'glove sterile', 'Pair', '800', '2025-01-10'),
('7', 'ply', 'polywin', 'Pcs', '1500', '2024-06-28'),
('1', 'sp01', 'spuit 1 cc', 'Pcs', '760', '2024-10-30'),
('5', 'ub', 'urine bag 2000 ml', 'Pcs', '650', '2023-06-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_barang`
--

CREATE TABLE `stok_barang` (
  `no` varchar(8) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok_akhir` int(11) NOT NULL,
  `tgl_expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_barang`
--

INSERT INTO `stok_barang` (`no`, `kode_barang`, `nama_barang`, `satuan`, `stok_akhir`, `tgl_expired`) VALUES
('6', 'bs', 'blood set', 'Pcs', 500, '2024-02-28'),
('4', 'mejl', 'masker jilbab', 'Box', 1000, '2024-12-30'),
('8', 'mf05', 'mpack flat 50', 'Roll', 20, '2025-04-20'),
('2', 'msgn', 'glove non sterile', 'Box', 1200, '2025-03-29'),
('3', 'msgs', 'glove sterile', 'Pair', 800, '2025-01-10'),
('7', 'ply', 'polywin', 'Pcs', 1500, '2024-06-28'),
('1', 'sp01', 'spuit 1 cc', 'Pcs', 760, '2024-10-30'),
('5', 'ub', 'urine bag 2000 ml', 'Pcs', 650, '2023-06-22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`no_register`);

--
-- Indeks untuk tabel `cod`
--
ALTER TABLE `cod`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indeks untuk tabel `garansi`
--
ALTER TABLE `garansi`
  ADD PRIMARY KEY (`beritaacara`);

--
-- Indeks untuk tabel `lhs`
--
ALTER TABLE `lhs`
  ADD PRIMARY KEY (`user`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `movement_on`
--
ALTER TABLE `movement_on`
  ADD PRIMARY KEY (`no_mo`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`npwp`);

--
-- Indeks untuk tabel `pembelian_lokal`
--
ALTER TABLE `pembelian_lokal`
  ADD PRIMARY KEY (`no_pl`);

--
-- Indeks untuk tabel `piutang`
--
ALTER TABLE `piutang`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indeks untuk tabel `piutang2`
--
ALTER TABLE `piutang2`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indeks untuk tabel `retur`
--
ALTER TABLE `retur`
  ADD PRIMARY KEY (`no_retur`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`user`);

--
-- Indeks untuk tabel `stokbarang2`
--
ALTER TABLE `stokbarang2`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
