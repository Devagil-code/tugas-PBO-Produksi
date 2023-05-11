<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Pilih Bahan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-button ml-2">
   <a href="<?=site_url('pemilihan_bahan_baku/new')?>" class="btn btn-primary">Pilih Bahan</a>
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
    <h4>Data Pilih Bahan</h4>
   </div>
   <div class="card-body table-responsive">
    <table class="table table-striped table-md" id="table1">
     <thead>
      <tr>
       <th>No</th>
       <th>Produk</th>
       <th>Gambar</th>
       <th>Bahan Baku</th>
       <th>Harga</th>
       <th>Stok</th>
       <th>Action</th>
      </tr>
     </thead>
     <tbody>
      <?php foreach ($pemilihan_bahan_baku as $key => $value) : ?>
      <tr>
       <td><?=$key + 1 ?></td>
       <td><?=$value->produk_dipesan?></td>
       <td>
        <?php if (!empty($value->gambar)) { ?>
        <img src="<?= base_url($value->gambar) ?>" style="width:70px; height:70px;">
        <?php } ?>
       </td>
       <td><?=$value->nama_bahan_baku?></td>
       <td><?=$value->harga_bahan?></td>
       <td><?=$value->stok?></td>

       <td>
        <div class="d-flex">
         <form action="<?=site_url('pemilihan_bahan_baku/delete/'.$value->id_pemilihan)?>" method="post"
          class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
          <button href="" class="btn btn-danger btn-sm">
           <i class="fas fa-trash"></i>
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