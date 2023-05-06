<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update produk</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?=site_url('produk')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Update produk</h1>
 </div>
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Update Data produk</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?=site_url('produk/update/'.$produk->id_produk)?>" method="post" autocomplete="off" enctype="multipart/form-data">
     <input type="hidden" name="_method" value="PUT">
     <div class="form-group">
      <label>Nama produk*</label>
      <input type="text" name="nama_produk" value="<?=$produk->nama_produk?>" class="form-control" required
       autofocus>
     </div>
     <div class="form-group">
      <label>Deskripsi produk*</label>
      <input type="textarea" name="deskripsi_produk" value="<?=$produk->deskripsi_produk?>" class="form-control"
       required>
     </div>  
     <div class="form-group">
      <label>Harga produk*</label>
      <input type="number" name="harga_produk" value="<?=$produk->harga_produk?>" class="form-control" required>
     </div>
     <div class="form-group">
      <label>Stok produk*</label>
      <input type="number" name="stok_produk" value="<?=$produk->stok_produk?>" class="form-control" required>
     </div>
     <div class="form-group">
      <label>Gambar*</label>
      <input type="file" name="gambar" value="<?=$produk->gambar?>" class="form-control-file" accept="image/*">
     </div>
     <div>
      <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"> Save</i></button>
      <button type="reset" class="btn btn-secondary">reset</button>
     </div>
    </form>
   </div>
  </div>

 </div>
</section>
<?= $this->endSection() ?>