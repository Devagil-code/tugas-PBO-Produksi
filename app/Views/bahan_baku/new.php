asu<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Tambah Bahan Baku</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?=site_url('bahan_baku')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Tambah Bahan Baku</h1>
 </div>
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Tambah Data Bahan Baku</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?=site_url('bahan_baku')?>" method="post" autocomplate="off">
     <div class="form-group">
      <label>Nama Bahan Baku*</label>
      <input type="int" name="nama_bahan_baku" class="form-control" required autofocus>
     </div>
     <div class="form-group">
      <label>Deskripsi Bahan Baku*</label>
      <input type="text" name="deskripsi_bahan_baku" class="form-control" required>
     </div>
     <div class="form-group">
    <label>Satuan Bahan Baku*</label>
    <select name="satuan_bahan_baku" class="form-control" required>
        <option value="">Pilih Satuan</option>
        <option value="kg">kg</option>
        <option value="gram">gram</option>
        <option value="liter">liter</option>
        <option value="ml">ml</option>
    </select>
     </div>
     <div class="form-group">
      <label>Stok Bahan Baku*</label>
      <input type="number" name="stok_bahan_baku" class="form-control" required>
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