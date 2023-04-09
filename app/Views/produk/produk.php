<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data produk</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <h1>produk</h1>
  <div class="seaction-header-button ml-2">
   <a href="<?=site_url('produk/new')?>" class="btn btn-primary"> Add New</a>
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
    <h4>Data produk</h4>
   </div>
   <div class="text-center card-body table-responsive">
    <table class="table table-striped table-md">
     <thead>
      <tbody>
      <tr>
       <th>No</th>
       <th>nama produk</th>
       <th>Deskripsi produk</th>
       <th>Harga</th>
       <th>Stok</th>
       <th>Action</th>
      </tr>
      <?php foreach ($produk as $key => $value) : ?>
      <tr>
       <td><?=$key + 1 ?></td>
       <td><?=$value->nama_produk?></td>
       <td><?=$value->deskripsi_produk?></td>
       <td><?=$value->harga_produk?></td>
       <td><?=$value->stok_produk?></td>
       <td class="text-center" style="width:15%">
        <a href="<?=site_url('produk/edit/'.$value->id_produk)?>" class="btn btn-warning btn-sm"> <i
          class="fas fa-pencil-alt"></i></a>
        <form action="<?=site_url('produk/delete/'.$value->id_produk)?>" method="post" class="d-inline"
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