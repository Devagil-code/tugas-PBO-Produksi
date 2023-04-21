<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Data Laporan</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- view cetak_bulanan.php -->
<html>

<head>
 <title>Cetak Laporan Bulanan</title>
 <style>
 table {
  border-collapse: collapse;
  width: 100%;
 }

 th {
  text-align: center;
  border: 1px solid black;
  padding: 8px;
  background-color: #007bff;
  color: #fff;
 }

 td {
  border: 1px solid black;
  padding: 8px;
  text-align: center;
 }

 caption {
  text-align: left;
  margin-bottom: 10px;
  font-weight: bold;
  font-size: 18px;
 }

 .print-btn {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px;
  margin-top: 10px;
  cursor: pointer;
  font-size: 16px;
 }

 .print-icon {
  margin-right: 5px;
 }
 </style>
</head>

<body>
 <h1>Laporan Produksi Bulanan</h1>
 <table>
  <caption>Berkah Bin Halal</caption>
  <caption>Jl. Gatot Subroto No. 46, Kecamatan Tadika</caption>
  <caption>Bulan <?= date('F Y', strtotime($tanggal)) ?></caption>
  <thead>
   <tr>
    <th>no</th>
    <th>Jumlah Produksi</th>
    <th>Tanggal Produksi</th>
    <th>Nama Produk</th>
    <th>Deskripsi Produk</th>
    <th>Nama Bahan Baku</th>
    <th>Deskripsi Bahan Baku</th>
   </tr>
  </thead>
  <tbody>
   <?php $no = 1; ?>
   <?php foreach ($laporan as $data) : ?>
   <tr>
    <td><?= $no++ ?></td>
    <td><?= $data->jumlah_produksi ?></td>
    <td><?= $data->tanggal_produksi ?></td>
    <td><?= $data->nama_produk ?></td>
    <td><?= $data->deskripsi_produk ?></td>
    <td><?= $data->nama_bahan_baku ?></td>
    <td><?= $data->deskripsi_bahan_baku ?></td>
   </tr>
   <?php endforeach; ?>
  </tbody>
 </table>
 <button class="print-btn" onclick="window.print()"><i class="fas fa-print print-icon"></i>Print</button>
</body>

</html>