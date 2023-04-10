<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Laporan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <h1>Laporan</h1>
  <div class="seaction-header-button ml-2">
  </div>
 </div>

 <?php if(session()->getFlashdata('danger')) :?>
 <div class="alert alert-danger alert-dismissible show fade">
  <div class="alert-body">
   <button class="close" data-dismiss="alert">x</button>
   <b>Success !</b>
   <?=session()->getFlashdata('danger')?>
  </div>
 </div>
 <?php endif; ?>
 
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Data Laporan</h4>
   </div>
   <div class="text-center card-body table-responsive">
    <table class="table table-striped table-md">
     <thead>
      <tbody>
      <tr>
       <th>No</th>
       <th>tanggal produksi</th>
       <th>nama produk</th>
       <th>nama bahan baku</th>
       <th>jumlah produksi</th>
       <th>Action</th>
      </tr>
      <?php $no = 1; foreach($laporan as $row): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row->tanggal_produksi; ?></td>
        <td><?= $row->nama_produk; ?></td>
        <td><?= $row->nama_bahan_baku; ?></td>
        <td><?= $row->jumlah_produksi; ?></td>
        <td class="text-center" style="width:15%">
        <form action="<?= site_url('laporan_produksi/hapus/'.$row->id_produksi)?>" method="post" class="d-inline"
        onsubmit="return confirm('Yakin Hapus Data?')">
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    </tr>
            <?php endforeach; ?>
      <tbody>
    </table>
   </div>
  </div>

 </div>
</section>
<?= $this->endSection() ?>
