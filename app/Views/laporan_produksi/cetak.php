<?php

use CodeIgniter\I18n\Time;

// Get current date and time
$now = Time::now()->toLocalizedString('d MMMM yyyy, HH:mm');

// Set data untuk header PDF
$headerData = [
    'logo' => '/assets/images/logo.png',
    'nama_pt' => 'Nama PT Anda',
    'alamat_pt' => 'Alamat PT Anda',
    'tanggal_cetak' => $now
];

// Set data laporan dari controller
$laporan = $laporan ?? [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>Laporan Produksi</title>
</head>

<body>
 <div style="text-align: center; margin-bottom: 20px;">
  <img src="<?= $headerData['logo']; ?>" alt="Logo PT">
  <h1 style="margin: 0;"><?= $headerData['nama_pt']; ?></h1>
  <p style="margin: 0;"><?= $headerData['alamat_pt']; ?></p>
  <p style="margin: 0;">Tanggal Cetak: <?= $headerData['tanggal_cetak']; ?></p>
  <hr>
 </div>
 <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse;">
  <thead>
   <tr>
    <th>No</th>
    <th>ID Produksi</th>
    <th>Tanggal Produksi</th>
    <th>Nama Produk</th>
    <th>Deskripsi Produk</th>
    <th>Jumlah Produksi</th>
    <th>Nama Bahan Baku</th>
    <th>Deskripsi Bahan Baku</th>
   </tr>
  </thead>
  <tbody>
   <?php if (count($laporan) > 0) : ?>
   <?php foreach ($laporan as $index => $item) : ?>
   <tr>
    <td><?= $index + 1; ?></td>
    <td><?= $item->id_produksi; ?></td>
    <td><?= $item->tanggal_produksi; ?></td>
    <td><?= $item->nama_produk; ?></td>
    <td><?= $item->deskripsi_produk; ?></td>
    <td><?= $item->jumlah_produksi; ?></td>
    <td><?= $item->nama_bahan_baku; ?></td>
    <td><?= $item->deskripsi_bahan_baku; ?></td>
   </tr>
   <?php endforeach; ?>
   <?php else : ?>
   <tr>
    <td colspan="8">Data tidak tersedia.</td>
   </tr>
   <?php endif; ?>
  </tbody>
 </table>
</body>

</html>