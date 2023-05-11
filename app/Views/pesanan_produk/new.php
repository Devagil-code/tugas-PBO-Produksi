<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Tambah pesanan produk</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?=site_url('pesanan_produk')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Tambah pesanan produk</h1>
 </div>
 <div class="section-body">
  <div class="card">
   <div class="card-header">
    <h4>Tambah Data pesanan produk</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?=site_url('pesanan_produk')?>" method="post" autocomplete="off" enctype="multipart/form-data">
     <div class="form-group">
      <label>Nama pelanggan*</label>
      <input type="text" name="nama_pelanggan" class="form-control" required autofocus>
     </div>
     <div class="form-group">
      <label>Tanggal Pemesanan*</label>
      <input type="date" name="tanggal_pemesanan" class="form-control" required>
     </div>
     <div class="form-group">
      <label>nama produk yang dipesan*</label>
      <select name="produk_dipesan" class="form-control" required>
       <option value="">Pilih Produk</option>
       <option value="Asus ROG">Asus ROG</option>
       <option value="Acer">Acer</option>
       <option value="Toshiba">Toshiba</option>
       <option value="HP">HP</option>
       <option value="Lenovo">Lenovo</option>
       <option value="MSI">MSI</option>
       <option value="Aplle">Aplle</option>
       <option value="Sony">Sony</option>
       <option value="Hawei">Hawei</option>
      </select>
     </div>
     <div class="form-group">
      <label>Gambar Produk*</label>
      <input type="file" name="gambar" class="form-control-file" accept="image/*">
     </div>
     <br>
     <div>
      <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
     </div>
    </form>
   </div>
  </div>
 </div>
</section>
<?= $this->endSection() ?>