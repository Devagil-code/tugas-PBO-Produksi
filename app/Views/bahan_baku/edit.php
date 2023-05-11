<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Bahan Baku</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?=site_url('bahan_baku')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Update Bahan Baku</h1>
 </div>
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Update Data Bahan Baku</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?=site_url('bahan_baku/update/'.$bahan_baku->id_bahan_baku)?>" method="post" autocomplete="off"
     enctype="multipart/form-data">
     <input type="hidden" name="_method" value="PUT">
     <div class="form-group">
      <label>Nama Bahan Baku*</label>
      <textarea name="nama_bahan_baku" class="form-control" style="width: 100%; height: auto; min-height: 150px;"
       required autofocus><?= $bahan_baku->nama_bahan_baku ?></textarea>
     </div>
     <div class="form-group">
      <label>Harga Bahan Baku*</label>
      <div class="input-group">
       <div class="input-group-prepend">
        <span class="input-group-text">Rp.</span>
       </div>
       <input type="number" name="harga_bahan" value="<?= $bahan_baku->harga_bahan ?>" class="form-control" required>
      </div>
     </div>

     <div class="form-group">
      <label>Stok Bahan Baku*</label>
      <input type="number" name="stok" value="<?=$bahan_baku->stok?>" class="form-control" required>
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