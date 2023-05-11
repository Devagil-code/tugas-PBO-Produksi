<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data pesanan produk</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <h1>pesanan produk</h1>
  <div class="seaction-header-button ml-2">
   <a href="<?=site_url('pesanan_produk/new')?>" class="btn btn-primary"> Tambah Data</a>
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
    <h4>Data Pesanan</h4>
   </div>
   <div class="card-body table-responsive">
    <table class="table table-striped table-md" id="table1">
     <thead>
      <tr>
       <th>No</th>
       <th>nama pelanggan</th>
       <th>tanggal pemesanan</th>
       <th>Produk Yang Dipesan</th>
       <th>Gambar</th>
       <th>Action</th>
      </tr>
     </thead>
     <tbody>
      <?php foreach ($pesanan_produk as $key => $value) : ?>
      <tr>
       <td><?=$key + 1 ?></td>
       <td><?=$value->nama_pelanggan?></td>
       <td><?=$value->tanggal_pemesanan?></td>
       <td><?=$value->produk_dipesan?></td>
       <td>
        <?php if (!empty($value->gambar)) { ?>
        <img src="<?= base_url($value->gambar) ?>" style="width:70px; height:70px;">
        <?php } ?>
       </td>
       <td>
        <a href="<?=site_url('pesanan_produk/edit/'.$value->id_pesanan)?>" class="btn btn-warning btn-sm"> <i
          class="fas fa-pencil-alt"></i></a>
        <form action="<?=site_url('pesanan_produk/delete/'.$value->id_pesanan)?>" method="post" class="d-inline"
         onsubmit="return confirm('Yakin Hapus Data?')">
         <button href="" class=" btn btn-danger btn-sm"><i class="fas fa-trash"></i>
         </button>
        </form>
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