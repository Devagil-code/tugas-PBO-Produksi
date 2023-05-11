<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Tambah bahan_baku</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?= site_url('bahan_baku') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Tambah bahan_baku</h1>
 </div>
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Tambah Data bahan baku</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?= site_url('bahan_baku') ?>" method="post" autocomplete="off" enctype="multipart/form-data">
     <div class="form-group">
      <label>Bahan Baku*</label>
      <textarea name="nama_bahan_baku" class="form-control" style="width: 100%; height: auto; min-height: 150px;"
       required autofocus></textarea>
     </div>
     <div class="form-group">
      <label>Harga Bahan Baku*</label>
      <div class="input-group">
       <div class="input-group-prepend">
        <span class="input-group-text">Rp.</span>
       </div>
       <input type="number" name="harga_bahan" class="form-control" required>
      </div>
     </div>
     <div class="form-group">
      <label>Stok Bahan Baku*</label>
      <input type="number" name="stok" class="form-control" required>
     </div>
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