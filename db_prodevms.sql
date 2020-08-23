-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2020 pada 00.37
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prodevms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aanwijzings`
--

CREATE TABLE `aanwijzings` (
  `id_aanwijzing` int(10) NOT NULL,
  `no_ba_aanwijzing` varchar(30) DEFAULT NULL,
  `tanggal_aanwijzing` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_wbs`
--

CREATE TABLE `daftar_wbs` (
  `kode_lokasi` varchar(10) NOT NULL,
  `kode_wbs` varchar(30) DEFAULT NULL,
  `nama_project_wbs` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `daftar_wbs`
--

INSERT INTO `daftar_wbs` (`kode_lokasi`, `kode_wbs`, `nama_project_wbs`) VALUES
('S107161', 'I.8513.19.07.0S4C.161.60', 'Pembangunan GI 150 kV Kalianda Ext.'),
('S107160', 'I.8513.19.07.0S4C.160.60', 'Pembangunan GI 150 kV Ketapang '),
('S107159', 'I.8513.19.07.0S4C.159.60', 'Pembangunan GI 150 kV Sukarame Ext.'),
('S107158', 'I.8513.19.07.0S4C.158.60', 'Pembangunan GI 150 kV Jati Agung'),
('S107157', 'I.8513.19.07.0S4C.157.60', 'Pembangunan SUTET 275 kV Phi Incomer Muara Enim Jalur 2 (PME-03)'),
('S107156', 'I.8513.19.07.0S4C.156.60', 'SUTT 150 kV Mesuji - Dispasena Sec 2 (Paket MDP - 02)'),
('S107155', 'I.8513.19.07.0S4C.155.60', 'SUTT 150 kV Mesuji - Dispasena Sec 1 (Paket MDP - 01)'),
('S107154', 'I.8513.19.07.0S4C.154.60', 'SUTT 150 kV PLTP Rantau Dadap - GI Lumut Balai (Paket RL)'),
('S107153', 'I.8513.19.07.0S4C.153.60', 'SUTT 150 kV Kalianda - Ketapang (Paket KK)'),
('S107152', 'I.8513.19.07.0S4C.152.60', 'SUTT 150 kV Sukarame - Jati Agung (Paket SJ)'),
('S107150', 'I.8513.19.07.0S4C.150.60', 'SUTT 150 kV Pulau Baai - Arga Makmur Sec. 2 (Paket PA-02)'),
('S107149', 'I.8513.19.07.0S4C.149.60', 'SUTT 150 kV Pulau Baai - Arga Makmur Sec. 1 (Paket PA-01)'),
('S107148', 'I.8513.19.07.0S4C.148.60', 'SUTT 150 kV Seputih Banyak - Dende Teladas (Paket SBD)'),
('S107147', 'I.8513.19.07.0S4C.147.60', 'Penyelesaian Pembangunan SUTT 150 kV Seputih Banyak - Menggala (Paket SBM)'),
('S107146', 'I.8513.19.07.0S4C.146.60', 'SUTT 150 kV Pagelaran - Gedong Tataan - Teluk Ratai (Paket PGT)'),
('S107145', 'I.8513.19.07.0S4C.145.60', 'SUTT 150 kV Blambangan Umpu - Pakuan Ratu (Paket BP)'),
('S107144', 'I.8513.19.07.0S4C.144.60', 'Pembangunan Ext. 2LB GI 150 kV Sarolangun (Paket MRS)'),
('S107143', 'I.8513.19.07.0S4C.143.60', 'GI 150 kV Muara Rupit (Paket MRS)'),
('S107142', 'I.8513.19.07.0S4C.142.60', 'SUTT 150 kV Sarolangun - Muara Rupit (Paket SMR)'),
('S107140', 'I.8513.19.07.0S4C.140.60', 'GIS 150 kV Kota Timur dan GI 150 kV Kenten Ext. dan GI 70 kV Boom Baru\n(Paket GIS KT)'),
('S107139', 'I.8513.19.07.0S4C.139.60', 'GIS 150 kV Kota Barat dan GI 150 kV Gandus Ext.\n(Paket GIS KB)'),
('S107138', 'I.8513.19.07.0S4C.138.60', 'T/L 275 kV Phi Incomer Muara Enim Section 2 (Paket ME-02)'),
('S107137', 'I.8513.19.07.0S4C.137.60', 'T/L 275 kV Phi Incomer Muara Enim Section 1 (Paket ME-01)'),
('S107136', 'I.8513.19.07.0S4C.136.60', 'T/L 150 kV Martapura - Muara Dua Section Oku Timur (Paket MM-02)'),
('S107135', 'I.8513.19.07.0S4C.135.60', 'T/L 150 kV Martapura - Muara Dua Section Oku Selatan (Paket MM-01)'),
('S107134', 'I.8513.19.07.0S4C.134.60', 'GI 150 kV Martapura Ext. 2LB arah Muara Dua (Paket MD)'),
('S107133', 'I.8513.19.07.0S4C.133.60', 'GI 150 kV Muara Dua (Paket MD)'),
('S107128', 'I.8513.19.07.0S4C.128.60', 'GI 150 kV Sarolangun'),
('S107112', 'I.8513.19.07.0S4C.112.60', 'Penyempurnaan Pengadaan dan Pemasangan GITET 275/150 kV New Aur Duri serta Bay IBT 2 sisi 150 kV (Paket NAD)'),
('S107108', 'I.8513.19.07.0S4C.108.60', 'SUTET 275 kV Lahat-Lumut Balai Section 3'),
('S107107', 'I.8513.19.07.0S4C.107.60', 'SUTET 275 kV Lahat-Lumut Balai Section 2'),
('S107106', 'I.8513.19.07.0S4C.106.60', 'SUTET 275 kV Lahat-Lumut Balai Section 1'),
('S10780', 'I.8513.19.07.0S4C.080.60', 'Penyempurnaan SUTT 275 kV Lahat - Muara Enim - Gumawang Section 1 (Paket PLG-01)'),
('S10778', 'I.8513.19.07.0S4C.078.60', 'Penyempurnaan SUTT 275 kV Lahat - Muara Enim - Gumawang Section 2 (Paket PLG-02)'),
('S10775', 'I.8513.19.07.0S4C.075.60', 'Penyempurnaan SUTT 275 kV Lahat - Muara Enim - Gumawang Section 3 (Paket PLG-03)'),
('S10751', 'I.8513.19.07.0S4C.051.60', 'T/L 150 kV Kayu Agung - Gumawang (Sec 5)'),
('S10748', 'I.8513.19.07.0S4C.048.60', 'Penyelesaian Pembangunan SUTT 150 kV Kayu Agung - Gumawang (Paket GK)'),
('S10711', 'I.8513.19.07.0S43.011.60', 'Percepatan Penyelesaian Pembangunan SUTT 150 kV Kayu Agung - Gumawang (Ex GK 1,3,4,7,8)'),
('S10706', 'I.8513.19.07.0S43.006.60', 'Pembangunan T/L Tebing Tinggi - Lubuk Linggau Sec. 1'),
('S10705', 'I.8513.19.07.0S43.005.60', 'GI 275 kV Gumawang'),
('S10703', 'I.8513.19.07.0S43.003.60', 'Penyelesaian Pembangunan SUTT 275kV Lahat-M.Enim-Gumawang (Paket LG)'),
('S10701', 'I.8513.19.07.0S43.001.60', 'Penyelesaian Pembangunan SUTT 150 kV Bangko - Merangin - Sungai Penuh'),
('P10683', 'I.8501.18.07.4B00.091.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Medan Barat - Batu Gingging'),
('P10682', 'I.8501.18.07.4B00.082.60', 'PENGENDALIAN DAN ANALISA PROYEK GIS Listrik - GIS Glugur'),
('P10681', 'I.8501.18.07.4B00.081.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Galang-GITET Medan Timur- Medan Barat - Pangkalan Susu'),
('S10690', 'I.8514.19.07.0S4B.090.60', 'Pembangunan dan Pengadaan GI 50 kV Selayang 60 MVA'),
('S10689', 'I.8514.19.07.0S4B.089.60', 'Pembangunan dan Pengadaan GI 150 kV Tanah Jawa 60 MVA'),
('S10688', 'I.8514.19.07.0S4B.088.60', 'Pembangunan dan Pengadaan GI 150 kV Tanjung Pura 60 MVA'),
('S10687', 'I.8514.19.07.0S4B.087.60', 'Pembangunan dan Pengadaan T/L 150 kV Pematang Siantar - Tanah Jawa'),
('S10686', 'I.8514.19.07.0S4B.086.60', 'GI 150 kV Rantau Prapat'),
('S10685', 'I.8514.19.07.0S4B.085.60', 'GI 150 kV Sei Rotan'),
('S10684', 'I.8514.19.07.0S4B.084.60', 'GI 150 kV Pangkalan Brandan'),
('S10683', 'I.8514.19.07.0S4B.083.60', 'GI 150 kV Langsa'),
('S10680', 'I.8514.19.07.0S4B.080.60', 'GI 150 kV Subulussalam (Ext) 2LB'),
('S10679', 'I.8514.19.07.0S4B.079.60', 'T/L 150 kV Subulussalam - Singkil 2 CCT, 1 HAWK (Sect 1)'),
('S10678', 'I.8514.19.07.0S4B.078.60', 'GI 275/150 kV Sigli IBT (1 X 250 MVA)'),
('S10676', 'I.8514.19.07.0S4B.076.60', 'T/L 275 kV Sigli - Ulee Kareng (Sect 4)'),
('S10675', 'I.8514.19.07.0S4B.075.60', 'T/L 275 kV Sigli - Ulee Kareng (Sect 3)'),
('S10674', 'I.8514.19.07.0S4B.074.60', 'T/L 275 kV Sigli - Ulee Kareng (Sect 2)'),
('S10673', 'I.8514.19.07.0S4B.073.60', 'T/L 275 kV Sigli - Ulee Kareng (Sect 1)'),
('S10672', 'I.8514.19.07.0S4B.072.60', 'GI 150 kV Singkil (1 x 30 MVA)'),
('S10671', 'I.8514.19.07.0S4B.071.60', 'T/L 150 kV Subulussalam - Singkil (Sect 2)'),
('S10669', 'I.8514.19.07.0S4B.069.60', 'Pembangunan GI 150 kV Kualanamu (Ext) 60 MVA 1 TB 1 TRF'),
('S10668', 'I.8514.19.07.0S4B.068.60', 'Pembangunan GI 150 kV Tebing Tinggi (Ext) 60 MVA 1 TB 1 TRF'),
('S10667', 'I.8514.19.07.0S4B.067.60', 'Pembangunan GI 150 kV New Padang Sidempuan (Ext) 30 MVA 1 TB 1 TRF'),
('S10665', 'I.8514.19.07.0S4B.065.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi Loan IBRD 8280-ID IPTD-2 Package 1 Lot 1 dan Package 2 Lot 2 150 kV Bangkinang Substation (Uprating)'),
('S10664', 'I.8513.19.07.0S4B.064.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi Loan IBRD 8280-ID IPTD-2 Package 1 Lot 1 dan Package 2 Lot 2 150 kV Kiliranjao Substation (Extension)'),
('S10663', 'I.8513.19.07.0S4B.063.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi Loan IBRD 8280-ID IPTD-2 Package 1 Lot 1 dan Package 2 Lot 2 150 kV Payakumbuh Substation (Uprating)'),
('S10662', 'I.8513.19.07.0S4B.062.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi Loan IBRD 8280-ID IPTD-2 Package 1 Lot 1 dan Package 2 Lot 2 150 kV Bungus Substation (Extension)'),
('S10661', 'I.8514.19.07.0S4B.061.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi Loan IBRD 8280-ID IPTD-2 Package 1 Lot 1 dan Package 2 Lot 2 150 kV Bireun Substation (Uprating)'),
('S10660', 'I.8514.19.07.0S4B.060.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi Loan IBRD 8280-ID IPTD-2 Package 1 Lot 1 dan Package 2 Lot 2 150 kV Banda Aceh Substation (Uprating)'),
('S10639', 'I.8514.19.07.0S42.039.60', 'SUTT 275kV Padang Sidempuan - Payakumbuh'),
('S10638', 'I.8514.19.07.0S42.038.60', 'T/L 150 kV Sidikalang-Subulussalam Sec 2'),
('S10637', 'I.8514.19.07.0S42.037.60', 'T/L 150 kV Sidikalang-Subulussalam Sec 1'),
('S10636', 'I.8514.19.07.0S42.036.60', 'T/L 150 kV Padang Sidempuan-Penyabungan Sec 2'),
('S10635', 'I.8514.19.07.0S42.035.60', 'T/L 150 kV Padang Sidempuan-Penyabungan Sec 1'),
('S10611', 'I.8514.19.07.0S42.011.60', 'T/L Galang-Negri Dolok (Section 2)'),
('P10514', 'I.8501.18.01.4A00.014.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Asahan III (FTP2) (174 MW)'),
('P10513', 'I.8501.18.05.4A00.013.60', 'Pengendalian dan Analisa Proyek PLTP Hululais FTP 2 110 MW'),
('P10512', 'I.8501.18.02.4A00.012.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Pangkalan Susu #3&4 (FTP2) - 200 MW'),
('P10511', 'I.8501.18.04.4A00.011.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG MPP Nias (34 MW)'),
('P10510', 'I.8501.18.04.4A00.010.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Sumbagut-2 Peaker (Arun Ekspansi) 240 MW'),
('P10509', 'I.8501.18.06.4A00.009.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU/MG Riau Peaker 200 MW'),
('P10508', 'I.8501.18.01.4A00.008.60', 'Pengendalian dan Analisa Proyek PLTA Peusangan 1-2 (43 & 45 MW)'),
('P10507', 'I.8501.18.01.4A00.007.60', 'PLTA Asahan III (FTP2) (174 MW)'),
('J10518', 'I.8501.19.02.0J4A.018.60', 'PLTU Tembilahan (2 x 7 MW)'),
('J10517', 'I.8501.19.02.0J4A.017.60', 'PLTU Riau - Tenayan (2 x 110 MW)'),
('S10516', 'I.8514.19.04.0S4A.016.60', 'QAQC MPP Nias 25 MW'),
('S10506', 'I.8514.19.02.0S4A.006.60', 'Coal Unloading Jetty DWT PLTU Pangkalan Susu 3 &  4 (2 x 200 MW)'),
('S10504', 'I.8514.19.02.0S4A.004.60', 'PLTU Pangkalan Susu '),
('S10502', 'I.8514.19.02.0S18.002.60', 'PLTU Tembilahan'),
('S10501', 'I.8514.19.02.0S18.001.60', 'PLTU Tenayan'),
('S61112', 'I.8512.19.07.0S36.012.60', 'Penanganan Longsoran T.56 SUTT 150 kV PLTU Pacitan - New Pacitan - Nguntoronadi #1,2'),
('S61111', 'I.8512.19.07.0S36.011.60', 'Rekonfigurasi Single Phi menjadi Double Phi di GI Balong Bendo'),
('S61110', 'I.8512.19.07.0S36.010.60', 'GIS Driyorejo'),
('S61109', 'I.8512.19.07.0S36.009.60', 'Pembangunan Bus Section dan Rekonfigurasi GI 150 kV Surabaya Barat'),
('S61108', 'I.8512.19.07.0S36.008.60', 'Rekonfigurasi Single Phi menjadi Double Phi dan Single Busbar menjadi Double Busbar serta Bay Kopel Bus 150 kV GI Tanggul'),
('S61019', 'I.8511.19.07.0S35.022.60', 'Pembangunan Tower 108 SUTET 500 kV New Ujung Berung'),
('S61018', 'I.8511.19.07.0S35.021.60', 'Relokasi Tower 277 SUTET 500 kV Tasik - Depok'),
('S61017', 'I.8511.19.07.0S35.020.60', 'GI 150 kV Batang Substation (Uprate)'),
('S61016', 'I.8511.19.07.0S35.019.60', 'GI 150 kV Klaten Substation (Uprate)'),
('S61015', 'I.8511.19.07.0S35.018.60', 'GI 150 kV Poncol Baru Ext IPTD-2 Group 2 IBRD Loan 8280-ID Package 1 Lot 2'),
('S61014', 'I.8511.19.07.0S35.017.60', 'Rekonduktoring SUTT 150 kV Ungaran - Mranggen - Purwodadi'),
('P60526', 'I.8501.18.07.3400.015.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Rekond Suralaya Lama-Balaraja-Lengkong'),
('P60524', 'I.8501.18.07.3400.013.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Balaraja - Duri Kosambi'),
('P60523', 'I.8501.18.07.3400.012.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Rekondukturing Suralaya Lama - Balaraja - Lengkong'),
('S60249', 'I.8513.19.07.0S32.145.60', 'Pengadaan dan Pemasangan Bay Trafo 150 kV dan Kubikel 20 kV serta Pemasangan Trafo 60 MVA 150/20 kV di GIS Simpang Haru'),
('S60248', 'I.8513.19.07.0S32.144.60', 'Uprating Bay Penghantar 150 kV di GI Talang Kelapa'),
('S60246', 'I.8514.19.07.0S32.142.60', 'Uprating Kemampuan Konduktor SUTT 150 kV Padang Sidempuan-Gunung Tua Menjadi 2 Kali Eksisting'),
('S60245', 'I.8514.19.07.0S32.141.60', 'Uprating Kemampuan Konduktor SUTT 150 kV Gunung Tua-Rantau Prapat Menjadi 2 Kali Eksisting'),
('S60236', 'I.8514.19.07.0S32.132.60', 'Pekerjaan Uprating Bay penghantar 150 kV Belawan - Paya Pasir di Belawan dan GI Paya Pasir'),
('S60206', 'I.8514.19.07.0S32.102.60', 'Rekonduktoring SUTT 150 kV Pangkalan Brandan - Binjai Sirkit 1 & 2'),
('S62001', 'I.8515.19.02.0S25.001.60', 'Dome Shelter Coal Yard PLTU Nii Tanasa'),
('S60810', 'I.8512.19.02.0S24.001.60', 'Coal Shed Dome PLTU Teluk Balikpapan (2x110 MW)'),
('S60702', 'I.8512.19.19.0S29.002.60', 'Gedung Fasilitas Edukasi Kelistrikan'),
('S10216', 'I.8513.19.02.0S21.015.60', 'Penambahan Line Transportasi Batubara PLTU Sebalang'),
('S10215', 'I.8513.19.02.0S21.014.60', 'Modifikasi Sea Water Intake PLTU Sebalang'),
('S10214', 'I.8513.19.02.0S21.013.60', 'Pekerjaan Jasa Supervisi Konstruksi dan QAQC Sludge Dying Bed PLTU Keramasan'),
('S10213', 'I.8513.19.02.0S21.012.60', 'Access Road PLTU Keramasan'),
('S10212', 'I.8513.19.02.0S21.011.60', 'Pekerjaan Jasa Supervisi Konstruksi dan QAQC Coal Shelter PLTU Teluk Sirih Tahap II Sektor Pembangkitan Teluk Sirih'),
('S10211', 'I.8513.19.01.0S21.010.60', 'Pekerjaan Jasa Supervisi Konstruksi dan QAQC Perbaikan Longsor PLTA Musi Sektor Pengendalian Pembangkit Bengkulu'),
('S10210', 'I.8513.19.02.0S21.009.60', 'Pekerjaan Jasa Supervisi Konstruksi dan QAQC Coal Shelter PLTU Sebalang Tahap II Sektor Pembangkitan Sebalang'),
('S10106', 'I.8514.19.02.0S20.006.60', 'Pekerjaan Supervisi Konstruksi dan QAQC Pembangunan Dome Coal Yard PLTU Pangkalan Susu'),
('P90256', 'I.8501.19.12.0P10.001', 'Evaluasi dan Analisa Validasi Data PMO'),
('P90255', 'I.8501.18.07.1000.158.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Sentani-MPP Jayapura'),
('P90254', 'I.8501.18.07.1000.157.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Galang-Binjai-Pangkaian Susu'),
('P90253', 'I.8501.18.07.1000.156.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Bangkit - Tambu dan jalur\' Bolontio-Buol-Tolitoli'),
('P90252', 'I.8501.18.07.1000.155.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Passo-sirimau'),
('P90251', 'I.8501.18.07.1000.154.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Likupang-bitung-sawangan-tori sealam-a-tomohon-tasik ria'),
('P90250', 'I.8501.18.07.1000.153.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Moutong-Tolitoli'),
('P90249', 'I.8501.18.07.1000.152.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Marisa-Leok'),
('P90248', 'I.8501.18.07.1000.151.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Tanjung-Kuaro-Petung-Karang Joang'),
('P90247', 'I.8501.18.07.1000.150.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Tambak Lorok - Tj Jati - Rembang - Tj Awar2 - Ngimbang'),
('P90246', 'I.8501.18.07.1000.149.60', 'PENGENDALIAN DAN ANALISA PROYEK GITET Pangkalan Susu'),
('P90245', 'I.8501.18.07.1000.148.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Bojanegara-Lontar-PIK'),
('P90244', 'I.8501.18.07.1000.147.60', 'PENGENDALIAN DAN ANALISA PROYEK GIS kota Timur-GI Boom Baru'),
('P90243', 'I.8501.18.07.1000.146.60', 'PENGENDALIAN DAN ANALISA PROYEK SKTT Kenten - GIS kota timur - GIS kota barat - Gandus'),
('P90242', 'I.8501.18.07.1000.145.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Sumsel 6 -Palembang Tenggara'),
('P90241', 'I.8501.18.07.1000.144.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Muara Enim - Aur Duri'),
('P90240', 'I.8501.18.02.1000.143.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU RIAU-1 (2X300 MW)'),
('P90239', 'I.8501.18.06.1000.142.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Peaker Jawa-Bali 1 (Tambaklorok 700 MW)'),
('P90238', 'I.8501.18.02.1000.141.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU JAWA-5'),
('P90237', 'I.8501.18.04.1000.140.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG Sorong (30 MW)'),
('P90236', 'I.8501.18.04.1000.139.60', 'PENGENDALIAN DAN ANALISA PROYEK MPP Kaltimra (30MW)'),
('P90235', 'I.8501.18.02.1000.138.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Kaltim 4 (2x100 MW)'),
('P90234', 'I.8501.18.02.1000.137.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Kaltim (FTP2) 200 MW'),
('P90233', 'I.8501.18.02.1000.136.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Kalsel (FTP2) (2x100 MW)'),
('P90232', 'I.8501.18.02.1000.135.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Parit Baru (FTP 1) (2x50 MW)'),
('P90231', 'I.8501.18.02.1000.134.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Kalbar 1 (2x100)'),
('P90230', 'I.8501.18.04.1000.133.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG Kalbar/Pontianak Peaker (100 MW)'),
('P90229', 'I.8501.18.02.1000.132.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sumsel MT (Ekspansi) 350 MW'),
('P90228', 'I.8501.18.23.1000.131.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTB Jeneponto (60 MW)'),
('P90227', 'I.8501.18.02.1000.130.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Punagaya (FTP2) -100 MW'),
('P90226', 'I.8501.18.06.1000.129.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Grati Add on Blok 2 (183 MW)'),
('P90225', 'I.8501.18.04.1000.128.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG Sorong (20 MW)'),
('P90224', 'I.8501.18.04.1000.127.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Manokwari 2 (20 MW)'),
('P90223', 'I.8501.18.04.1000.126.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG MPP Tanjung Pinang (33 MW)'),
('P90222', 'I.8501.18.04.1000.125.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG Merauke 20 MW'),
('P90221', 'I.8501.18.04.1000.124.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Tarakan 40 MW'),
('P90220', 'I.8501.18.01.1000.123.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Rajamandala (47 MW)'),
('P90219', 'I.8501.18.04.1000.122.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG Belitung 1 (30 MW)'),
('P90218', 'I.8501.18.01.1000.121.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Semangka (56 MW)'),
('P90217', 'I.8501.18.05.1000.120.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTP Sarulla 1 (FTP2) #3 -110 MW'),
('P90216', 'I.8501.18.04.1000.119.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTM Parluasan (10 MW)'),
('P90215', 'I.8501.18.02.1000.111.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU MT Kaltim 6 (2x100 MW)'),
('P90214', 'I.8501.18.02.1000.110.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU MT Kaltim 5 (2x100 MW)'),
('P90213', 'I.8501.18.02.1000.109.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU MT Kaltim 3 (2x100 MW)'),
('P90212', 'I.8501.18.02.1000.108.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sumbagsel-1 MT - 300 MW'),
('P90211', 'I.8501.18.02.1000.107.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Banyu Asin'),
('P90210', 'I.8501.18.02.1000.106.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sumsel-8 (2x600 MW)'),
('P90209', 'I.8501.18.02.1000.105.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU MT Sumsel-6 (1x300 MW)'),
('P90208', 'I.8501.18.02.1000.104.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Jambi MT Tahap 2 (2x300 MW)'),
('P90207', 'I.8501.18.02.1000.103.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Jambi MT Tahap 1 (2x300 MW)'),
('P90206', 'I.8501.18.02.1000.102.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Kalbar 2 (2x100 MW)'),
('P90204', 'I.8501.18.02.1000.100.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Bengkulu (200 MW)'),
('P90203', 'I.8501.18.05.1000.099.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTP Lumut Balai (FTP2)#1 -110 MW'),
('P90202', 'I.8501.18.05.1000.098.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTP Sorik Marapi (FTP2) - 240 MW'),
('P90201', 'I.8501.18.05.1000.097.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTP Rantau Dedap (FTP2) (86 MW)'),
('P90200', 'I.8501.18.02.1000.096.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sumut-1 - 300 MW'),
('P90199', 'I.8501.18.05.1000.095.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTP Muara Laboh (FTP2) 80 MW & 140 MW'),
('P90198', 'I.8501.18.01.1000.094.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Hasang (FTP2) - 39MW'),
('P90197', 'I.8501.18.02.1000.093.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Kalselteng 5 MT (2x100 MW)'),
('P90196', 'I.8501.18.02.1000.092.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU MT Kalselteng-4 (2x100 MW)'),
('P90195', 'I.8501.18.02.1000.091.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Kalselteng 3 (2 x 100 MW)'),
('P90194', 'I.8501.18.02.1000.090.60', 'Pengendalian dan Analisa Proyek PLTU Kalselteng 1 2 x 100 MW'),
('P90193', 'I.8501.18.04.1000.089.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG/GU/MGU Kalsel (200 MW)'),
('P90189', 'I.8501.18.02.1000.088.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sulbagut 1 (2x50 MW)'),
('P90188', 'I.8501.18.02.1000.087.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Bau-Bau (2x15 MW)'),
('P90187', 'I.8501.18.02.1000.086.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Mamuju (2x25 MW)'),
('P90186', 'I.8501.18.01.1000.085.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Malea (FTP2) (2x45 MW)'),
('P90185', 'I.8501.18.02.1000.084.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Kendari 3 (2x50 MW)'),
('P90184', 'I.8501.18.23.1000.083.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTB Sidrap (70 MW)'),
('P90183', 'I.8501.18.02.1000.082.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Jeneponto 2 (125 MW)'),
('P90182', 'I.8501.18.01.1000.081.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Poso 1 (2x35 MW)'),
('P90181', 'I.8501.18.02.1000.080.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sulut 3 (2x50 MW)'),
('P90180', 'I.8501.18.06.1000.079.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Jawa-3 (800 MW)'),
('P90179', 'I.8501.18.04.1000.078.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG MPP Sulteng (60 MW)'),
('P90178', 'I.8501.18.04.1000.077.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG Timika 2 (30 MW)'),
('P90177', 'I.8501.18.06.1000.076.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Sumbagut-1,3,4 - 800 MW'),
('P90176', 'I.8501.18.01.1000.075.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA KESAMBEN PSN'),
('P90175', 'I.8501.18.01.1000.074.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Batang Toru (Tapsel) (510 MW)'),
('P90174', 'I.8501.18.04.1000.073.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG MPP Tj Jabung Timur (33 MW)'),
('P90173', 'I.8501.18.04.1000.072.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG MPP Banda Aceh 2 (110 MW)'),
('P90172', 'I.8501.18.04.1000.071.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG MPP Banda Aceh (55 MW)'),
('P90171', 'I.8501.18.06.1000.070.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Muara Tawar Add on Blok 4 (250 MW)'),
('P90170', 'I.8501.18.06.1000.069.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Muara Tawar Add on Blok 3 (250 MW)'),
('P90169', 'I.8501.18.06.1000.068.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Muara Tawar Add on Blok 2 (150 MW)'),
('P90168', 'I.8501.18.06.1000.067.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Jawa-3 (800 MW)'),
('P90167', 'I.8501.18.06.1000.066.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Muara Tawar Add on Blok 4 (250 MW)'),
('P90166', 'I.8501.18.06.1000.065.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Muara Tawar Add on Blok 3 (250 MW)'),
('P90165', 'I.8501.18.06.1000.064.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Muara Tawar Add on Blok 2 (150 MW)'),
('P90164', 'I.8501.18.06.1000.063.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU/GU/MG BALI -135 MW'),
('P90163', 'I.8501.18.02.1000.062.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Jawa-7'),
('P90162', 'I.8501.18.02.1000.061.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Jawa Tengah (Batang) (PPP) (2x950 MW)'),
('P90161', 'I.8501.18.06.1000.060.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU JAWA-1 (880 MW)'),
('P90160', 'I.8501.18.02.1000.059.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU JAWA 4 - JAWA TENGAH (2X1000 MW)'),
('P90159', 'I.8501.18.02.1000.058.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU JAWA 3 - JAWA BARAT (2X660 MW)'),
('P90158', 'I.8501.18.02.1000.057.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU JAWA 1 - JAWA BARAT (1X1000 MW)'),
('P90157', 'I.8501.18.02.1000.056.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU JAWA-8 (1000 MW)'),
('P90156', 'I.8501.18.05.1000.055.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTP Sokoria (FTP2) (5 MW)'),
('P90152', 'I.8501.17.02.1000.053.60', 'PLTU KALTIMRA MT (2x600 MW)'),
('P90151', 'I.8501.17.02.1000.052.60', 'PLTU KALTIM 6 MT (1x200 MW)'),
('P90150', 'I.8501.17.02.1000.051.60', 'PLTU KALTIM 5 MT (1x100 MW)'),
('P90149', 'I.8501.17.02.1000.050.60', 'PLTU KALTIM 3 MT (1x200 MW)'),
('P90148', 'I.8501.17.02.1000.049.60', 'PLTU KALSELTENG 5 MT (2 X 100 MW)'),
('P90147', 'I.8501.17.02.1000.048.60', 'PLTU KALSELTENG 4 MT (2 X 100 MW)'),
('P90146', 'I.8501.17.02.1000.047.60', 'PLTU KALSELTENG 3 MT (2 X 100 MW)'),
('P90145', 'I.8501.17.02.1000.046.60', 'PLTU BANYU ASIN (2x120 MW)'),
('P90144', 'I.8501.17.02.1000.045.60', 'PLTU SUMBAGSEL-1 MT (2x150 MW)'),
('P90143', 'I.8501.17.02.1000.044.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sumsel MT (Ekspansi) 350 MW'),
('P90142', 'I.8501.17.02.1000.043.60', 'PLTU SUMATERA 1 MT (600 MW)'),
('P90141', 'I.8501.17.19.1000.042.60', 'GEDUNG DAN SARANA PENDUKUNG PROJECT CONTROL'),
('P90140', 'I.8501.17.02.1000.041.60', 'PLTU JAWA-7 (2x1000 MW)'),
('P90139', 'I.8501.17.02.1000.040.60', 'PLTU JAWA TENGAH (BATANG) PPP (2x950 MW)'),
('P90138', 'I.8501.17.02.1000.039.60', 'PLTU SUMSEL-8 (2x600 MW)'),
('P90137', 'I.8501.17.02.1000.038.60', 'PLTU SUMSEL-6 (2x300 MW)'),
('P90136', 'I.8501.17.02.1000.037.60', 'PLTU SUMSEL-1 MT (2X300 MW)'),
('P90135', 'I.8501.17.06.1000.036.60', 'PLTGU PEAKER JAWA-BALI 3 (500 MW)'),
('P90134', 'I.8501.17.06.1000.035.60', 'PLTGU PEAKER JAWA-BALI 2 (PERAK) 500 MW'),
('P90133', 'I.8501.17.06.1000.034.60', 'PLTGU PEAKER JAWA-BALI 1 (700 MW)'),
('P90132', 'I.8501.17.02.1000.033.60', 'PLTU JAWA-8 (1000 MW)'),
('P90131', 'I.8501.17.02.1000.032.60', 'PLTU JAWA-5 (2x1000 MW)'),
('P90130', 'I.8501.17.02.1000.031.60', 'PLTU JAWA 4 - JAWA TENGAH (2x1000 MW)'),
('P90129', 'I.8501.17.02.1000.030.60', 'PLTU JAWA 3 - JAWA BARAT (2x660 MW)'),
('P90128', 'I.8501.17.02.1000.029.60', 'PLTU JAWA 1 - JAWA BARAT (1x1000 MW)'),
('P90127', 'I.8501.17.06.1000.028.60', 'PLTGU JAWA-1 (2x800 MW)'),
('P90126', 'I.8501.17.02.1000.027.60', 'PLTU RIAU-1 (2x300 MW)'),
('P90125', 'I.8501.17.02.1000.026.60', 'PROYEK PEMBANGKIT PEAKER JAWA BALI 4'),
('P90124', 'I.8501.17.02.1000.025.60', 'PROYEK PEMBANGKIT JAWA-3 (300 MW)'),
('P90123', 'I.8501.17.02.1000.024.60', 'PROYEK IPP PEMBANGKIT JAMBI (2X600 MW)'),
('J90116', 'I.8501.19.07.0J10.017.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Duta Hita Jaya'),
('J90115', 'I.8501.19.07.0J10.016.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Gunung Steel Construction'),
('J90114', 'I.8501.19.07.0J10.015.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Bangun Sarana Baja'),
('J90113', 'I.8501.19.07.0J10.014.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Karya Logam Agung'),
('J90112', 'I.8501.19.07.0J10.013.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Danusari Mitra Sejahtera'),
('J90111', 'I.8501.19.07.0J10.012.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Kokoh Semesta'),
('J90110', 'I.8501.19.07.0J10.011.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Wika Industri & Konstruksi'),
('J90109', 'I.8501.19.07.0J10.010.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Kurnia Adijaya Mandiri'),
('J90108', 'I.8501.19.07.0J10.009.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Citramasjaya Teknikmandiri'),
('J90107', 'I.8501.19.07.0J10.008.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Karunia Berca Indonesia'),
('J90106', 'I.8501.19.07.0J10.007.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Twink Indonesia'),
('J90105', 'I.8501.19.07.0J10.006.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Duta Cipta Pakar Perkasa'),
('J90104', 'I.8501.19.07.0J10.005.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Armindo Catur Pratama'),
('J90103', 'I.8501.19.07.0J10.004.60', 'Pekerjaan Inspeksi, Pengujian, dan Pemeriksaan Material Tower Transmisi - PT Bukaka Teknik Utama'),
('J90222', 'I.8501.19.07.0J10.118.60', 'MTU Terpusat Pabrikan CPSI'),
('J90221', 'I.8501.19.07.0J10.117.60', 'MTU Pusat Parbrikan UNINDO'),
('J90220', 'I.8501.19.07.0J10.116.60', 'MTU Terpusat Pabrikan ABB'),
('J90219', 'I.8501.19.07.0J10.115.60', 'Pelimpaham Penugasan PLN Puslitbang QAQC Open Book Trafo 2016 Lot 3 - Konsultan Recounsult'),
('J90218', 'I.8501.19.07.0J10.114.60', 'Pelimpaham Penugasan PLN Puslitbang QAQC Open Book Trafo 2015 - Konsultan PLN E'),
('J90217', 'I.8501.19.07.0J10.113.60', 'Pelimpaham Penugasan PLN Puslitbang QAQC Open Book Trafo 2016 - Konsultan PLN E'),
('J90216', 'I.8501.19.07.0J10.112.60', 'Pelimpaham Penugasan PLN Puslitbang QAQC Open Book GIS 2016 - Konsultan PLN E'),
('J90153', 'I.8501.19.07.0J10.024.60', 'Pekerjaan Pemeriksaan Jaminan Kualitas Barang GIS APLN 2017 Pabrikan PT HPSI'),
('J90192', 'I.8501.19.07.0J10.023.60', 'Pekerjaan Pemeriksaan Jaminan Kualitas Barang GIS APLN 2017 Pabrikan PT ABB'),
('J90191', 'I.8501.19.07.0J10.022.60', 'Pekerjaan Pemeriksaan Jaminan Kualitas Barang Transformator Tenaga APLN 2017 Pabrikan PT XD Sakti'),
('J90190', 'I.8501.19.07.0J10.021.60', 'Pekerjaan Pemeriksaan Jaminan Kualitas Barang Transformator Tenaga APLN 2017 Pabrikan PT Bambang Djaja'),
('J90155', 'I.8501.19.07.0J10.020.60', 'Pekerjaan Pemeriksaan Jaminan Kualitas Barang Transformator Tenaga APLN 2017 Pabrikan PT CGPSI'),
('J90154', 'I.8501.19.07.0J10.019.60', 'Pekerjaan Pemeriksaan Jaminan Kualitas Barang Transformator Tenaga APLN 2017 Pabrikan PT UNINDO'),
('S90223', 'I.8501.19.07.0S10.119.60', 'Pekerjaan Penyusunan Mekanisme Perhitungan Kemampuan DPT Transmisi'),
('S90117', 'I.8511.19.19.0S10.018.60', 'Renovasi Masjid At-Taqwa'),
('S107162', 'I.8513.19.07.0S4C.162.60', 'Pembangunan GI 150 kV Dipasena'),
('S107163', 'I.8513.19.07.0S4C.163.60', 'Pembangunan GI 150 kV Mesuji Ext.'),
('S107164', 'I.8513.19.07.0S4C.164.60', 'Pembangunan GI 150 kV GI Pakuan Ratu'),
('S107165', 'I.8513.19.07.0S4C.165.60', 'Pembangunan GI 150 kV GI Blambangan Umpu Ext.'),
('S107174', 'I.8513.19.07.0S4C.174.60', 'Pembangunan GITET 275/150 kV Kenten 1 (Paket GIPANG)'),
('S107175', 'I.8513.19.07.0S4C.175.60', 'Pembangunan GITET 275/150 kV Lampung 1 (Paket GILANG)'),
('S107176', 'I.8513.19.07.0S4C.176.60', 'Pembangunan GI 150 kV Bintuhan'),
('S107177', 'I.8513.19.07.0S4C.177.60', 'Pembangunan GI 150 kV Manna'),
('S107178', 'I.8513.19.07.0S4C.178.60', 'Pembangunan GI 150 kV Muko Muko'),
('S107179', 'I.8513.19.07.0S4C.179.60', 'Pembangunan GI 150 kV Arga Makmur'),
('S107180', 'I.8513.19.07.0S4C.180.60', 'Pembangunan GI 150 kV Pulai Baai'),
('S107181', 'I.8513.19.07.0S4C.181.60', 'Pembangunan GI 150 kV Dente Teladas'),
('S107182', 'I.8513.19.07.0S4C.182.60', 'Pembangunan GI 150 kV Seputih Banyak'),
('S107183', 'I.8513.19.07.0S4C.183.60', 'Pembangunan GI 150 kV Langka Pura'),
('S107184', 'I.8513.19.07.0S4C.184.60', 'Pembangunan GI 150 kV Pagelaran'),
('S107185', 'I.8513.19.07.0S4C.185.60', 'Pembangunan GI 150 kV Teluk Ratai'),
('J107166', 'I.8501.19.07.0J4C.166.60', 'Pekerjaan Jaminan Kualitas Barang QAQC GI Tarahan'),
('J107167', 'I.8501.19.07.0J4C.167.60', 'Pekerjaan Jaminan Kualitas Barang QAQC GI Tegineneng'),
('J107168', 'I.8501.19.07.0J4C.168.60', 'Pekerjaan Jaminan Kualitas Barang QAQC GI Seputih Banyak'),
('J107169', 'I.8501.19.07.0J4C.169.60', 'Pekerjaan Jaminan Kualitas Barang QAQC GI Betung'),
('J107170', 'I.8501.19.07.0J4C.170.60', 'Pekerjaan Jaminan Kualitas Barang QAQC GI Mariana'),
('J107171', 'I.8501.19.07.0J4C.171.60', 'Pekerjaan Jaminan Kualitas Barang QAQC GI Sungai Liat'),
('J107172', 'I.8501.19.07.0J4C.172.60', 'Pekerjaan Jaminan Kualitas Barang QAQC GI Air Anyir'),
('J107173', 'I.8501.19.07.0J4C.173.60', 'Pekerjaan Jaminan Kualitas Barang QAQC GI Pangkal Pinang/Kampak'),
('P107176', 'I.8501.18.07.4C00.176.60', 'PENGENDALIAN DAN ANALISA PROYEK SKTT New Tarahan - Gauntang - Teluk Belung'),
('P107177', 'I.8501.18.07.4C00.177.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Mulut Tambang Sumsel-1 600 MW'),
('P107178', 'I.8501.18.07.4C00.178.60', 'PENGENDALIAN DAN ANALISA PROYEK Interkoneksi 150 kV Sumatera Bangka (kabel laut)'),
('S10814', 'I.8511.19.07.0S4D.014.60', 'GI 150 kV Cilegon Baru II'),
('S10817', 'I.8511.19.07.0S4D.017.60', 'Pembangunan GITET 500/150 kV Lengkong'),
('S10820', 'I.8511.19.07.0S4D.020.60', 'Pembangunan GI 150 kV Sinar Sahabat'),
('S10822', 'I.8511.19.07.0S4D.022.60', 'SUTT 150 kV Malimping - Saketi'),
('S10823', 'I.8511.19.07.0S4D.023.60', 'SUTT 150 kV Malimping - Bayah'),
('S10824', 'I.8511.19.07.0S4D.024.60', 'SUTT 150 kV Rangkas Baru - Bunar Baru'),
('S10825', 'I.8511.19.07.0S4D.025.60', 'SUTET 500 kV Lengkong - Incomer (Balaraja - Gandul) & SUTT 150 kV Lengkong II - Incomer (Serpong - Lengkong)'),
('S10826', 'I.8511.19.07.0S4D.026.60', 'Ekstensi Bay GI 150 kV New Balaraja dan Ekstensi Bay GI 150 kV Millenium'),
('S10827', 'I.8511.19.07.0S4D.027.60', 'GI 150 kV Teluk Naga II'),
('S10828', 'I.8511.19.07.0S4D.028.60', 'GI 150 kV Sepatan'),
('S10829', 'I.8511.19.07.0S4D.029.60', 'Pembangunan GIS 150 kV Tigaraksa'),
('S10830', 'I.8511.19.07.0S4D.030.60', 'Pembangunan Ekstensi Bay GI 150 kV Tigaraksa'),
('S10836', 'I.8511.19.07.0S4D.036.60', 'IBRD Package 1 Lot 2 & Package 4 Lot 1 GI 150 kV Sepatan'),
('S10837', 'I.8511.19.07.0S4D.037.60', 'IBRD Package 1 Lot 2 & Package 4 Lot 1 GI 150 kV Millenium (Ext)'),
('S10838', 'I.8511.19.07.0S4D.038.60', 'Ext. Bay GI 150 kV Curug, Ext. Bay GI 150 kV Ciledug dan Modifikasi Bay GIS 150 kV Kembangan, GIS 150 kV Alam Sutera, GIS 150 kV Summaecon, GI Cikupa'),
('S10839', 'I.8511.19.07.0S4D.039.60', 'Pembangunan SUTT 150 kV Tangerang Baru III - PLTU Lontar'),
('S10840', 'I.8511.19.07.0S4D.040.60', 'Pembangunan Ext. GI 150 kV Sinar Sahabat dan SUTT Sinar Sahabat - Inc (Citra Habitat - Legok)'),
('S10841', 'I.8511.19.07.0S4D.041.60', 'Pembangunan GIS 150 kV Cikupa New'),
('S10842', 'I.8511.19.07.0S4D.042.60', 'Pembangunan GIS 150 kV Jatake II'),
('S10843', 'I.8511.19.07.0S4D.043.60', 'Pembangunan SUTT 150 kV Tangerang Baru II - Incomer (Balaraja - Suvarna - Sutera)'),
('S10844', 'I.8511.19.07.0S4D.044.60', 'Pembangunan SUTT 150 kV Tangerang Baru II - Tangerang Baru III'),
('S10845', 'I.8511.19.07.0S4D.045.60', 'Pembangunan SUTT 150 kV Teluk Naga II Incomer PLTU Lontar - Teluk Naga'),
('P10833', 'I.8501.18.07.4D00.033.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Cilegon - Bogor X Cibinong'),
('P10834', 'I.8501.18.07.4D00.034.60', 'PENGENDALIAN DAN ANALISA PROYEK GITET Duri Kosambi'),
('P10835', 'I.8501.18.07.4D00.035.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Cililitan - Gandul'),
('J10832', 'I.8501.19.07.0J4D.032.60', 'QA/QC GIS 150 kV Sumarecon'),
('S10972', 'I.8511.19.07.0S46.072.60', 'GITET 500 kV DEPOK III (Ext)'),
('S10973', 'I.8511.19.07.0S46.073.60', 'GITET New Balaraja 500kV (Ext)'),
('S10974', 'I.8511.19.07.0S46.074.60', 'GITET 500 kV PEDAN (Ext)'),
('S10975', 'I.8511.19.07.0S46.075.60', 'GITET 500 kV KRIAN (Ext)'),
('S10989', 'I.8511.19.07.0S46.089.60', 'GIS 500 kV Kembangan Ext '),
('S11017', 'I.8511.19.07.0S46.116.60', '150 kV UGC BOGOR KOTA-KEDUNG BADAK'),
('S11020', 'I.8511.19.07.0S46.119.60', 'UGC Kemang - Antasari'),
('S11043', 'I.8511.19.07.0S46.142.60', 'Package 8: 150 kV Gas Insullated Switchgear for Daan Mogot and Semanggi Barat'),
('S11046', 'I.8511.19.07.0S4E.145.60', 'GITET Muara Tawar'),
('S11050', 'I.8511.19.07.0S4E.149.60', 'Package 8: 150 kV UGC Karet - Semanggi Barat'),
('S11051', 'I.8511.19.07.0S4E.150.60', 'PMC Loan IBRD 8280-ID IPTD-2 GIS Penggilingan Ext'),
('S11054', 'I.8511.19.07.0S4E.153.60', 'PMC Loan IBRD 8280-ID IPTD-2 GI 150 kV Serang Ext'),
('S11057', 'I.8511.19.02.0S4E.156.60', 'Jasa Supervisi Konstruksi & QAQC untuk Proyek PLTU Lontar Extension (1 x 315 MW)'),
('S11059', 'I.8511.19.07.0S4E.158.60', 'Project management Consultant (PMC) & Js. Sup. Kons. Scattered Transmission and Substation Export Credit Pack. 3 150 kV UGC for Kebun Sirih Gambir Lama, New Senayan Incomer, and Semanggi Barat-Semanggi Timur'),
('S11060', 'I.8511.19.06.0S4E.159.60', 'JASA SUPERVISI KONSTRUKSI DAN QA/QC UNTUK PEKERJAAN PLTGU JAWA 2 TANJUNG PRIOK (1 X 800 MW)'),
('S11061', 'I.8511.19.07.0S4E.160.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi IBRD Loan: 7940-ID (Saving Fund Project) Package 1 Lot 2 dan Package 2 Lot 2 - 150 kV Cawang Conventional Substation (Ext)'),
('S11062', 'I.8511.19.07.0S4E.161.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi IBRD Loan: 7940-ID (Saving Fund Project) Package 1 Lot 2 dan Package 2 Lot 2 - 150 kV Kandang Sapi Substation (GIS) (Ext)'),
('S11063', 'I.8511.19.07.0S4E.162.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi IBRD Loan: 7940-ID (Saving Fund Project) Package 1 Lot 2 dan Package 2 Lot 2 - 150 kV Depok/Rawadenok Conventional Substation (Ext)'),
('S11064', 'I.8511.19.07.0S4E.163.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi IBRD Loan: 7940-ID (Saving Fund Project) Package 1 Lot 2 dan Package 2 Lot 2 - 150 kV Menes Conventional Substation (Ext)'),
('S11065', 'I.8511.19.07.0S4E.164.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi IBRD Loan: 7940-ID (Saving Fund Project) Package 1 Lot 2 dan Package 2 Lot 2 - 150 kV Tigaraksa Conventional Substation (Ext)'),
('S11066', 'I.8511.19.07.0S4E.165.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi IBRD Loan: 7940-ID (Saving Fund Project) Package 1 Lot 2 dan Package 2 Lot 2 - 150 kV Cileduk Conventional Substation (Ext)'),
('S11067', 'I.8511.19.07.0S4E.166.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi IBRD Loan: 7940-ID (Saving Fund Project) Package 1 Lot 2 dan Package 2 Lot 2 - 150 kV Cileduk II/Alam Sutra (GIS) Substation (Ext)'),
('S11068', 'I.8511.19.07.0S4E.167.60', 'Pekerjaan Project Management Consultant (PMC) dan Jasa Manajemen Konstruksi IBRD Loan: 7940-ID (Saving Fund Project) Package 1 Lot 2 dan Package 2 Lot 2 - 150 kV New Balaraja (GIS) Substation (Ext)'),
('S11069', 'I.8511.19.07.0S4E.168.60', 'Pekerjaan Jasa Supervisi Kontruksi Pembangunan SKTT 150 kV Priok - Pelindo Sirkit 2'),
('S11070', 'I.8511.19.07.0S4E.169.60', 'Pekerjaan Jasa Supervisi Kontruksi Pembangunan SKTT 150 kV JGC - Kandang Sapi'),
('S11071', 'I.8511.19.07.0S4E.170.60', 'Pekerjaan Jasa Supervisi Kontruksi Pembangunan SKTT 150 kV Bekasi II/Sumarecon - GITET Bekasi'),
('S11072', 'I.8511.19.07.0S4E.171.60', 'Pekerjaan Jasa Supervisi Kontruksi Pembangunan SKTT 150 kV Marunda - Kalibaru'),
('S11073', 'I.8511.19.07.0S4E.172.60', 'Pekerjaan Jasa Supervisi Kontruksi Pembangunan GISTET 500 kV Tambun II'),
('S11074', 'I.8511.19.07.0S4E.208.60', 'Pekerjaan Jasa Supervisi Kontruksi Pembangunan GIS 150 kV Tambun'),
('S11075', 'I.8511.19.07.0S4E.174.60', 'Pembangunan GI 150 kV Pasar Kemis II'),
('S11076', 'I.8511.19.07.0S4E.175.60', '500 kV Transmission Lines Duri Kosambi - Kembangan'),
('S11077', 'I.8511.19.07.0S4E.176.60', 'Pengadaan dan Pemasangan IBT 500/150 kV Tanjung Priok '),
('S11078', 'I.8511.19.07.0S4E.177.60', 'SKTT 150 kV Priok Timur - Ancol '),
('S11079', 'I.8511.19.07.0S4E.178.60', 'Pembangunan SKTT 150 kV, SKTET 500 kV, SUTET 500 Suralaya Lama - Suralaya Baru'),
('S11080', 'I.8511.19.07.0S4E.179.60', 'Pembangunan GITET 500 kV Suralaya Baru (1 Dia 3 CB)'),
('S11081', 'I.8511.19.07.0S4E.180.60', 'SUTT 150 kV Muara Tawar Incomer'),
('S11085', 'I.8511.19.07.0S4E.184.60', 'GIS 150 kV Bekasi II (Sumarecon)'),
('S11086', 'I.8511.19.07.0S4E.185.60', 'GIS 150 kV Penggilingan II'),
('S11087', 'I.8511.19.07.0S4E.186.60', 'GIS 150 kV Plumpang II'),
('S11088', 'I.8511.19.07.0S4E.187.60', 'GIS 150 kV Pulogadung II'),
('S11089', 'I.8511.19.07.0S4E.188.60', 'IBRD 8280-ID Grup 2 Package 1 Lot 1 GIS 15 kV Gambir Lama II (New) & Package 4 Lot 1 GIS 150 kV Gambir Lama (2 x 60 MVA)'),
('S11090', 'I.8511.19.07.0S4E.189.60', 'IBRD 8280-ID Grup 2 Package 1 Lot 1 GIS 150 kV Poncol Baru II (New) & Package 4 Lot 1 GIS 150 kV Poncol Baru (2 x 60 MVA)'),
('S11091', 'I.8511.19.07.0S4E.190.60', 'IBRD 8280-ID Grup 2 Package 1 Lot 1 GIS 150 kV Antasari (Ext) & Package 4 Lot 1 GIS 150 kV Antasari (1 x 60 MVA)'),
('S11092', 'I.8511.19.07.0S4E.191.60', 'IBRD 8280-ID Grup 2 Package 1 Lot 1 GIS 150 kV Salira Indah (Ext)'),
('S11093', 'I.8511.19.07.0S4E.192.60', NULL),
('S11094', 'I.8511.19.07.0S4E.193.60', 'IBRD 8280-ID Grup 2 Package 1 Lot 1 GIS 150 kV Dukuh Atas (Ext)'),
('S11095', 'I.8511.19.07.0S4E.194.60', 'GI 150 kV Sepatan II'),
('S11096', 'I.8511.19.07.0S4E.195.60', 'GIS 150 kV Grogol II'),
('S11097', 'I.8511.19.07.0S4E.196.60', 'GIS 150 kV Tomang II'),
('S11098', 'I.8511.19.07.0S4E.197.60', 'GITET 150 kV Suralaya Lama'),
('S11107', 'I.8511.19.07.0S4E.206.60', 'SKTT 150 kV CSW II - Inc Duren Tiga'),
('S11109', 'I.8511.19.07.0S4E.209.60', 'GIS 150 kV Senayan Baru II'),
('S11110', 'I.8511.19.07.0S4E.210.60', 'GIS 150 kV PLTMG Senayan'),
('S11111', 'I.8511.19.07.0S4E.211.60', 'GIS 150 kV Kebon Sirih II'),
('S11112', 'I.8511.19.07.0S4E.212.60', 'GIS 150 kV Gandaria II/Kebayoran'),
('S11113', 'I.8511.19.07.0S4E.213.60', 'GIS 150 kV Kemayoran II'),
('S11114', 'I.8511.19.07.0S4E.214.60', 'Ext. 2 LB GI 150 kV Jatirangon II - Cibubur'),
('S11115', 'I.8511.19.07.0S4E.215.60', 'Ext. 4 LB GIS 150 kV Kandang Sapi (Ext)'),
('S11116', 'I.8511.19.07.0S4E.216.60', 'SUTT 150 kV Duren Tiga II/Ragunan (GIS) - Depok II'),
('S11117', 'I.8511.19.07.0S4E.217.60', 'SUTT 150 kV Duren Tiga II/Ragunan (GIS) - Cawang Lama'),
('S11118', 'I.8511.19.07.0S4E.218.60', 'SKTT 150 kV Penggilingan II - Penggilinggan'),
('J11108', 'I.8501.19.02.0J4E.207.60', 'PLTU Lontar Extention (1 x 315 MW)'),
('P11082', 'I.8501.17.06.4E00.181.60', 'PLTGU MUARA KARANG 1 x 500 MW'),
('P11083', 'I.8501.17.02.4E00.182.60', 'PLTU JAWA-2 800 MW'),
('P11084', 'I.8501.17.02.4E00.183.60', 'PLTU LONTAR EXP 1 x 315 MW'),
('P11099', 'I.8501.18.07.4E00.198.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Kembangan - Duri Kosambi - Muara Karang - Priok - Muara Tawar'),
('P11100', 'I.8501.18.07.4E00.199.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Muara Tawar - Bekasi'),
('P11101', 'I.8501.18.04.4E00.200.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTDG/MG Senayan (100 MW)'),
('P11102', 'I.8501.18.07.4E00.201.60', 'PENGENDALIAN DAN ANALISA PROYEK GITET Muara Karang'),
('P11103', 'I.8501.18.07.4E00.202.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Suralaya Lama - Suralaya Baru'),
('P11104', 'I.8501.18.06.4E00.203.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Muara Karang Peaker (500 MW}'),
('P11105', 'I.8501.18.06.4E00.204.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Jawa-2 (800 MW)'),
('P11106', 'I.8501.18.02.4E00.205.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Lontar Extension (1 X 315 MW)'),
('S11203', 'I.8511.19.01.0S24.003.60', 'Penyediaan Tenaga Engineer untuk Supervisi Konstruksi Proyek PLTU Jatigede (2 x 55 MW)'),
('S11210', 'I.8511.19.07.0S4F.010.60', 'GITET 500 kV PLTU Indramayu'),
('P11204', 'I.8501.17.02.4F00.004.60', 'PLTU INDRAMAYU-4 1 x 1000 MW'),
('P11205', 'I.8501.18.01.4F00.005.60', 'PLTA Jatigede (FTP2) (2x55 MW)'),
('P11206', 'I.8501.18.02.4F00.006.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Indramayu Baru (1x1.000 MW)'),
('P11207', 'I.8501.18.01.4F00.007.60', 'PLTA Pump Storage Upper Cisokan - Jawa Barat (4 x 260 MW)'),
('P11208', 'I.8501.18.01.4F00.008.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Jatigede (FTP2) (2x55 MW)'),
('P11209', 'I.8501.18.01.4F00.009.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Pump Storage Upper Cisokan - Jawa Barat (4 x 260 MW)'),
('S11326', 'I.8512.19.07.0S47.026.60', 'SUTT Surabaya Selatan-Kalisari KE3 Lot11'),
('S11327', 'I.8512.19.07.0S47.027.60', 'SUTT Kediri-Tulungagung-Wlingi              '),
('S11340', 'I.8512.19.07.0S47.040.60', 'GIS 150 kV Bandara Pesanggaran'),
('S11381', 'I.8512.19.07.0S4G.081.60', 'PMC IBRD IPTD II 150 kV Surabaya Selatan S/S (Ext)'),
('S11387', 'I.8512.19.07.0S4G.085.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Payangan (Uprate)'),
('S11388', 'I.8512.19.07.0S4G.086.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Negara (Ext)'),
('S11389', 'I.8512.19.07.0S4G.087.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Cerme (Ext)'),
('S11390', 'I.8512.19.07.0S4G.088.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Surabaya Selatan/ Wonorejo (Ext)'),
('S11391', 'I.8512.19.07.0S4G.089.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Manyar (Ext)'),
('S11392', 'I.8512.19.07.0S4G.090.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Altaprima (Uprate)'),
('S11393', 'I.8512.19.07.0S4G.091.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GIS 150 kV Wonokromo (Ext)'),
('S11394', 'I.8512.19.07.0S4G.092.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Sampang (Uprate)'),
('S11395', 'I.8512.19.07.0S4G.093.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Banaran (Ext)'),
('S11396', 'I.8512.19.07.0S4G.094.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Babat (Ext)'),
('S11397', 'I.8512.19.07.0S4G.095.60', 'ADB Loan No. 3083/8276-INO (Komponen 7) - GI 150 kV Lumajang (Ext)'),
('S11398', 'I.8512.19.07.0S4G.096.60', '150/20 kV PLTU Pacitan/Sudimoro  Substation (GIS) (Uprating)'),
('S11399', 'I.8512.19.07.0S4G.097.60', '150/20 kV Jember Substation (Uprating)'),
('S11400', 'I.8512.19.07.0S4G.098.60', '150/20 kV Sengkaling Substation (Uprating)'),
('S11401', 'I.8512.19.07.0S4G.099.60', '150/20 kV Sekarputih Substation (Extension)'),
('S11402', 'I.8512.19.07.0S4G.100.60', '150/20 kV Ngoro Substation (Extension)'),
('S11403', 'I.8512.19.07.0S4G.101.60', '150/20 kV Kertosono Substation (Extension)'),
('S11404', 'I.8512.19.07.0S4G.102.60', '150/20 kV Tuban Substation (Uprating)'),
('S11405', 'I.8512.19.07.0S4G.103.60', '150/20 kV Undaan Substation (GIS) (Extension)'),
('S11406', 'I.8512.19.07.0S4G.104.60', 'Pembangunan SKTT 150 kV Pesanggaran TX - Nusa Dua'),
('S11408', 'I.8512.19.07.0S4G.106.60', 'GIS 150 kV Buduran'),
('S11409', 'I.8512.19.07.0S4G.107.60', 'GIS 150 kV Kedinding'),
('S11410', 'I.8512.19.07.0S4G.108.60', 'GI 150 kV Guluk Guluk & Incomer'),
('S11411', 'I.8512.19.07.0S4G.109.60', 'SUTET 500 kV Grati - TX Kalanganyar'),
('S11413', 'I.8512.19.07.0S4G.111.60', 'Rekonduktoring SUTT 150 kV Gianyar - Sanur'),
('S11414', 'I.8512.19.07.0S4G.112.60', 'GI 150 kV Jaya Kertas (Ext)'),
('S11415', 'I.8512.19.07.0S4G.113.60', 'GI 150 kV New Jombang (Ext)'),
('S11416', 'I.8512.19.07.0S4G.114.60', 'GI Krian (Ext)'),
('S11417', 'I.8512.19.07.0S4G.115.60', 'GI 150 kV Pakis/Malang Timur (Uprating)'),
('S11418', 'I.8512.19.07.0S4G.116.60', 'GI 150 kV Pandaan Baru'),
('S11419', 'I.8511.19.07.0S4G.117.60', 'Package 2 GIS Cibabat II'),
('S11420', 'I.8511.19.07.0S4G.118.60', 'Package 2 GIS Braga'),
('S11421', 'I.8511.19.07.0S4G.119.60', 'Package 2 GIS Dayeuh Kolot (GIS Bogor Kota)'),
('S11423', 'I.8512.19.07.0S4G.121.60', 'Package 2 GIS New Gunung Sari'),
('S11424', 'I.8512.19.07.0S4G.122.60', 'Package 2 GIS New Buduran'),
('S11425', 'I.8512.19.07.0S4G.123.60', 'Package 2 UGC 150 kV Buduran - Sedati'),
('S11426', 'I.8511.19.07.0S4G.124.60', 'Package 3 GI Kemayoran'),
('S11427', 'I.8511.19.07.0S4G.125.60', 'Package 3 GI Karang Nunggal'),
('S11428', 'I.8511.19.07.0S4G.126.60', 'Package 3 GI Tasikmalaya'),
('S11429', 'I.8511.19.07.0S4G.127.60', 'Package 3 GI Cigalereng'),
('S11430', 'I.8511.19.07.0S4G.128.60', 'Package 3 GI Mandirancan'),
('S11431', 'I.8511.19.07.0S4G.129.60', 'Package 3 GIS Bogor (GI Bogor Kota)'),
('S11432', 'I.8511.19.07.0S4G.130.60', 'Package 3 GI 150 kV Cikijing'),
('S11433', 'I.8511.19.07.0S4G.131.60', 'Package 3 GI Cikedung'),
('S11434', 'I.8511.19.07.0S4G.132.60', 'Package 3 GI Bekasi Utara'),
('S11435', 'I.8512.19.07.0S4G.133.60', 'Package 3 GI 150 kV Sambikerep'),
('S11436', 'I.8512.19.07.0S4G.134.60', 'Package 3 GI 150 kV Bambe'),
('S11438', 'I.8512.19.07.0S4G.136.60', 'Uprating 70 kV ke 150 kV Bangil - New Porong'),
('S11439', 'I.8512.19.07.0S4G.137.60', 'GI 150 kV Sekarputih Extension'),
('S11440', 'I.8512.19.07.0S4G.138.60', 'GI 150 kV Kertosono Extension'),
('S11441', 'I.8512.19.07.0S4G.139.60', 'Rekonfigurasi Transmisi Waru dan Gunungsari Incomer'),
('S11442', 'I.8512.19.07.0S4G.140.60', 'GIS 150 kV Pecatu'),
('S11443', 'I.8512.19.07.0S4G.141.60', 'GIS 150 kV Tanah Lot & Incomer'),
('S11444', 'I.8512.19.07.0S4G.142.60', 'SKTT 150 kV GIS Kedinding - Tx Bangkalan'),
('S11445', 'I.8512.19.07.0S4G.143.60', 'GIS 150 kV Bandara Ext'),
('S11446', 'I.8512.19.07.0S4G.144.60', 'Ext Outdoor GIS di GI 150 kV Bumi Cokro'),
('S11447', 'I.8512.19.07.0S4G.145.60', 'Ext Outdoor GIS di GI Nusa Dua'),
('S11449', 'I.8512.19.07.0S4G.147.60', 'SKTT 150 kV Pecatu (Nusa Dua II) - Bandara'),
('S11450', 'I.8512.19.07.0S4G.148.60', 'SKKT 150 kV Bumi Cokro - Pandaan '),
('S11451', 'I.8512.19.07.0S4G.149.60', 'Rekonduktoring SUTT 150 kV Probolinggo - Kraksaan'),
('S11452', 'I.8512.19.07.0S4G.150.60', 'Pembangunan GIS 150 kV Blimbing Baru'),
('S11453', 'I.8512.19.07.0S4G.151.60', 'Pemasangan GIS dan Trafo 150 kV Blimbing Baru'),
('S11454', 'I.8512.19.07.0S4G.152.60', 'Pembangunan GIS 150 kV Gunungsari'),
('S11455', 'I.8512.19.07.0S4G.153.60', 'Pemasangan GIS 150 kV Gunungsari'),
('S11456', 'I.8512.19.07.0S4G.154.60', 'Pemasangan GIS 150 kV Gembong'),
('S11457', 'I.8512.19.07.0S4G.155.60', 'Pembangunan SKTT Pecatu (Nusa Dua II) - Nusa Dua'),
('S11458', 'I.8512.19.07.0S4G.156.60', 'Pemasangan Trafo GIS 150 kV Pecatu'),
('S11459', 'I.8512.19.07.0S4G.157.60', 'Pemasangan Trafo GIS 150 kV Tanah Lot & Incomer'),
('S11465', 'I.8512.19.07.0S4G.163.60', 'GI 150 kV Arjasa'),
('S11466', 'I.8512.19.07.0S4G.164.60', 'Uprating LB GI 150 kV Kraksaan'),
('S11467', 'I.8512.19.07.0S4G.165.60', 'Uprating LB GI 150 kV Probolinggo'),
('S11468', 'I.8512.19.07.0S4G.166.60', 'GI 150 kV Puger'),
('S11469', 'I.8512.19.07.0S4G.167.60', 'Uprating SUTT 70 kV Ke 150 kV Blimbing Baru - Bangil'),
('S11470', 'I.8512.19.07.0S4G.168.60', 'Rekonduktoring SUTT 150 kV Kapal - Gianyar'),
('S11471', 'I.8512.19.07.0S4G.169.60', 'Rekonduktoring SUTT 150 kV Paiton - Kraksaan'),
('S11489', 'I.8512.19.07.0S4G.187.60', 'SKTT 150 kV Krian - Karangpilang'),
('S11490', 'I.8512.19.07.0S4G.188.60', 'Uprating SUTT 70 kV ke 150 kV GI caruban Baru - Manisrejo'),
('S11491', 'I.8512.19.07.0S4G.189.60', 'SUTT 150 kV Bangkalan - Tx T.31 - T.35'),
('S11492', 'I.8512.19.07.0S4G.190.60', 'Extension GI 150 kV Paciran'),
('S11493', 'I.8512.19.07.0S4G.191.60', 'Extension GI 150 kV Tuban'),
('S11494', 'I.8512.19.07.0S4G.192.60', 'Extension GI 150 kV Manyar'),
('J11472', 'I.8501.19.07.0J4G.170.60', 'GIS 150 kV Pecatu - JKB'),
('J11473', 'I.8501.19.07.0J4G.171.60', 'GIS 150 kV Bumi Cokro dan Nusa Dua  - JKB'),
('J11474', 'I.8501.19.07.0J4G.172.60', 'GIS 150 kV Blimbing Baru - JKB'),
('J11475', 'I.8501.19.07.0J4G.173.60', 'GIS 150 kV Gunungsari - JKB'),
('J11476', 'I.8501.19.07.0J4G.174.60', 'GI 150 kV Caruban Baru dan Manisrejo Ext - JKB'),
('J11477', 'I.8501.19.07.0J4G.175.60', 'GI 150 kV Arjasa, Uprating Kraksaan dan Probolinggo - JKB'),
('J11478', 'I.8501.19.07.0J4G.176.60', 'GI 150 kV Puger - JKB'),
('J11479', 'I.8501.19.07.0J4G.177.60', 'GI 150 kV Pacitan Ext, Tuban Ext, Manyar Ext - JKB'),
('J11480', 'I.8501.19.07.0J4G.178.60', 'Uprating 70 kV ke 150 kV Bangil-New Porong - JKB'),
('J11481', 'I.8501.19.07.0J4G.179.60', 'SUTET 500 kV Grati-Tx Kalanganyar - JKB'),
('J11482', 'I.8501.19.07.0J4G.180.60', 'SUTT-SKTT PLTU Gresik-Wilmar - JKB'),
('J11483', 'I.8501.19.07.0J4G.181.60', 'SUTT 150 kV Rekonduktoring Probolinggo-Kraksan - JKB'),
('J11484', 'I.8501.19.07.0J4G.182.60', 'SUTT 150 kV Jatigendong-Ngimbang - JKB');
INSERT INTO `daftar_wbs` (`kode_lokasi`, `kode_wbs`, `nama_project_wbs`) VALUES
('J11485', 'I.8501.19.07.0J4G.183.60', 'SUTT Uprating 70 kV ke 150 kV Caruban Baru-Manisrejo dan Bangkalan-Tx T31-T35 - JKB'),
('J11486', 'I.8501.19.07.0J4G.184.60', 'SUTT 150 kV Kapal-Gianyar - JKB'),
('J11487', 'I.8501.19.07.0J4G.185.60', 'SUTT 150 kV Paiton-Kraksaan - JKB'),
('J11488', 'I.8501.19.07.0J4G.186.60', 'KHS SKTT UIP JBTB I - JKB'),
('P11460', 'I.8501.18.07.4G00.158.60', 'PENGENDALIAN DAN ANALISA PROYEK GITET Surabaya Selatan'),
('P11461', 'I.8501.18.07.4G00.159.60', 'PENGENDALIAN DAN ANALISA PROYEK GITET Bangil'),
('P11462', 'I.8501.18.07.4G00.160.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Grati-Tx. Kalang Anyar-Surabaya Selatan'),
('P11463', 'I.8501.18.07.4G00.161.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Paiton - Watudodol'),
('P11464', 'I.8501.18.07.4G00.162.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Gilimanuk - negara - antosari'),
('S11503', 'I.8511.19.02.0S4H.003.60', 'PLTU CILACAP'),
('S11517', 'I.8512.19.19.0S4H.017.60', 'Pembangunan Gedung Rusun & Barak TNI Kodam III/Siliwangi '),
('P11515', 'I.8501.17.02.4H00.015.60', 'PLTU GRATI 2 x 300 MW'),
('P11519', 'I.8501.18.06.4H00.019.60', 'PLTGU Madura 400 MW'),
('P11520', 'I.8501.18.06.4H00.020.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Madura 400 MW'),
('S11601', 'I.8512.19.02.0S40.001.60', 'PLTU Pulang Pisau'),
('S11611', 'I.8512.19.02.0S4I.011.60', 'PLTU Kotabaru'),
('S11613', 'I.8512.19.07.0S4I.013.60', ' GI 150 kV Batulicin (Ext)'),
('S11614', 'I.8512.19.07.0S4I.014.60', 'GI 150 kV Trisakti (Ext)'),
('S11615', 'I.8512.19.07.0S4I.015.60', 'GI 150 kV Mantuil (Ext)'),
('S11618', 'I.8512.19.02.0S4I.018.60', 'PLTU Kalselteng 2 (Asam-asam Unit 5 & 6)'),
('S11621', 'I.8512.19.07.0S4I.021.60', 'SUTT 150 kV Muara Teweh - Puruk Cahu'),
('S11622', 'I.8512.19.07.0S4I.022.60', 'SUTT 150 kV Puruk Cahu - Kuala Kurun'),
('S11623', 'I.8512.19.04.0S4I.023.60', 'PLTMG Bangkanai Tahap 2 (140 MW)'),
('S11624', 'I.8512.19.07.0S4I.024.60', 'SUTT 150 kV GI Kasongan - GI Kuala Kurun'),
('S11625', 'I.8512.19.07.0S4I.025.60', 'SUTT 150 kV Batulicin - Landing Point Batulicin dan Landing Point - Pulau Laut - Kotabaru'),
('S11626', 'I.8512.19.07.0S4I.026.60', 'SUTT 150 kV Sampit - Pangkalan Bun '),
('S11627', 'I.8512.19.07.0S4I.027.60', 'Pembangunan Kabel Laut 150 kV Landing Point Batulicin - Landing Point Pulau Laut'),
('S11628', 'I.8512.19.07.0S4I.028.60', 'SUTT 150 kV GI Kasongan - GI Kuala Kurun Sec. 2'),
('S11649', 'I.8512.19.07.0S4I.049.60', 'GI 150 kV Amuntai Ext'),
('S11650', 'I.8512.19.07.0S4I.050.60', 'GI 150 kV Barikin Ext'),
('S11651', 'I.8512.19.07.0S4I.051.60', 'GI 150 kV Pelaihari Ext'),
('S11652', 'I.8512.19.07.0S4I.052.60', 'GI 150 kV Sampit Ext'),
('S11653', 'I.8512.19.07.0S4I.053.60', 'SUTT 150 kV Incomer Double Ph (Muara Teweh - Puruk Cahu)'),
('S11654', 'I.8512.19.07.0S4I.054.60', 'SUTT 150 kV GI Kasongan - GI Kuala Kurun Sec 3'),
('S11655', 'I.8512.19.07.0S4I.055.60', 'SUTT 150 kV GI Kasongan - GI Kuala Kurun Sec 4'),
('J11629', 'I.8501.19.07.0J4I.029.60', 'QAQC GI PLTU Sampit'),
('J11630', 'I.8501.19.07.0J4I.030.60', 'QAQC GI Parenggean'),
('J11631', 'I.8501.19.07.0J4I.031.60', 'QAQC GIS Ulin'),
('J11632', 'I.8501.19.07.0J4I.032.60', 'QAQC GI Sei Tabuk'),
('J11633', 'I.8501.19.07.0J4I.033.60', 'QAQC GI Mantuil'),
('J11634', 'I.8501.19.07.0J4I.034.60', 'QAQC Marabahan'),
('J11635', 'I.8501.19.07.0J4I.035.60', 'QAQC Kayu Tangi (Arah Sei Tabuk)'),
('J11636', 'I.8501.19.07.0J4I.036.60', 'QAQC Seberang Barito'),
('J11637', 'I.8501.19.07.0J4I.037.60', 'QAQC GI Muara Teweh'),
('J11638', 'I.8501.19.07.0J4I.038.60', 'QAQC SUTT Kasongan - Kurun Sec. 1'),
('J11639', 'I.8501.19.07.0J4I.039.60', 'QAQC SUTT Kasongan - Kurun Sec. 2'),
('J11640', 'I.8501.19.07.0J4I.040.60', 'QAQC GI Barikin, GI Amuntai, GI Pelaihari, GI Sampit (PT CG Power System)'),
('J11641', 'I.8501.19.07.0J4I.041.60', 'QAQC SUTT Kayutangi - Sei Tabuk Sec. 1'),
('J11642', 'I.8501.19.07.0J4I.042.60', 'QAQC GI Paringin'),
('J11643', 'I.8501.19.07.0J4I.043.60', 'QAQC GI Barikin, GI Amuntai, GI Pelaihari, GI Sampit (PT ABB Consortium)'),
('J11650', 'I.8501.19.02.0J4I.050.60', 'PLTU Pulang Pisau (2x60 MW)'),
('J11651', 'I.8501.19.02.0J4I.051.60', 'PLTU Kalselteng 2 (Asam-asam #5&#6)'),
('J11652', 'I.8501.19.04.0J4I.052.60', 'PLTMG Bangkanai Tahap 2 (140 MW)'),
('P11644', 'I.8501.18.02.4I00.044.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Kalselteng 2 (2x100 MW)'),
('P11645', 'I.8501.18.04.4I00.045.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG Bangkanai (FTP2) 140 MW'),
('P11646', 'I.8501.18.02.4I00.046.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sampit (2x25 MW)'),
('P11647', 'I.8501.18.07.4I00.047.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Muara Teweh-Puruk Cahu-Kuala Kurun'),
('P11648', 'I.8501.18.07.4I00.048.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT upr TL 150 kV Palangkaraya -Selat -Seberang Barito'),
('P11649', 'I.8501.18.04.4I00.049.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG/GU/MGU Kalsel (200 MW)'),
('S11720', 'I.8512.19.07.0S4J.020.60', 'SUTT 150 kV Redep - Tanjung Selor'),
('S11744', 'I.8512.19.07.0S4J.044.60', 'Pekerjaan Supervisi Konstruksi SUTT 150 kV Tidang Pale - Malinau Sec 1'),
('S11745', 'I.8512.19.07.0S4J.045.60', 'Pekerjaan Supervisi Konstruksi SUTT 150 kV Tidang Pale - Malinau Sec 2'),
('S11746', 'I.8512.19.07.0S4J.046.60', 'Pekerjaan Supervisi Konstruksi SUTT 150 kV GI New Samarinda - GI Sambera'),
('S11747', 'I.8512.19.07.0S4J.047.60', 'Pekerjaan Supervisi Konstruksi SUTT 150 kV GI Embalut - GI New Samarinda'),
('J11731', 'I.8501.19.07.0J4J.031.60', 'QAQC Pembangunan Ext 2LB (Arah New Balikpapan) GI 150 kV Kariangau'),
('J11732', 'I.8501.19.07.0J4J.032.60', 'QAQC Pembangunan SUTT 150 kV Tanjung Redep - Tanjung Selor Sec 1'),
('J11733', 'I.8501.19.07.0J4J.033.60', 'QAQC Pembangunan SUTT 150 kV Tanjung Redep - Tanjung Selor Sec 2'),
('J11734', 'I.8501.19.07.0J4J.034.60', 'QAQC Pembangunan SUTTT 150 kV Tidang Pale - Malinau Sec 1'),
('J11735', 'I.8501.19.07.0J4J.035.60', 'QAQC Pembangunan SUTTT 150 kV Tidang Pale - Malinau Sec 2'),
('J11736', 'I.8501.19.07.0J4J.036.60', 'QAQC Pembangunan SUTT 150 kV Embalut - New Samarinda'),
('J11737', 'I.8501.19.07.0J4J.037.60', 'QAQC Pembangunan SUTT 150 kV New Samarinda - Sambera'),
('J11742', 'I.8501.19.04.0J4J.042.60', 'Pemeriksaan Jaminan Kualitas Barang PLTMG Nunukan 2 (10 MW)'),
('J11743', 'I.8501.19.02.0J4J.043.60', 'Pemeriksaan Jaminan Kualitas Barang PLTU Tanjung Selor (2 x 7 MW)'),
('P11738', 'I.8501.18.07.4J00.038.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Talisayan - Maloi- Sanggatta-Muara Wahau-Tj Redep-Tj Selor-Tidang Pale-Malinau'),
('P11739', 'I.8501.18.07.4J00.039.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG Kaltim Peaker 2 100 MW'),
('P11740', 'I.8501.18.07.4J00.040.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Bangkanai - Melak - Kota Bangun'),
('P11741', 'I.8501.18.07.4J00.041.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Embalut - New Samarinda -Sambera'),
('S11808', 'I.8512.19.07.0S4K.050.60', 'SUTT 70 kV Sistem Flores (Ende-Ropa-Maumere)'),
('S11820', 'I.8512.19.07.0S4K.051.60', 'SUTT 150 kV Ampenan-Tanjung'),
('S11826', 'I.8512.19.07.0S4K.053.60', 'GI 70 kV Taliwang'),
('S11827', 'I.8512.19.07.0S4K.054.60', 'GI 70 kV Labuhan/Sumbawa'),
('S11828', 'I.8512.19.07.0S4K.055.60', 'GI 150 kV Tanjung'),
('S11837', 'I.8512.19.07.0S4K.059.60', 'SUTT 150 kV PLTU Lombok FTP 2 - GI Bayan'),
('S11838', 'I.8512.19.07.0S4K.060.60', 'SUTT GI 150 kV Bayan - GI Tanjung'),
('S11846', 'I.8512.19.07.0S4K.068.60', 'Pekerjaan Inventarisasi Jalur ROW SUTT 150 kV Bima - Sape'),
('S11847', 'I.8512.19.02.0S4K.069.60', 'PLTU Lombok GECC Power Plant (Peaker) 130 - 150 MW'),
('S11848', 'I.8512.19.07.0S4K.070.60', 'GI 70 kV Bima Ext dan GI Bonto Ext'),
('S11849', 'I.8512.19.07.0S4K.071.60', 'GI IBT 150/70 kV Bolok'),
('S11850', 'I.8512.19.07.0S4K.072.60', 'SUTT 150 kV PLTMG Maumere Peaker - GI Maumere IBT'),
('S11851', 'I.8512.19.07.0S4K.073.60', 'SUTT 150 kV GI Mataram - Single Phi (Ampenan - Tanjung)'),
('S11852', 'I.8512.19.04.0S4K.074.60', 'PLTMG Alor 10 MW'),
('S11853', 'I.8512.19.04.0S4K.075.60', 'PLTMG Waingapu 10 MW'),
('S11855', 'I.8512.19.07.0S4K.077.60', 'ROW SUTT 150 kV Ampenan - Tanjung (35 Span)'),
('S11856', 'I.8512.19.07.0S4K.078.60', 'GI 150 kV Paokmotong Extention Unit 2'),
('S11857', 'I.8512.19.02.0S4K.079.60', 'PLTU Lombok FTP 2 (2 X 50 MW)'),
('S11858', 'I.8512.19.07.0S4K.080.60', 'Pekerjaan Supervisi Konstruksi dan QAQC Pembangunan GI 150 kV Mataram'),
('S11859', 'I.8512.19.07.0S4K.081.60', 'Pekerjaan Supervisi Konstruksi dan QAQC Pembangunan SUTT 150 kV Kupang Peaker (Panaf) - GI Bolok'),
('S11860', 'I.8512.19.07.0S4K.082.60', 'Pemutakhiran Data Inventarisasi Jalur ROW SUTT 70 kV Sumbawa - Tano - Taliwang Sec. II 56 Span)'),
('S11875', 'I.8512.19.07.0S4K.097.60', 'GI 150 kV Sengkol Ext'),
('J11876', 'I.8501.19.04.0J4K.098.60', 'PLTMG Waingapu (10 MW)'),
('J11877', 'I.8501.19.04.0J4K.099.60', 'PLTMG Alor (10 MW)'),
('J11878', 'I.8501.19.02.0J4K.100.60', 'PLTU Lombok FTP 2 (2 x 50 MW)'),
('J11879', 'I.8501.19.07.0J4K.101.60', 'QAQC GI 150 kV Sengkol Ext'),
('J11880', 'I.8501.19.07.0J4K.102.60', 'QAQC GI 150 kV Woha Ext'),
('J11881', 'I.8501.19.07.0J4K.103.60', 'QAQC GI 150 kV Labuhan Ext'),
('J11882', 'I.8501.19.07.0J4K.104.60', 'QAQC GI Switching Mataram'),
('J11883', 'I.8501.19.07.0J4K.105.60', 'QAQC GI Sekotong'),
('J11884', 'I.8501.19.07.0J4K.106.60', 'QAQC GI Jeranjang Ext'),
('J11885', 'I.8501.19.07.0J4K.107.60', 'QAQC GI Pringgabaya Ext'),
('J11886', 'I.8501.19.07.0J4K.108.60', 'QAQC GI Aesesa'),
('J11887', 'I.8501.19.07.0J4K.109.60', 'QAQC GI PLTMG Flores'),
('J11888', 'I.8501.19.07.0J4K.110.60', 'QAQC GI Labuan Bajo'),
('J11889', 'I.8501.19.07.0J4K.111.60', 'QAQC GI Borong'),
('J11890', 'I.8501.19.07.0J4K.112.60', 'QAQC GI Tenau'),
('J11891', 'I.8501.19.07.0J4K.113.60', 'QAQC GI 150 kV Mataram'),
('J11892', 'I.8501.19.07.0J4K.114.60', 'QAQC SUTT Jeranjang - Sekotong'),
('J11893', 'I.8501.19.07.0J4K.115.60', 'QAQC SUTT PLTMG Flores - Labuan Bajo'),
('J11894', 'I.8501.19.07.0J4K.116.60', 'QAQC SUTT 150 kV Bolok - Tenau'),
('P11861', 'I.8501.18.04.4K00.083.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Sumbawa 2 (30 MW)'),
('P11862', 'I.8501.18.04.4K00.084.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG MPP Flores (20 MW)'),
('P11863', 'I.8501.18.02.4K00.085.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Lombok (FTP1) (25 MW)'),
('P11864', 'I.8501.18.04.4K00.086.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Kupang Peaker (40 MW)'),
('P11865', 'I.8501.18.04.4K00.087.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Waingapu (2x5 MW)'),
('P11866', 'I.8501.18.04.4K00.088.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Bima 50 MW'),
('P11867', 'I.8501.18.02.4K00.089.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Lombok (FTP2) - 100 MW'),
('P11868', 'I.8501.18.06.4K00.090.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Lombok Peaker -150 MW'),
('P11869', 'I.8501.18.04.4K00.091.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Sumbawa 50 MW'),
('P11870', 'I.8501.18.07.4K00.092.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Sambelia/PLTU Lombok (FTP2) - Bayan - Tanjung'),
('P11871', 'I.8501.18.07.4K00.093.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Pringgabaya - Sambelia/PLTU Lombok FTP2'),
('P11872', 'I.8501.18.07.4K00.094.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Maulafa-Naibonat-Nonohonis-Kefamenanu-Atambua-Atapupu'),
('P11873', 'I.8501.18.07.4K00.095.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT GI Maulafa-GI Kupang/Maulafa Baru'),
('P11874', 'I.8501.18.04.4K00.096.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Kupang 2 (50MW)'),
('S11904', 'I.8515.19.02.0S23.004.60', 'PLTU GORONTALO'),
('S11912', 'I.8515.19.07.0S4L.012.60', 'Transmisi Silae - Pasangkayu Section 1'),
('S11913', 'I.8515.19.07.0S4L.013.60', 'GI 150 kV Otam (EXT)'),
('S11914', 'I.8515.19.07.0S4L.014.60', 'T/L 150 kV Otam - Molibagu (New)'),
('S11923', 'I.8515.19.07.0S4L.023.60', 'GI 70 kV Tonsealama (Ext)'),
('S11924', 'I.8515.19.07.0S4L.024.60', 'GI 70 kV Tasikria (Ext)'),
('S11925', 'I.8515.19.07.0S4L.025.60', 'T/L 150 kV PLTMG Luwuk - Toili'),
('S11926', 'I.8515.19.07.0S4L.026.60', 'GI 150 kV Likupang (New)'),
('S11927', 'I.8515.19.07.0S4L.027.60', 'GIS 150 kV Sario (New)'),
('S11928', 'I.8515.19.07.0S4L.028.60', 'GIS 150 kV Teling (Ext)'),
('S11929', 'I.8515.19.07.0S4L.029.60', 'GI 150 kV Luwuk (New)'),
('S11930', 'I.8515.19.07.0S4L.030.60', 'GI 150 kV Tolli (New)'),
('S11931', 'I.8515.19.07.0S4L.031.60', 'T/L 150 kV PLTMG Minahasa Peaker - Likupang - Paniki'),
('S11932', 'I.8515.19.07.0S4L.032.60', 'T/L 150 kV PLTMG Luwuk - Luwuk Sec 1'),
('S11933', 'I.8515.19.07.0S4L.033.60', 'T/L 150 kV PLTMG Luwuk - Luwuk Sec 2'),
('S11915', 'I.8515.19.04.0S4L.015.60', 'Pekerjaan Supervisi Konstruksi dan QA/QC PLTMG Luwuk (40MW)'),
('J11916', 'I.8501.19.07.0J4L.016.60', 'QAQC IBRD 8280 Paket 4 Lot 2'),
('J11934', 'I.8501.19.04.0J4L.017.60', 'Pekerjaan Supervisi Konstruksi dan QA/QC PLTMG Luwuk (40MW) - JKB'),
('J11935', 'I.8501.19.02.0J4L.034.60', 'PLTU Gorontalo (2x25 MW)'),
('P11917', 'I.8501.18.02.4L00.017.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Tolitoli (2x25 MW)'),
('P11918', 'I.8501.18.02.4L00.018.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sulawesi Utara 1 - FTP 1 (2x50 MW)'),
('P11919', 'I.8501.18.06.4L00.019.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Luwuk (150 MW)'),
('P11920', 'I.8501.18.02.4L00.020.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Palu 3 (2x50 MW)'),
('P11921', 'I.8501.18.04.4L00.021.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG Minahasa (150 MW)'),
('P11922', 'I.8501.18.04.4L00.022.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Luwuk (40 MW)'),
('S12011', 'I.8515.19.07.0S45.011.60', 'Transmisi 150 kV Wotu - Malili (Section 1)'),
('S12012', 'I.8515.19.07.0S45.012.60', 'Transmisi 150 kV Wotu - Malili (Section 2)'),
('S12014', 'I.8515.19.07.0S45.014.60', 'T/L 150 kV Malili - Lasusua (Section 3)'),
('S12015', 'I.8515.19.07.0S45.019.60', 'Transmisi 150 kV Sengkang-Siwa Section 1'),
('S12017', 'I.8515.19.07.0S45.017.60', 'T/L 150 kV Malili - Lasusua (Section 4)'),
('S12019', 'I.8515.19.07.0S45.022.60', 'T/L 150 kV Kolaka - Unaaha (Section 2: Tip. 128 - GI Unaaha)'),
('S12020', 'I.8515.19.07.0S45.023.60', 'T/L 150 kV Unaaha - Kendari (Section 1)'),
('S12022', 'I.8515.19.07.0S45.020.60', 'T/L 150 kV Siwa - Palopo (Section 3: GI Palopo)'),
('S12023', 'I.8515.19.07.0S45.021.60', 'T/L 150 kV Lasusua - Kolaka (Section 1)'),
('S12024', 'I.8515.19.07.0S4M.026.60', 'PMC GIS 150kV Bontoala (Ext)'),
('S12025', 'I.8515.19.07.0S4M.027.60', 'PMC GI 150kV Panakkukang (Ext)'),
('S12026', 'I.8515.19.07.0S4M.028.60', 'PMC GI 150kV Sungguminasa (Ext)'),
('S12027', 'I.8515.19.07.0S4M.029.60', 'PMC GI 150 kV Tanjung Bunga (Ext)'),
('S12031', 'I.8515.19.07.0S45.015.60', 'T/L 150 kV Malili - Lasusua (Section 1)'),
('S12032', 'I.8515.19.07.0S45.016.60', 'T/L 150 kV Malili - Lasusua (Section 2)'),
('S12033', 'I.8515.19.07.0S4M.033.60', 'GI 150 kV Lasusua (New SS)'),
('S12034', 'I.8515.19.07.0S4M.034.60', 'T/L 150 kV Kolaka - Unaaha (Section 1)'),
('S12035', 'I.8515.19.07.0S4M.035.60', 'T/L 150 kV Unaaha - Kendari (Section 2: Tip 93 - GI Unaaha Kendari)'),
('S12037', 'I.8515.19.07.0S4M.037.60', 'T/L 150 kV Siwa - Palopo (Section 1)'),
('S12038', 'I.8515.19.07.0S4M.038.60', 'T/L 150 kV Siwa - Palopo (Section 2: Tip. 88 - Tip. 180)'),
('S12039', 'I.8515.19.07.0S4M.039.60', 'T/L 150 kV Lasusua - Kolaka (Section 2: Tip. 130 - Tip 267)'),
('S12040', 'I.8515.19.07.0S4M.040.60', 'T/L 150 kV Lasusua - Kolaka (Section 3: Tip. 267 - GI Kolaka)'),
('S12041', 'I.8515.19.02.0S4M.041.60', 'PLTU BARRU'),
('S12042', 'I.8515.19.02.0S4M.042.60', 'PLTU KENDARI'),
('S12043', 'I.8515.19.02.0S4M.043.60', 'PLTM Lapai'),
('S12044', 'I.8515.19.02.0S4M.044.60', 'PLTU Takalar'),
('S12045', 'I.8515.19.04.0S4M.045.60', 'PLTMG Mobile Power Plant (MPP) Kendari 50 MW'),
('S12046', 'I.8515.19.07.0S4M.046.60', 'GI 150 kV Maros (Extention)'),
('S12047', 'I.8515.19.07.0S4M.047.60', 'GI 150 kV Kima - Makassar (Extention)'),
('S12048', 'I.8515.19.07.0S4M.048.60', 'GI 150 kV Daya Baru (New)'),
('S12049', 'I.8515.19.07.0S4M.049.60', 'GI 150 kV Lanna (New)'),
('S12051', 'I.8515.19.07.0S4M.051.60', 'Pengadaan dan Pemasangan OPGW TL 150 kV Sidrap-Enrekang-Makale-Palopo'),
('S12052', 'I.8515.19.04.0S4M.052.60', 'PLTMG Bau-Bau (30 MW)'),
('S12054', 'I.8515.19.07.0S4M.054.60', 'GI 150 kV Bau - Bau (New)'),
('S12055', 'I.8515.19.07.0S4M.055.60', 'GI 150 kV Punagaya (Ext)'),
('S12056', 'I.8515.19.07.0S4M.056.60', 'GI 150 kV Bulukumba (Ext)'),
('S12057', 'I.8515.19.07.0S4M.057.60', 'GIS 150 kV Siwa (Ext)'),
('S12058', 'I.8515.19.07.0S4M.058.60', 'GIS 150 kV Belopa (New)'),
('S12059', 'I.8515.19.07.0S4M.059.60', 'GI 150 kV Masamba (New)'),
('S12060', 'I.8515.19.07.0S4M.060.60', 'GI 150 kV Sidrap (Ext)'),
('S12061', 'I.8515.19.07.0S4M.061.60', 'GI 150 kV Pinrang (Ext)'),
('S12062', 'I.8515.19.07.0S4M.062.60', 'T/L 150 kV Punagaya - Tanjung Bunga Sect 1'),
('S12063', 'I.8515.19.07.0S4M.063.60', 'T/L 150 kV Punagaya - Tanjung Bunga Sect 2'),
('S12065', 'I.8515.19.07.0S4M.065.60', 'T/L 150 kV Mamuju Baru - Topoyo'),
('S12066', 'I.8515.19.07.0S4M.066.60', 'T/L 150 kV Topoyo - Pasangkayu Sec. 1'),
('S12067', 'I.8515.19.07.0S4M.067.60', 'T/L 150 kV Topoyo - Pasangkayu Sec. 2'),
('S12068', 'I.8515.19.07.0S4M.068.60', 'T/L 150 kV Topoyo - Pasangkayu Sec. 3'),
('S12069', 'I.8515.19.07.0S4M.069.60', 'T/L 150 kV Raha - Bau Bau Sec. 1'),
('S12070', 'I.8515.19.07.0S4M.070.60', 'T/L 150 kV Wotu - Masamba'),
('S12071', 'I.8515.19.07.0S4M.071.60', 'T/L 150 kV Soppeng - Kajuara (Bengo)'),
('S12080', 'I.8515.19.07.0S4M.080.60', 'T/L 150 kV GI 150 kV Kendari - GI 70 kV Kendari (Puuwatu)'),
('S12081', 'I.8515.19.07.0S4M.081.60', 'T/L 150 kV Raha - Bau Bau Sec. 2'),
('S12084', 'I.8515.19.07.0S4M.084.60', 'GI 150 kV Topoyo (New)'),
('S12085', 'I.8515.19.07.0S4M.085.60', 'GI 150 kV Kendari (Ext)'),
('S12086', 'I.8515.19.07.0S4M.086.60', 'GI 150 kV Puuwatu (Ext)'),
('S12087', 'I.8515.19.07.0S4M.087.60', 'GI 150 kV Bengo (New)'),
('S12088', 'I.8515.19.07.0S4M.088.60', 'GI 150 kV Soppeng (Ext)'),
('S12089', 'I.8515.19.07.0S4M.089.60', 'GI 150 kV Raha (New)'),
('S12090', 'I.8515.19.07.0S4M.090.60', 'GIS 150 kV Bontoala (Ext)'),
('S12091', 'I.8515.19.07.0S4M.091.60', 'GI 150 kV Kolaka Smeller (New)'),
('S12092', 'I.8515.19.07.0S4M.092.60', 'T/L 150 kV PLTG/MP MPP SULSELRABAR - GI Kolaka Smeller dan TL 150 kV GI Kolaka Smeller - Incomer 2 Phi (GI Lasusua - GI Kolaka)'),
('J12082', 'I.8501.19.04.0J4M.082.60', 'PLTMG MPP Bau-bau (30MW)'),
('J12083', 'I.8501.19.02.0J4M.083.60', 'PLTU SULSEL BARRU - 2 ( 1 X 100 MW) '),
('P12053', 'I.8501.17.02.4M00.053.60', 'PLTU SULSEL PEAKER 1 x 450 MW'),
('P12072', 'I.8501.18.04.4M00.072.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG MPP Sulselbar (120 MW)'),
('P12073', 'I.8501.18.04.4M00.073.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Bau-Bau (30 MW)'),
('P12074', 'I.8501.18.01.4M00.074.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Poko (2x65 MW)'),
('P12075', 'I.8501.18.01.4M00.075.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Bakaru 2 (2x70 MW)'),
('P12076', 'I.8501.18.01.4M00.076.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTA Konawe'),
('P12077', 'I.8501.18.02.4M00.077.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Sulsel Barru 2 (1x100 MW)'),
('P12078', 'I.8501.18.07.4M00.078.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Wotu-Malili-Lasusua-Kolaka-Unaaha'),
('P12079', 'I.8501.18.06.4M00.079.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTGU Sulsel Peaker (450 MW)'),
('S12102', 'I.8515.19.02.0S39.002.60', 'PLTU 2 PAPUA'),
('S12108', 'I.8515.19.07.0S4N.008.60', 'Gardu Induk 150 kV Holtekamp'),
('S12109', 'I.8515.19.07.0S4N.009.60', 'Gardu Induk 150 kV & 70 kV Jayapura/Skyland (Ext)'),
('S12112', 'I.8515.19.04.0S4N.012.60', 'PLTMG Serui 10 MW'),
('J12119', 'I.8501.19.04.0J4N.019.60', 'PLTMG Serui (10 MW)'),
('P12113', 'I.8501.18.04.4N00.013.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Jayapura Peaker (40 MW)'),
('P12114', 'I.8501.18.04.4N00.014.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Jayapura (50 MW)'),
('P12115', 'I.8501.18.07.4N00.015.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT keerom-PLTU Holtekamp-GI sentani'),
('P12116', 'I.8501.18.07.4N00.016.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Jayapura (skyland)-angkasa'),
('P12117', 'I.8501.18.07.4N00.017.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT rufey-sorong-aimas'),
('P12118', 'I.8501.18.04.4N00.018.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG MPP Manokwari (20 MW)'),
('S15002', 'I.8515.19.07.0S4O.002.60', 'GIS 150 kV Ternate'),
('S15003', 'I.8515.19.07.0S4O.003.60', 'Bay Trafo 150 kV 30 MVA (EXT), Bay IBT 150/70 kV 60 MVA (Relokasi) GI Sirimau'),
('S15004', 'I.8515.19.07.0S4O.004.60', 'GI 150 kV Wayame'),
('S15005', 'I.8515.19.07.0S4O.005.60', 'GIS 150 kV Passo (New) & GI 70 kV (EXT)'),
('S15006', 'I.8515.19.07.0S4O.006.60', 'T/L 150 kV GI Passo - GI Wayame'),
('S15007', 'I.8515.19.07.0S4O.007.60', 'T/L 150 kV PLTMG Ternate - Gis Ternate'),
('S15008', 'I.8515.19.04.0S4O.008.60', 'PLTMG Ambon Peaker (30 MW)'),
('S15009', 'I.8515.19.04.0S4O.009.60', 'PLTMG Seram Peaker (20 MW)'),
('S15010', 'I.8515.19.04.0S4O.010.60', 'PLTMG Langgur (20 MW)'),
('S15024', 'I.8515.19.04.0S4O.024.60', 'GI 150 kV PLTMG Ternate'),
('J15021', 'I.8501.19.04.0J4O.021.60', 'PLTMG LANGGUR (20MW)'),
('J15022', 'I.8501.19.04.0J4O.022.60', 'PLTMG SERAM PEAKER (20MW)'),
('J15023', 'I.8501.19.04.0J4O.023.60', 'PLTMG AMBON PEAKER (30MW)'),
('P15011', 'I.8501.18.04.4O00.011.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Ambon Peaker 30 MW'),
('P15012', 'I.8501.18.04.4O00.012.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Langgur 20 MW'),
('P15013', 'I.8501.18.04.4O00.013.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Seram (20 MW)'),
('P15014', 'I.8501.18.04.4O00.014.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTG/MG Ternate 2 (20 MW)'),
('P15015', 'I.8501.18.04.4O00.015.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTMG Tobelo 2 (20 MW)'),
('P15016', 'I.8501.18.02.4O00.016.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTU Ambon/Waai (FTP1)'),
('P15017', 'I.8501.18.07.4O00.017.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Taniwel-piru-kairatu-masohi'),
('P15018', 'I.8501.18.07.4O00.018.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Incomer 1 phi (Sirimau-Waai)-PLTP tulehu'),
('P15019', 'I.8501.18.07.4O00.019.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTT Tobelo-malifut-jailolo-sofifi-maba'),
('P15020', 'I.8501.18.05.4O00.020.60', 'PENGENDALIAN DAN ANALISA PROYEK PLTP Tulehu (FTP2) 2x10 MW'),
('S16001', 'I.8511.19.07.0S4P.001.60', 'SUTT 150 kV Jatirangon Incomer & SUTT 150 kV Cimanggis II Incomer'),
('S16007', 'I.8511.19.07.0S4P.007.60', 'GI 150 kV Kadipaten'),
('S16008', 'I.8511.19.07.0S4P.008.60', 'SUTT 150 kV PLTGU Pelabuhan Ratu - Pelabuhan Ratu Baru'),
('S16009', 'I.8511.19.07.0S4P.009.60', 'GI 150 kV Pelabuhan Ratu Baru'),
('S16014', 'I.8511.19.07.0S4P.014.60', 'GI 150 kV Cimanggis II'),
('S16015', 'I.8511.19.07.0S4P.015.60', 'GI 150 kV Arjawinangun Baru'),
('S16017', 'I.8511.19.07.0S4P.017.60', 'GIS 150 kV Bogor Baru II / Tajur'),
('S16023', 'I.8511.19.07.0S4P.023.60', 'SUTT Tanjung Jati - Sayung sec 3'),
('S16024', 'I.8511.19.07.0S4P.024.60', 'SUTT Tanjung Jati - Sayung sec 4'),
('S16025', 'I.8511.19.07.0S4P.025.60', 'SUTT Tanjung Jati - Sayung sec 5'),
('S16026', 'I.8511.19.07.0S4P.026.60', 'SUTT Sayung - TX'),
('S16038', 'I.8511.19.07.0S4P.038.60', 'GI 150 kV SOLO BARU SUBSTATION (EXT)'),
('S16057', 'I.8511.19.07.0S4P.057.60', 'PMC IBRD IPTD II 150 kV Pedan S/S (Ext)'),
('S16059', 'I.8511.19.07.0S4P.059.60', 'PMC IBRD IPTD II 150 kV Rembang S/S (Ext)'),
('S16061', 'I.8511.19.07.0S4P.061.60', '150 kV Poncol Baru Substation (Extension)'),
('S16062', 'I.8511.19.07.0S4P.062.60', '150 kV Rancakusumba Substation  (Extension)'),
('S16063', 'I.8511.19.07.0S4P.063.60', '150 kV Sentul Substation  (Extension)'),
('S16069', 'I.8511.19.07.0S4P.069.60', 'SUTET 500 kV Tanjung Jati B-TX (T.12-Ungaran-Pedan) Section. 3'),
('S16070', 'I.8511.19.07.0S4P.070.60', 'SUTET 500 kV Tanjung Jati B-TX (T.12-Ungaran-Pedan) Section. 4'),
('S16075', 'I.8511.19.07.0S4P.075.60', 'SUTT 150 kV Pedan- Wonosari'),
('S16078', 'I.8511.19.07.0S4P.078.60', 'GI 150 kV Weleri, Batang, Pekalongan, Pemalang, Kebasen dan Brebes'),
('S16080', 'I.8511.19.07.0S4P.080.60', 'Rekonduktoring SUTT 150 kV Kosambi Baru-Bekasi (59,05 KM)'),
('S16081', 'I.8511.19.07.0S4P.081.60', 'GI 150 kV Cikarang Baru Lippo'),
('S16087', 'I.8511.19.07.0S4P.087.60', 'Supervisi Konstruksi SUTET 500 kV Tanjung Jati B - Tx (T.12-Ungaran-Pedan) Section 2'),
('S16088', 'I.8511.19.07.0S4P.088.60', 'Supervisi Konstruksi GITET 500 kV Cibatu Baru (Deltamas)'),
('S16089', 'I.8511.19.07.0S4P.089.60', 'Supervisi Konstruksi GIS 150 kV Kiara Condong II / Gedebage'),
('S16090', 'I.8511.19.07.0S4P.090.60', 'Supervisi Konstruksi GITET 500 kV Cibinong'),
('S16091', 'I.8511.19.07.0S4P.091.60', 'IBRD 7940 - ID Saving Fund GI 150 kV Cikarang Lippo'),
('S16092', 'I.8511.19.07.0S4P.092.60', 'IBRD 7940 - ID Saving Fund GI 150 kV Garut'),
('S16093', 'I.8511.19.07.0S4P.093.60', 'IBRD 7940 - ID Saving Fund GI 150 kV Kedung Badak Baru'),
('S16094', 'I.8511.19.07.0S4P.094.60', 'IBRD 7940 - ID Saving Fund GI 150 kV Teluk Jambe'),
('S16095', 'I.8511.19.07.0S4P.095.60', 'IBRD 7940 - ID Saving Fund GI 150 kV Cikedung'),
('S16096', 'I.8511.19.07.0S4P.096.60', 'IBRD 7940 - ID Saving Fund GI 150 kV Sunyaragi'),
('S16099', 'I.8511.19.07.0S4P.099.60', 'GI 150 kV Bandung Timur (APLN)'),
('S16100', 'I.8511.19.07.0S4P.100.60', 'SUTT 150 kV Cibatu Baru KIIC 2 (APLN)'),
('S16101', 'I.8511.19.07.0S4P.101.60', 'SUTT 150 kV Kedung Badak - Bogor Baru'),
('S16102', 'I.8511.19.07.0S4P.102.60', 'SUTET 500 kV Tanjung Jati - TX (Ungaran - Pedan) Section I'),
('S16103', 'I.8511.19.07.0S4P.103.60', 'GITET 500 kV Kesugihan Ext'),
('S16104', 'I.8511.19.07.0S4P.104.60', 'GITET 500 kV Deltamas Ext'),
('S16105', 'I.8511.19.07.0S4P.105.60', 'GITET 500 kV Bandung Selatan'),
('S16106', 'I.8511.19.07.0S4P.106.60', 'GITET 500 kV Batang dan GI 150 kV Batang New & Incomer'),
('S16107', 'I.8511.19.07.0S4P.107.60', 'GITET 500 kV Mandirancan Ext'),
('S16110', 'I.8511.19.07.0S4P.110.60', 'GI 150 kV Purbalingga Ext'),
('S16112', 'I.8511.19.07.0S4P.112.60', 'GI 150 kV Cibereum Ext'),
('S16113', 'I.8511.19.07.0S4P.113.60', 'GITET 500 kV Cirata Ext'),
('S16114', 'I.8511.19.07.0S4P.114.60', 'GI 150 kV Bengkok Baru'),
('S16115', 'I.8511.19.07.0S4P.115.60', 'GI 150 kV Sukatani Gobel'),
('S16116', 'I.8511.19.07.0S4P.116.60', 'SUTET 500 kV TX - Batang'),
('S16117', 'I.8511.19.07.0S4P.117.60', 'SUTET 500 kV Batang - Mandirancan Sec. 1'),
('S16118', 'I.8511.19.07.0S4P.118.60', 'SUTET 500 kV Batang - Mandirancan Sec. 2'),
('S16119', 'I.8511.19.07.0S4P.119.60', 'SUTET 500 kV Mandirancan - Indramayu'),
('S16120', 'I.8511.19.07.0S4P.120.60', 'SUTET 500 kV Indramayu - Cibatu'),
('S16121', 'I.8511.19.07.0S4P.121.60', 'GI 150 kV THK/Taman Mekar'),
('S16122', 'I.8511.19.07.0S4P.122.60', 'GI 150 kV Kedung Badak Ext 2 LB'),
('S16123', 'I.8511.19.07.0S4P.123.60', 'GI 150 kV Bogor Baru Ext 2 LB'),
('S16124', 'I.8511.19.07.0S4P.124.60', 'GI 150 kV Jatirangon Baru'),
('S16126', 'I.8511.19.07.0S4P.126.60', 'Pembangunan GI 150 kV Ampel'),
('S16127', 'I.8511.19.07.0S4P.127.60', 'Pembanungan GI 150 kV Semen Grobogan'),
('S16128', 'I.8511.19.07.0S4P.128.60', 'Pembangunan GI 150 kV Comal Include Incomer'),
('S16129', 'I.8511.19.07.0S4P.129.60', 'Pembangunan 150 kV Lomanis Arah KTT Pertamina'),
('S16130', 'I.8511.19.07.0S4P.130.60', 'Pembangunan GI 150 kV Kanci Include Incomer '),
('S16131', 'I.8511.19.07.0S4P.131.60', 'Pembangunan GI 150 kV KIIC II/Margakarya'),
('S16132', 'I.8511.19.07.0S4P.132.60', 'Pembangunan GI 150 kV Balongan'),
('S16133', 'I.8511.19.07.0S4P.133.60', 'Pembangunan GI 150 kV Bandung Selatan II'),
('S16134', 'I.8511.19.07.0S4P.134.60', 'Pekerjaan Pembangunan GIS 150 kV Cangkring Baru'),
('S16135', 'I.8511.19.07.0S4P.135.60', 'Pembangunan GI 150 kV Pandean Lamper II'),
('S16136', 'I.8511.19.07.0S4P.136.60', 'Pembangunan GI 150 kV Babakan Baru Include Incomer'),
('S16137', 'I.8511.19.07.0S4P.137.60', 'Pekerjaan Pembangunan GIS 150 kV Sawangan Include Incomer'),
('S16138', 'I.8511.19.07.0S4P.138.60', 'Pembangunan SUTT 150 kV Cibatu Baru - THK'),
('S16139', 'I.8511.19.07.0S4P.139.60', 'Uprating SUTT 150 kV Bandung Timur - Ujung Berung'),
('S16140', 'I.8511.19.07.0S4P.140.60', 'Pengadaan Pekerjaan Rekonduktoring SUTT 150 kV Batang - Weleri - dari 1 X HAWK Menjadi 2 X TACSR 410 Sec 2'),
('S16141', 'I.8511.19.07.0S4P.141.60', 'Pembangunan SUTT 150 kV Rancaekek - Sunyaragi Sec 1'),
('S16142', 'I.8511.19.07.0S4P.142.60', 'Pembangunan SUTT 150 kV Rancaekek - Sunyaragi Sec 2'),
('S16143', 'I.8511.19.07.0S4P.143.60', 'Pengadaan Pekerjaan Rekonduktoring SUTT 150 kV Batang - Weleri - dari 1 X HAWK Menjadi 2 X TACSR 410 Sec 1'),
('S16144', 'I.8511.19.07.0S4P.144.60', 'Pekerjaan Penyelesaian SUTT Kesugihan - Rawalo'),
('P16125', 'I.8501.18.07.4P00.125.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET Tj. Jati -Tx. Ungaran - Pedan - Batang - Mandirancan -Indramayu - Cibatu Baru'),
('S17001', 'I.8513.19.07.0S4Q.001.60', 'T/L 150 kV Muara Bulian Sarolangun (Sec 1)'),
('S17003', 'I.8514.19.07.0S4Q.003.60', 'SUTT Bangkinang - Pasir Pangaraian (sec 1)'),
('S17004', 'I.8514.19.07.0S4Q.004.60', 'SUTT Bangkinang - Pasir Pangaraian (sec 2)'),
('S17005', 'I.8514.19.07.0S4Q.005.60', 'SUTT Garuda Sakti - Pasir Putih'),
('S17006', 'I.8514.19.07.0S4Q.006.60', 'SUTT Dumai - KI Dumai'),
('S17007', 'I.8514.19.07.0S4Q.007.60', 'SUTT Dumai - Bagansiapiapi (sec 1)'),
('S17008', 'I.8514.19.07.0S4Q.008.60', 'SUTT Dumai - Bagansiapiapi (sec 2)'),
('S17009', 'I.8514.19.07.0S4Q.009.60', 'T/L 275 kV Perawang Garuda Sakti'),
('S17010', 'I.8514.19.07.0S4Q.010.60', 'SUTT 150 kV Rengat - Teluk Kuantan (Sec I)'),
('S17011', 'I.8514.19.07.0S4Q.011.60', 'SUTT 150 kV Rengat - Teluk Kuantan (Sec II)'),
('S17012', 'I.8514.19.07.0S4Q.012.60', 'SUTT 150 kV Rengat - Teluk Kuantan (Sec III)'),
('S17013', 'I.8514.19.07.0S4Q.013.60', 'GI 150 kV New Garuda Sakti'),
('S17014', 'I.8514.19.07.0S4Q.014.60', 'Pengadaan dan Pemasangan 1 TB 60 MVA di GI 150 kV Ext Pasir Putih'),
('S17015', 'I.8513.19.07.0S4Q.015.60', 'SUTT 275 kV Payakumbuh - Garuda Sakti Section 1'),
('S17016', 'I.8513.19.07.0S4Q.016.60', 'SUTT 275 kV Payakumbuh - Garuda Sakti Section 2'),
('S17017', 'I.8513.19.07.0S4Q.017.60', 'SUTET 275 kV Payakumbuh - Garuda Sakti Section 3'),
('S17018', 'I.8513.19.07.0S4Q.018.60', 'SUTET 275 kV Payakumbuh - Garuda Sakti Section 4'),
('S17025', 'I.8514.19.07.0S4Q.025.60', 'T/L 150 kV Rengat - Pangkalan Kerinci Sec. 1'),
('S17026', 'I.8514.19.07.0S4Q.026.60', 'GI 150 kV Rengat (Ext)'),
('S17027', 'I.8514.19.07.0S4Q.027.60', 'GIS 150 kV Kota Pekanbaru'),
('S17028', 'I.8514.19.07.0S4Q.028.60', 'GI 150 kV Kawasan Industri Dumai dan Dumai (Ext)'),
('S17029', 'I.8514.19.07.0S4Q.029.60', 'GI 150 kV Bagan Siapiapi (1 x 30 MVA) dan Dumai (Ext)'),
('S17030', 'I.8513.19.07.0S4Q.030.60', 'T/L 150 kV Pasaman - Simpang Empat Section 1'),
('S17031', 'I.8513.19.07.0S4Q.031.60', 'GI 150 kV Pasaman 1 x 60 MVA (New)'),
('S17032', 'I.8513.19.07.0S4Q.032.60', 'T/L 150 kV Pasaman - Simpang Empat Section 2'),
('S17033', 'I.8513.19.07.0S4Q.033.60', 'GI 150 kV Simpang Empat (Ext)'),
('S17034', 'I.8513.19.07.0S4Q.034.60', 'T/L Muara Laboh - Sungai Rumbai Section 1 (32,28 kmr)'),
('S17035', 'I.8513.19.07.0S4Q.035.60', 'T/L Muara Laboh - Sungai Rumbai Section 2 (33,25 kmr)'),
('S17036', 'I.8513.19.07.0S4Q.036.60', 'T/L Muara Laboh - Sungai Rumbai Section 3 (25,25 kmr + 2,27 kmr)'),
('S17037', 'I.8514.19.07.0S4Q.037.60', 'T/L 150 kV KID - WINA'),
('S17038', 'I.8514.19.07.0S4Q.038.60', 'GI 150 kV KID (Ext) 1 LB'),
('S17048', 'I.8514.19.07.0S4Q.048.60', 'GI 150 kV Air Raja (Uprating Trafo 2x60 MVA)'),
('S17049', 'I.8514.19.07.0S4Q.049.60', 'GI 150 kV Kijang (EXT Trafo Bay + Trafo 1x30 MVA dan Bus Coupler)'),
('S17050', 'I.8514.19.07.0S4Q.050.60', 'GI 150 kV Sri Bintan (EXT Trafo Bay + Trafo 1x30 MVA)'),
('S17051', 'I.8514.19.07.0S4Q.051.60', 'GI 150 kV Muara Laboh (New) 1 x 60 MVA'),
('S17052', 'I.8514.19.07.0S4Q.052.60', 'GI 150 kV Sungai Rumbai (New) 1 x 60 MVA'),
('S17053', 'I.8514.19.07.0S4Q.053.60', 'GITET 275 kV Sungai Rumbai (New) 1 X 250 MVA'),
('S17054', 'I.8513.19.07.0S4Q.054.60', 'Pembangunan T/L 150 kV Kambang - Muko Muko Sec 1'),
('S17055', 'I.8513.19.07.0S4Q.055.60', 'Pembangunan T/L 150 kV Kambang - Muko Muko Sec 2'),
('S17056', 'I.8513.19.07.0S4Q.056.60', 'Pembangunan GI 150 kV Kambang (Ext) 2 LB'),
('S17057', 'I.8513.19.07.0S4Q.057.60', 'Pembangunan GI 150 kV Tapan (New) 1 x 60 MVA'),
('S17058', 'I.8513.19.07.0S4Q.058.60', 'Pembangunan GITET 500 kV New Aur Duri'),
('S17061', 'I.8514.19.07.0S4Q.061.60', 'GI 150 kV Maninjau (EXT) 1 TB'),
('S17062', 'I.8514.19.07.0S4Q.062.60', 'GI 150 kV Bagan Batu (EXT) 1 TB'),
('S17063', 'I.8514.19.07.0S4Q.063.60', 'GI 150 kV PIP (EXT) 1 TB'),
('S17064', 'I.8514.19.07.0S4Q.064.60', 'GI 150 kV Garuda Sakti (EXT 2 LB)'),
('S17065', 'I.8514.19.07.0S4Q.065.60', 'GI 150 kV Perawang (EXT 2 LB)'),
('S17066', 'I.8514.19.07.0S4Q.066.60', 'GI 150 kV Siak Sri Indrapura'),
('S17067', 'I.8513.19.07.0S4Q.067.60', 'GI 150 kV Kuala Tungkal'),
('S17068', 'I.8513.19.07.0S4Q.068.60', 'GI 150 kV Muara Saba'),
('S17069', 'I.8514.19.07.0S4Q.069.60', 'GITET 500 kV Perawang'),
('S17070', 'I.8514.19.07.0S4Q.070.60', 'GITET 500 kV Peranap'),
('S17071', 'I.8514.19.07.0S4Q.071.60', 'T/L 150 kV Rengat - Pangkalan Kerinci Sec. 3'),
('S17072', 'I.8514.19.07.0S4Q.072.60', 'T/L 150 kV Rengat - Pangkalan Kerinci Sec. 4'),
('S17073', 'I.8513.19.07.0S4Q.073.60', 'GIS 150 kV Kota Padang'),
('S17074', 'I.8514.19.07.0S4Q.074.60', 'GI 150 kV Pangkalan Kerinci (Ext 1 Transformer Bay 1 x 60 MVA & 1 Coupler Bay)'),
('S17075', 'I.8514.19.07.0S4Q.075.60', 'GI 150 kV New Garuda Sakti (2 Line Bay & 2 Future Bay)'),
('S17076', 'I.8514.19.07.0S4Q.076.60', 'GI 150 kV Perawang (2 Line Bay)'),
('S17077', 'I.8514.19.07.0S4Q.077.60', 'T/L 150 kV GI Rengat - GI Tembilahan Sec 5 (38 kmr, Double Hawk)'),
('S17078', 'I.8514.19.07.0S4Q.078.60', 'SUTT 150 kV Perawang - New Garuda Sakti (20 kms)'),
('J17039', 'I.8501.19.07.0J4Q.039.60', 'PMC dan QA/QC GI Maninjau'),
('J17040', 'I.8501.19.07.0J4Q.040.60', 'PMC dan QA/QC GI PIP'),
('J17041', 'I.8501.19.07.0J4Q.041.60', 'PMC dan QA/QC GI Aur Duri'),
('J17042', 'I.8501.19.07.0J4Q.042.60', 'PMC dan QA/QC GI Bagan Batu'),
('P17059', 'I.8501.18.07.4Q00.059.60', 'PENGENDALIAN DAN ANALISA PROYEK SMC Landing Point Riau 1-Landing Point Selat Panjang'),
('P17060', 'I.8501.18.07.4Q00.060.60', 'PENGENDALIAN DAN ANALISA PROYEK SUTET New Aur Duri-Peranap-Perawang-Rantau Parapat - Galang'),
('S18002', 'I.8512.19.02.0S4R.002.60', 'PLTU PARIT BARU'),
('S18003', 'I.8512.19.02.0S4R.003.60', 'PLTU Bengkayang'),
('S18004', 'I.8512.19.02.0S4R.004.60', 'PLTU 3X7 MW Sintang'),
('S18006', 'I.8512.19.02.0S4R.006.60', 'PLTU Parit Baru Site Bengkayang'),
('S18007', 'I.8512.19.02.0S4R.007.60', 'PLTU Ketapang'),
('S18009', 'I.8512.19.07.0S4R.009.60', 'GI Singkawang (Ext)'),
('S18011', 'I.8512.19.07.0S4R.011.60', 'Paket 3 : SUTT 150 kV Bengkayang - Ngabang - Tayan'),
('S18012', 'I.8512.19.07.0S4R.012.60', 'Paket 4 : GI 150 kV Ngabang & GI 150 kV Tayan'),
('S18013', 'I.8512.19.07.0S4R.013.60', 'Paket 5 : GI 150 kV Sanggau (New)'),
('S18014', 'I.8512.19.07.0S4R.014.60', 'Paket 5 : GI 150 kV Sekadau (New)'),
('S18015', 'I.8512.19.07.0S4R.015.60', 'Paket 5 : GI 150 kV Tayan (ext 2LB)'),
('S18016', 'I.8512.19.07.0S4R.016.60', 'Paket 6 : SUTT 150 kV Tayan - Sanggau'),
('S18017', 'I.8512.19.07.0S4R.017.60', 'Paket 7 : SUTT 150 kV Sanggau - Sekadau'),
('S18018', 'I.8512.19.07.0S4R.018.60', 'SUTT 150 kV Sekadau - Sintang Sec. 1'),
('S18019', 'I.8512.19.07.0S4R.019.60', 'SUTT 150 kV Sekadau - Sintang Sec. 2'),
('S18020', 'I.8512.19.07.0S4R.020.60', 'GI 150 kV Sintang'),
('S18031', 'I.8512.19.07.0S4R.031.60', 'GI 150 kV Sekadau (Extension 2 LB arah GI Sintang)'),
('J18021', 'I.8501.19.07.0J4R.021.60', 'QAQC Pembangunan GI 150 kV Sukadana'),
('J18022', 'I.8501.19.07.0J4R.022.60', 'QAQC Pembangunan GI 150 kV Kendawangan'),
('J18023', 'I.8501.19.07.0J4R.023.60', 'QAQC Pembangunan SUTT 150 kV Ketapang - Kendawangan Sec. 1'),
('J18024', 'I.8501.19.07.0J4R.024.60', 'QAQC Pembangunan SUTT 150 kV Ketapang - Kendawangan Sec. 2'),
('J18025', 'I.8501.19.07.0J4R.025.60', 'QAQC Pembangunan SUTT 150 kV Ketapang - Kendawangan Sec. 3'),
('J18026', 'I.8501.19.07.0J4R.026.60', 'QAQC Pembangunan GI 150 kV Ketapang'),
('J18028', 'I.8501.19.07.0J4R.028.60', 'QAQC SUTT 150 kV Sekadau - Sintang Sec. 1'),
('J18029', 'I.8501.19.07.0J4R.029.60', 'QAQC SUTT 150 kV Sekadau - Sintang Sec. 2'),
('J18030', 'I.8501.19.07.0J4R.030.60', 'QAQC GI 150 kV Sintang'),
('J18032', 'I.8501.19.07.0J4R.032.60', 'QAQC GI 150 kV Sekadau (Extension 2 LB arah GI Sintang)'),
('J18033', 'I.8501.19.07.0J4R.033.60', 'QAQC SUTT Ketapang - Sukadana'),
('J18034', 'I.8501.19.07.0J4R.034.60', 'QAQC SUTT GI Kota Baru'),
('J18035', 'I.8501.19.07.0J4R.035.60', 'QAQC GI Parit Baru PLTU PBSB'),
('J18036', 'I.8501.19.07.0J4R.036.60', 'QAQC ADB Paket 5 - GI 150 kV Sanggau (New)'),
('J18037', 'I.8501.19.07.0J4R.037.60', 'QAQC Konstruksi ADB Paket 5 - GI 150 kV Sekadau (New)'),
('J18038', 'I.8501.19.07.0J4R.038.60', 'QAQC ADB Paket 5 - GI 150 kV Tayan (ext 2 LB)'),
('J18039', 'I.8501.19.07.0J4R.039.60', 'QAQC ADB Paket 6 - SUTT 150 kV Tayan - Sanggau'),
('J18040', 'I.8501.19.07.0J4R.040.60', 'QAQC ADB Paket 7 - SUTT 150 kV Sanggau - Sekadau'),
('J18041', 'I.8501.19.02.0J4R.041.60', 'PLTU 1 Kalbar - Parit Baru (2 x 50 MW)'),
('J18042', 'I.8501.19.02.0J4R.042.60', 'PLTU 2 Kalbar - Bengkayang (2 x 27,5 MW)'),
('J18043', 'I.8501.19.02.0J4R.043.60', 'PLTU Ketapang (2 x 10 MW)'),
('J18044', 'I.8501.19.02.0J4R.044.60', 'PLTU Sintang (3 x 7 MW)'),
('J18045', 'I.8501.19.07.0J4R.045.60', 'Uprating Trafo 60 MVA GI 150 kV Kota Baru'),
('J18046', 'I.8501.19.07.0J4R.046.60', 'GI 150 kV Parit Baru PLTU PBSP Ext.'),
('J18047', 'I.8501.19.07.0J4R.047.60', 'GI 150 kV PLTU 2 Kalbar Ext.'),
('J18048', 'I.8501.19.07.0J4R.048.60', 'SUTT 150 kV Sandai - Sukadana Sec 1'),
('J18049', 'I.8501.19.07.0J4R.049.60', 'SUTT 150 kV Sandai - Sukadana Sec 2'),
('S70403', 'I.8514.19.02.0S64.003.60', 'Jetty Port dan Conveyor Sistem PLTU Tanjung Balai Karimun (2 x 7 MW)'),
('S72103', 'I.8512.19.07.0S77.003.60', 'Pembangunan Interkoneksi 20 kV 3 Gili - Sistem Lombok'),
('S72104', 'I.8512.19.02.0S77.004.60', 'Fire Fighting PLTU Jeranjang Tahap 2'),
('S101', 'I.8511.19.12.0S99.999.60', 'WBS Penampungan Proyek Supervisi UPMK I'),
('S102', 'I.8512.19.12.0S99.999.60', 'WBS Penampungan Proyek Supervisi UPMK II'),
('S103', 'I.8513.19.12.0S99.999.60', 'WBS Penampungan Proyek Supervisi UPMK III'),
('S104', 'I.8514.19.12.0S99.999.60', 'WBS Penampungan Proyek Supervisi UPMK IV'),
('S105', 'I.8515.19.12.0S99.999.60', 'WBS Penampungan Proyek Supervisi UPMK V'),
('S100', 'I.8501.19.12.0S99.999.60', 'WBS Penampungan Proyek Supervisi Kantor Induk'),
('J106', 'I.8511.19.12.0J99.999.60', 'WBS Penampungan Proyek JKB UPMK I'),
('J107', 'I.8512.19.12.0J99.999.60', 'WBS Penampungan Proyek JKB UPMK II'),
('J108', 'I.8513.19.12.0J99.999.60', 'WBS Penampungan Proyek JKB UPMK III'),
('J109', 'I.8514.19.12.0J99.999.60', 'WBS Penampungan Proyek JKB UPMK IV'),
('J110', 'I.8515.19.12.0J99.999.60', 'WBS Penampungan Proyek JKB UPMK V'),
('J111', 'I.8501.19.12.0J99.999.60', 'WBS Penampungan Proyek JKB Kantor Induk'),
('P100', 'I.8501.19.12.0P99.999.60', 'WBS Penampungan Proyek Project Control Kantor Induk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_tagihans`
--

CREATE TABLE `detail_tagihans` (
  `id_detail_tagihan` int(10) NOT NULL,
  `tagihan_id` int(10) DEFAULT NULL,
  `nilai_per_kode_lokasi` bigint(10) DEFAULT NULL,
  `kode_lokasi` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `detail_tagihans`
--

INSERT INTO `detail_tagihans` (`id_detail_tagihan`, `tagihan_id`, `nilai_per_kode_lokasi`, `kode_lokasi`) VALUES
(3, 6, 2000, 'BDG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dok_dukung_tagihans`
--

CREATE TABLE `dok_dukung_tagihans` (
  `id_dok_dukung_tagihan` int(2) NOT NULL,
  `nama_dok_duk_tagihan` varchar(50) DEFAULT NULL,
  `status_dok_duk_tagihan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi_rencana_pengadaans`
--

CREATE TABLE `evaluasi_rencana_pengadaans` (
  `id_evaluasi_rencana_pengadaan` int(10) NOT NULL,
  `no_nota_dinas_persetujuan` varchar(30) DEFAULT NULL,
  `perihal_nota_dinas_persetujuan` varchar(100) DEFAULT NULL,
  `tanggal_nota_dinas_persetujuan` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna_projects`
--

CREATE TABLE `pengguna_projects` (
  `id_pengguna_project` int(10) NOT NULL,
  `nama_pengguna_project` varchar(30) DEFAULT NULL,
  `jabatan_pengguna_project` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penpp_vendors`
--

CREATE TABLE `penpp_vendors` (
  `id_penpp_vendor` int(10) NOT NULL,
  `no_ba_penawaran` varchar(30) DEFAULT NULL,
  `tgl_ba_penawaran` date DEFAULT NULL,
  `no_ba_evaluasi` varchar(30) DEFAULT NULL,
  `tgl_ba_evaluasi` date DEFAULT NULL,
  `no_ba_negosiasi` varchar(30) DEFAULT NULL,
  `tgl_ba_negosiasi` date DEFAULT NULL,
  `no_srt_laporan_pengadaan` varchar(30) DEFAULT NULL,
  `tgl_srt_laporan_pengadaan` date DEFAULT NULL,
  `no_nd_usulan_penetapan` varchar(30) DEFAULT NULL,
  `tgl_nd_usulan_penetapan` date DEFAULT NULL,
  `no_sk_penetapan_penyedia` varchar(30) DEFAULT NULL,
  `tgl_sk_penetapan_penyedia` date DEFAULT NULL,
  `no_sp_penetapan_pemenang` varchar(30) DEFAULT NULL,
  `tgl_sp_penetapan_pemenang` date DEFAULT NULL,
  `no_srt_penunjukan_penyedia_jasa` varchar(30) DEFAULT NULL,
  `tgl_srt_penunjukan_penyedia_jasa` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `penpp_vendors`
--

INSERT INTO `penpp_vendors` (`id_penpp_vendor`, `no_ba_penawaran`, `tgl_ba_penawaran`, `no_ba_evaluasi`, `tgl_ba_evaluasi`, `no_ba_negosiasi`, `tgl_ba_negosiasi`, `no_srt_laporan_pengadaan`, `tgl_srt_laporan_pengadaan`, `no_nd_usulan_penetapan`, `tgl_nd_usulan_penetapan`, `no_sk_penetapan_penyedia`, `tgl_sk_penetapan_penyedia`, `no_sp_penetapan_pemenang`, `tgl_sp_penetapan_pemenang`, `no_srt_penunjukan_penyedia_jasa`, `tgl_srt_penunjukan_penyedia_jasa`) VALUES
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan_penawaran_hargas`
--

CREATE TABLE `permintaan_penawaran_hargas` (
  `id_rfp` int(10) NOT NULL,
  `no_surat_rfp` varchar(30) DEFAULT NULL,
  `tanggal_surat_rfp` date DEFAULT NULL,
  `id_rks` int(10) DEFAULT NULL,
  `id_vendor` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_aanwijzings`
--

CREATE TABLE `peserta_aanwijzings` (
  `id_aanwijzing` int(10) NOT NULL,
  `id_vendor` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id_kontrak` int(10) NOT NULL,
  `no_kontrak` varchar(40) DEFAULT NULL,
  `nama_project` varchar(100) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `nilai_project` bigint(10) DEFAULT NULL,
  `jumlah_periode` int(2) DEFAULT NULL,
  `nilai_per_periode` bigint(10) DEFAULT NULL,
  `jenis_pengadaan` varchar(50) DEFAULT NULL,
  `id_vendor` int(10) DEFAULT NULL,
  `id_termin` int(10) DEFAULT NULL,
  `no_srt_penunjukan_penyedia_jasa` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id_kontrak`, `no_kontrak`, `nama_project`, `tgl_mulai`, `tgl_akhir`, `nilai_project`, `jumlah_periode`, `nilai_per_periode`, `jenis_pengadaan`, `id_vendor`, `id_termin`, `no_srt_penunjukan_penyedia_jasa`) VALUES
(21, 'no kontrak', 'nama project', '2020-08-01', '2021-08-01', 1200, 10, 120, 'jenis pengadaan', 3, NULL, 'no surat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rencana_pengadaans`
--

CREATE TABLE `rencana_pengadaans` (
  `id_rencana_pengadaan` varchar(30) NOT NULL,
  `no_nota_dinas` varchar(30) DEFAULT NULL,
  `perihal_nota_dinas` varchar(100) DEFAULT NULL,
  `tanggal_nota_dinas` date DEFAULT NULL,
  `nilai_hpe` bigint(10) DEFAULT NULL,
  `id_pengguna_project` int(10) DEFAULT NULL,
  `id_sumber_anggaran` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rks`
--

CREATE TABLE `rks` (
  `id_rks` int(10) NOT NULL,
  `no_rks` varchar(30) DEFAULT NULL,
  `tanggal_rks` date DEFAULT NULL,
  `nilai_hps` bigint(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber_anggarans`
--

CREATE TABLE `sumber_anggarans` (
  `id_sumber_anggaran` int(10) NOT NULL,
  `no_penetapan_anggaran` varchar(30) DEFAULT NULL,
  `nilai_project` bigint(10) DEFAULT NULL,
  `kode_lokasi` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihans`
--

CREATE TABLE `tagihans` (
  `id` int(11) NOT NULL,
  `tanggal_tagihan_awal` date NOT NULL,
  `tanggal_tagihan_akhir` date NOT NULL,
  `no_tagihan` varchar(50) DEFAULT NULL,
  `nilai_tagihan` bigint(10) DEFAULT NULL,
  `status_tagihan` varchar(50) DEFAULT 'belum ditagih',
  `id_dok_dukung_tagihan` int(2) DEFAULT NULL,
  `id_detail_tagihan` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tagihans`
--

INSERT INTO `tagihans` (`id`, `tanggal_tagihan_awal`, `tanggal_tagihan_akhir`, `no_tagihan`, `nilai_tagihan`, `status_tagihan`, `id_dok_dukung_tagihan`, `id_detail_tagihan`) VALUES
(10, '2021-01-01', '2021-01-10', NULL, 120, 'hijau', NULL, NULL),
(9, '2020-12-01', '2020-12-10', NULL, 120, 'hijau', NULL, NULL),
(8, '2020-11-01', '2020-11-10', '5', 120, 'tagihan diterima', NULL, NULL),
(7, '2020-10-01', '2020-10-10', '3', 120, 'hijau', NULL, NULL),
(6, '2020-09-01', '2020-09-10', '12', 120, 'tagihan diterima', NULL, NULL),
(11, '2021-02-01', '2021-02-10', NULL, 120, 'hijau', NULL, NULL),
(12, '2021-03-01', '2021-03-10', NULL, 120, 'hijau', NULL, NULL),
(13, '2021-04-01', '2021-04-10', NULL, 120, 'hijau', NULL, NULL),
(14, '2021-05-01', '2021-05-10', NULL, 120, 'hijau', NULL, NULL),
(15, '2021-06-01', '2021-06-10', '2', 120, 'hijau', NULL, NULL),
(16, '0000-00-00', '0000-00-00', '11', 60000, 'belum ditagih', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `termins`
--

CREATE TABLE `termins` (
  `id_termin` int(10) NOT NULL,
  `no_termin` int(2) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `tagihan_id` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `termins`
--

INSERT INTO `termins` (`id_termin`, `no_termin`, `tgl_mulai`, `tgl_akhir`, `tagihan_id`, `project_id`) VALUES
(110, 6, '2021-01-01', '2021-02-01', 11, 21),
(109, 5, '2020-12-01', '2021-01-01', 10, 21),
(108, 4, '2020-11-01', '2020-12-01', 9, 21),
(107, 3, '2020-10-01', '2020-11-01', 8, 21),
(106, 2, '2020-09-01', '2020-10-01', 7, 21),
(105, 1, '2020-08-01', '2020-09-01', 6, 21),
(111, 7, '2021-02-01', '2021-03-01', 12, 21),
(112, 8, '2021-03-01', '2021-04-01', 13, 21),
(113, 9, '2021-04-01', '2021-05-01', 14, 21),
(114, 10, '2021-05-01', '2021-06-01', 15, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `uraian_tagihans`
--

CREATE TABLE `uraian_tagihans` (
  `id_uraian` int(10) NOT NULL,
  `detail_tagihan_id` int(10) DEFAULT NULL,
  `nama_uraian` varchar(50) DEFAULT NULL,
  `nilai_uraian` bigint(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `uraian_tagihans`
--

INSERT INTO `uraian_tagihans` (`id_uraian`, `detail_tagihan_id`, `nama_uraian`, `nilai_uraian`) VALUES
(1, 3, 'yes', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` varchar(255) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `isactive` tinyint(1) DEFAULT NULL,
  `id_user_level` varchar(30) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `isactive`, `id_user_level`, `password_user`) VALUES
('admin', 'admin', 1, '1', 'admin'),
('keuangan', 'keuangan', 1, '3', 'keuangan'),
('pengadaan', 'pengadaan', 1, '2', 'pengadaan'),
('tagihan', 'tagihan', 1, '4', 'tagihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_levels`
--

CREATE TABLE `user_levels` (
  `id_user_level` varchar(30) NOT NULL,
  `nama_user_level` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `user_levels`
--

INSERT INTO `user_levels` (`id_user_level`, `nama_user_level`) VALUES
('1', 'Super Admin'),
('2', 'Pengadaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendors`
--

CREATE TABLE `vendors` (
  `id_vendor` int(10) NOT NULL,
  `nama_vendor` varchar(40) DEFAULT NULL,
  `alamat_vendor` varchar(40) DEFAULT NULL,
  `kota_vendor` varchar(30) DEFAULT NULL,
  `provinsi_vendor` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `vendors`
--

INSERT INTO `vendors` (`id_vendor`, `nama_vendor`, `alamat_vendor`, `kota_vendor`, `provinsi_vendor`) VALUES
(3, 'vendor', 'alamat', 'kota', 'provinsi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aanwijzings`
--
ALTER TABLE `aanwijzings`
  ADD PRIMARY KEY (`id_aanwijzing`) USING BTREE;

--
-- Indeks untuk tabel `daftar_wbs`
--
ALTER TABLE `daftar_wbs`
  ADD PRIMARY KEY (`kode_lokasi`) USING BTREE;

--
-- Indeks untuk tabel `detail_tagihans`
--
ALTER TABLE `detail_tagihans`
  ADD PRIMARY KEY (`id_detail_tagihan`) USING BTREE;

--
-- Indeks untuk tabel `dok_dukung_tagihans`
--
ALTER TABLE `dok_dukung_tagihans`
  ADD PRIMARY KEY (`id_dok_dukung_tagihan`) USING BTREE;

--
-- Indeks untuk tabel `evaluasi_rencana_pengadaans`
--
ALTER TABLE `evaluasi_rencana_pengadaans`
  ADD PRIMARY KEY (`id_evaluasi_rencana_pengadaan`) USING BTREE;

--
-- Indeks untuk tabel `pengguna_projects`
--
ALTER TABLE `pengguna_projects`
  ADD PRIMARY KEY (`id_pengguna_project`) USING BTREE;

--
-- Indeks untuk tabel `penpp_vendors`
--
ALTER TABLE `penpp_vendors`
  ADD PRIMARY KEY (`id_penpp_vendor`) USING BTREE,
  ADD KEY `fk_penpp_vendor_project_1` (`no_srt_penunjukan_penyedia_jasa`) USING BTREE;

--
-- Indeks untuk tabel `permintaan_penawaran_hargas`
--
ALTER TABLE `permintaan_penawaran_hargas`
  ADD PRIMARY KEY (`id_rfp`) USING BTREE;

--
-- Indeks untuk tabel `peserta_aanwijzings`
--
ALTER TABLE `peserta_aanwijzings`
  ADD KEY `id_aanwijzing` (`id_aanwijzing`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_kontrak`) USING BTREE;

--
-- Indeks untuk tabel `rencana_pengadaans`
--
ALTER TABLE `rencana_pengadaans`
  ADD PRIMARY KEY (`id_rencana_pengadaan`) USING BTREE,
  ADD KEY `fk_rencana_pengadaan_pengguna_project_1` (`id_pengguna_project`) USING BTREE,
  ADD KEY `fk_rencana_pengadaan_sumber_anggaran_1` (`id_sumber_anggaran`) USING BTREE;

--
-- Indeks untuk tabel `rks`
--
ALTER TABLE `rks`
  ADD PRIMARY KEY (`id_rks`) USING BTREE;

--
-- Indeks untuk tabel `sumber_anggarans`
--
ALTER TABLE `sumber_anggarans`
  ADD PRIMARY KEY (`id_sumber_anggaran`) USING BTREE;

--
-- Indeks untuk tabel `tagihans`
--
ALTER TABLE `tagihans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `termins`
--
ALTER TABLE `termins`
  ADD PRIMARY KEY (`id_termin`) USING BTREE;

--
-- Indeks untuk tabel `uraian_tagihans`
--
ALTER TABLE `uraian_tagihans`
  ADD PRIMARY KEY (`id_uraian`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`) USING BTREE,
  ADD KEY `fk_user_user_level_1` (`id_user_level`) USING BTREE;

--
-- Indeks untuk tabel `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id_vendor`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aanwijzings`
--
ALTER TABLE `aanwijzings`
  MODIFY `id_aanwijzing` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_tagihans`
--
ALTER TABLE `detail_tagihans`
  MODIFY `id_detail_tagihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dok_dukung_tagihans`
--
ALTER TABLE `dok_dukung_tagihans`
  MODIFY `id_dok_dukung_tagihan` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `evaluasi_rencana_pengadaans`
--
ALTER TABLE `evaluasi_rencana_pengadaans`
  MODIFY `id_evaluasi_rencana_pengadaan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengguna_projects`
--
ALTER TABLE `pengguna_projects`
  MODIFY `id_pengguna_project` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penpp_vendors`
--
ALTER TABLE `penpp_vendors`
  MODIFY `id_penpp_vendor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `permintaan_penawaran_hargas`
--
ALTER TABLE `permintaan_penawaran_hargas`
  MODIFY `id_rfp` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peserta_aanwijzings`
--
ALTER TABLE `peserta_aanwijzings`
  MODIFY `id_aanwijzing` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id_kontrak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `rks`
--
ALTER TABLE `rks`
  MODIFY `id_rks` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sumber_anggarans`
--
ALTER TABLE `sumber_anggarans`
  MODIFY `id_sumber_anggaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tagihans`
--
ALTER TABLE `tagihans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `termins`
--
ALTER TABLE `termins`
  MODIFY `id_termin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `uraian_tagihans`
--
ALTER TABLE `uraian_tagihans`
  MODIFY `id_uraian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id_vendor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
