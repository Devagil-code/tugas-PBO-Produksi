<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Pilih Bahan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?=site_url('pemilihan_bahan_baku')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Pilih Bahan</h1>
 </div>
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Pilih Bahan</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?=site_url('pemilihan_bahan_baku')?>" method="post" autocomplate="off">
     <div class="form-group">
      <label>Produk*</label>
      <select name="id_pesanan" class="form-control" required>
       <option value="" hidden></option>
       <?php foreach ($pesanan_produk as $key => $value) : ?>
       <option value="<?=$value->id_pesanan?>"><?=$value->produk_dipesan?></option>
       <?php endforeach;?>
      </select>
     </div>
     <div class="form-group">
      <label>Gambar*</label>
      <select name="id_pesanan" class="form-control" required>
       <option value="" hidden></option>
       <?php foreach ($pesanan_produk as $key => $value) : ?>
       <?php
        $gambarName = basename($value->gambar); // Mengambil nama file dari path gambar
      ?>
       <option value="<?=$value->id_pesanan?>"><?=$gambarName?></option>
       <?php endforeach;?>
      </select>
     </div>
     <div class="form-group">
      <label>Tipe Bahan Baku*</label>
      <select name="pilih_bahan" class="form-control" required>
       <option value="" disabled selected>Pilih Tipe Bahan Baku</option>
       <option value="Bahan Baku Jadi">Bahan Baku Jadi</option>
       <option value="Bahan Baku Mentah">Bahan Baku Mentah</option>
      </select>
     </div>
     <div class="form-group">
      <label>Bahan Baku*</label>
      <select name="id_bahan_baku" class="form-control" required>
       <option value="" hidden></option>
       <?php foreach ($bahan_baku as $key => $value) : ?>
       <option value="<?=$value->id_bahan_baku?>"><?=$value->nama_bahan_baku?></option>
       <?php endforeach;?>
      </select>
     </div>
     <div class="form-group">
      <label>Harga*</label>
      <div class="input-group-prepend">
       <span class="input-group-text">Rp.</span>
       <select name="id_bahan_baku" class="form-control" required>
        <option value="" hidden></option>
        <?php foreach ($bahan_baku as $key => $value) : ?>
        <option value="<?=$value->id_bahan_baku?>"><?=$value->harga_bahan?></option>
        <?php endforeach;?>
       </select>
      </div>
      <br>
      <div class="form-group">
       <label>Stok*</label>
       <select name="id_bahan_baku" class="form-control" required>
        <option value="" hidden></option>
        <?php foreach ($bahan_baku as $key => $value) : ?>
        <option value="<?=$value->id_bahan_baku?>"><?=$value->stok?></option>
        <?php endforeach;?>
       </select>
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