<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data bahan baku</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <h1>bahan baku</h1>
  <div class="seaction-header-button ml-2">
   <a href="<?=site_url('bahan_baku/new')?>" class="btn btn-primary"> Add New</a>
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
    <h4>Data bahan baku</h4>
   </div>
   <div class="text-center card-body table-responsive">
    <table class="table table-striped table-md">
     <thead>
      <tbody>
      <tr>
       <th>No</th>
       <th>nama bahan baku</th>
       <th>Deskripsi Bahan baku</th>
       <th>Satuan</th>
       <th>Stok</th>
       <th>Action</th>
      </tr>
      <?php foreach ($bahan_baku as $key => $value) : ?>
      <tr>
       <td><?=$key + 1 ?></td>
       <td><?=$value->nama_bahan_baku?></td>
       <td><?=$value->deskripsi_bahan_baku?></td>
       <td><?=$value->satuan_bahan_baku?></td>
       <td><?=$value->stok_bahan_baku?></td>
       <td class="text-center" style="width:15%">
        <a href="<?=site_url('bahan_baku/edit/'.$value->id_bahan_baku)?>" class="btn btn-warning btn-sm"> <i
          class="fas fa-pencil-alt"></i></a>
        <form action="<?=site_url('bahan_baku/delete/'.$value->id_bahan_baku)?>" method="post" class="d-inline"
         onsubmit="return confirm('Yakin Hapus Data?')">

         <button href="" class=" btn btn-danger btn-sm">
          <i class="fas fa-trash"></i>
         </button>
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