<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Qc Tes</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <h1>Qc Tes</h1>
  <div class="seaction-header-button ml-2">
   <a href="<?=site_url('qc_tes/new')?>" class="btn btn-primary"> Proses Qc</a>
  </div>
 </div>

 <?php if(session()->getFlashdata('success')) :?>
 <div class="alert alert-success alert-dismissible show fade">
  <div class="alert-body">
   <button class="close" data-dismiss="alert">x</button>
   <b>Success !</b>
   <?=session()->getFlashdata('success')?>
  </div>
 </div>
 <?php endif; ?>

 <div class="section-body">
  <div class="card">
   <div class="card-header">
    <h4>Data Qc Tes</h4>
   </div>
   <div class="card-body table-responsive">
    <table class="table table-striped table-md" id="table1">
     <thead>
      <tr>
      <th>No</th>
       <th>Produk</th>
       <th>Gambar</th>
       <th>Tanggal Produksi</th>
       <th>Hasil Tes QC</th>
       <th>Action</th>
      </tr>
     </thead>
    <tbody>
      <?php foreach ($qc_tes as $key => $value) : ?>
      <tr>
       <td><?=$key + 1 ?></td>
       <td><?=$value->produk_dipesan?></td>
       <td>
        <?php if (!empty($value->gambar)) { ?>
        <img src="<?= base_url($value->gambar) ?>" style="width:70px; height:70px;">
        <?php } ?>
       </td>
       <td><?=$value->tanggal_produksi?></td>
       <td>
        <?php if ($value->hasil_tes == 'Lulus') { ?>
          <button class="btn btn-success btn-sm"><?=$value->hasil_tes?></button>
        <?php } elseif ($value->hasil_tes == 'Tidak Lulus') { ?>
          <button class="btn btn-danger btn-sm"><?=$value->hasil_tes?></button>
        <?php } ?>
       </td>
       <td>
      <div class="d-flex">
        <a href="<?=site_url('qc_tes/edit/'.$value->id_produksi)?>" class="btn btn-warning btn-sm mr-1">
          <i class="fas fa-pencil-alt"></i>
        </a>
        <form action="<?=site_url('qc_tes/delete/'.$value->id_tes)?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
         <button href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
</button>
</form>
</div>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

   </div>
  </div>
 </div>
</section>
<?= $this->endSection() ?>