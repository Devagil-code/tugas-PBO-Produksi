<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Data Laporan</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<style>
table {
 border-collapse: collapse;
 width: 80%;
 margin: 0 auto;
}

th {
 text-align: center;
 border: 1px solid black;
 padding: 8px;
 background-color: #3498DB;
 color: white;
}

td {
 text-align: center;
 border: 1px solid black;
 padding: 2px;
}

.card {
 width: 100%;
 margin: 0 auto;
 padding: 20px;
 border: 1px solid #ccc;
 box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
 text-align: center;
}

.caption {
 font-size: 1.5rem;
 font-weight: bold;
 margin-bottom: 10px;
}

.print-btn {
 background-color: #3498DB;
 color: white;
 border: none;
 padding: 10px 20px;
 font-size: 1rem;
 font-weight: bold;
 border-radius: 5px;
 cursor: pointer;
 margin-top: 20px;
}

.print-btn:hover {
 background-color: #2980B9;
}

@media print {
 .print-btn {
  display: none;
 }
}
</style>

<div class="card">
 <div class="caption">PT.Berkah Bin Halal</div>
 <div class="caption">Jl. Gatot Subroto No. 46, Kecamatan Tadika</div>
 <table>
  <thead>
   <tr>
    <th>No</th>
    <th>Jumlah Produksi</th>
    <th>Tanggal Produksi</th>
    <th>Nama Produk</th>
    <th>Deskripsi Produk</th>
    <th>Nama Bahan Baku</th>
    <th>Deskripsi Bahan Baku</th>
   </tr>
  </thead>
  <tbody>
   <?php foreach ($laporan as $data) : ?>
   <tr>
    <td><?= $data->id_produksi ?></td>
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
 <button class="print-btn" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
</div>
</section>