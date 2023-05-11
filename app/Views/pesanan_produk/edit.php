<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Pesanan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?=site_url('pesanan_produk')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Update Pesanan</h1>
 </div>
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Update Data Pesanan</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?=site_url('pesanan_produk/update/'.$pesanan_produk->id_pesanan)?>" method="post" autocomplete="off"
     enctype="multipart/form-data">
     <input type="hidden" name="_method" value="PUT">
     <div class="form-group">
      <label>Nama Pelanggan*</label>
      <input type="text" name="nama_pelanggan" value="<?=$pesanan_produk->nama_pelanggan?>" class="form-control"
       required autofocus>
     </div>
     <div class="form-group">
      <label>Tanggal Pemesanan*</label>
      <input type="date" name="tanggal_pemesanan" value="<?=$pesanan_produk->tanggal_pemesanan?>" class="form-control"
       required>
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
      <label>Gambar*</label>
      <input type="file" name="gambar" value="<?=$pesanan_produk->gambar?>" class="form-control-file" accept="image/*">
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