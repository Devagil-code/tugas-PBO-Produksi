<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Proses Produksi</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?=site_url('produksi')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Proses Produksi</h1>
 </div>
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Proses Produksi</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?=site_url('produksi')?>" method="post" autocomplate="off">
     <div class="form-group">
      <label>Nama Pelanggan*</label>
      <select name="id_pesanan" class="form-control" required>
       <option value="" hidden></option>
       <?php foreach ($pesanan_produk as $key => $value) : ?>
       <option value="<?=$value->id_pesanan?>"><?=$value->nama_pelanggan?></option>
       <?php endforeach;?>
      </select>
     </div>
     <div class="form-group">
      <label>Pesanan*</label>
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
      <label>Jumlah Produksi*</label>
      <input type="number" name="jumlah_produksi" class="form-control" required>
     </div>
     <div class="form-group">
      <label>Tanggal Produksi*</label>
      <input type="date" name="tanggal_produksi" class="form-control" required>
     </div>
     <div class="form-group">
      <label>Bahan Baku Mentah/Jadi*</label>
      <select name="id_pemilihan" class="form-control" required>
       <option value="" hidden></option>
       <?php foreach ($pemilihan_bahan_baku as $key => $value) : ?>
       <option value="<?=$value->id_pemilihan?>"><?=$value->pilih_bahan?></option>
       <?php endforeach;?>
      </select>
     </div>
     <div class="form-group">
      <label>Bahan Baku*</label>
      <select name="nama_bahan_baku" class="form-control" required>
       <option value="" hidden></option>
       <?php foreach ($bahan_baku as $key => $value) : ?>
       <option value="<?=$value->nama_bahan_baku?>"><?=$value->nama_bahan_baku?></option>
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