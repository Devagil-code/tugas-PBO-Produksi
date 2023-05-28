<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Proses Packing</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?= site_url('packing') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Proses Packing</h1>
 </div>
 <div class="section-body">
  <div class="card">
   <div class="card-header">
    <h4>Proses Packing</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?= site_url('qc_tes') ?>" method="post" autocomplete="off">
     <div class="form-group">
      <label>Produk*</label>
      <select name="id_pesanan" class="form-control" required>
       <option value="" hidden></option>
       <?php foreach ($pesanan_produk as $key => $value) : ?>
       <option value="<?= $value->id_pesanan ?>"><?= $value->produk_dipesan ?></option>
       <?php endforeach; ?>
      </select>
     </div>
     <div class="form-group">
      <label>Gambar*</label>
      <select name="id_pesanan" class="form-control" required>
       <option value="" hidden></option>
       <?php foreach ($pesanan_produk as $key => $value) : ?>
       <?php
                $gambar = basename($value->gambar); // Mengambil nama file dari path gambar
                ?>
       <option value="<?= $value->id_pesanan ?>">
        <div class="gambar-option">
         <img src="<?= $value->gambar ?>" alt="<?= $gambar ?>" class="gambar-thumbnail">
         <?= $gambar ?>
        </div>
       </option>
       <?php endforeach; ?>
      </select>
     </div>
     <div class="form-group">
      <label>Tanggal Produksi*</label>
      <select name="id_produksi" class="form-control" required>
       <option value="" hidden></option>
       <?php foreach ($produksi as $key => $value) : ?>
       <option value="<?= $value->id_produksi ?>"><?= $value->tanggal_produksi ?></option>
       <?php endforeach; ?>
      </select>
     </div>
     <div class="form-group">
      <label>Hasil Tes*</label>
      <select name="hasil_tes" class="form-control" required>
       <option value="" disabled selected>Hasil Tes</option>
       <?php foreach ($qc_tes as $key => $value) : ?>
       <option value="<?= $value->hasil_tes ?>" selected><?= $value->hasil_tes ?></option>
       <?php endforeach; ?>
      </select>
     </div>
     <div class="form-group">
      <label>Tanggal Packing*</label>
      <input type="date" name="tanggal_packing" class="form-control" required>
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

<style>
.gambar-option {
 display: flex;
 align-items: center;
}

.gambar-thumbnail {
 width: 50px;
 height: auto;
 margin-right: 10px;
}
</style>

<?= $this->endSection() ?>