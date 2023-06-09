<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Produksi</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <h1>Produksi</h1>
  <div class="seaction-header-button ml-2">
   <a href="<?=site_url('produksi/new')?>" class="btn btn-primary"> Proses Data Produksi</a>
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
    <h4>Data produksi</h4>
   </div>
   <div class="card-body table-responsive">
    <table class="table table-striped table-md" id="table1">
     <thead>
      <tr>
       <th>No</th>
       <th>Nama Pelanggan</th>
       <th>Pesanan</th>
       <th>Gambar</th>
       <th>Jumlah Produksi</th>
       <th>Tanggal Produksi</th>
       <th>Tipe Bahan Baku</th>
       <th>Bahan Baku</th>
       <th>Action</th>
      </tr>
     </thead>
     <tbody>
      <?php foreach ($produksi as $key => $value) : ?>
      <tr>
       <td><?=$key + 1 ?></td>
       <td><?=$value->nama_pelanggan?></td>
       <td><?=$value->produk_dipesan?></td>
       <td>
        <?php if (!empty($value->gambar)) { ?>
        <img src="<?= base_url($value->gambar) ?>" style="width:70px; height:70px;">
        <?php } ?>
       </td>
       <td><?=$value->jumlah_produksi?></td>
       <td><?=$value->tanggal_produksi?></td>
       <td><?=$value->pilih_bahan?></td>
       <td><?=$value->nama_bahan_baku?></td>
       <td>
       <div class="d-flex">
         <form action="<?=site_url('produksi/delete/'.$value->id_produksi)?>" method="post" class="d-inline"
          onsubmit="return confirm('Yakin Hapus Data?')">
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