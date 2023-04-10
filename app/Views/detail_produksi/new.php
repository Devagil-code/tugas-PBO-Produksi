<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Masukan Data Detail Produksi</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?=site_url('detail_produksi')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Masukan Data Detail Produksi</h1>
 </div>
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Masukan Data Detail Produksi</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?=site_url('detail_produksi')?>" method="post" autocomplate="off">
    <div class="form-group">
    <label>Nama Produk*</label>
    <select name="id_produk" class="form-control" required>
        <option value="" hidden></option>
        <?php foreach ($produk as $key => $value) : ?>
         <option value="<?=$value->id_produk?>"><?=$value->nama_produk?></option>    
        <?php endforeach;?>     
    </select>
    </div>
    <div class="form-group">
    <label>Jumlah Produksi*</label>
    <select name="id_produksi" class="form-control" required>
        <option value="" hidden></option>
        <?php foreach ($produksi as $key => $value) : ?>
         <option value="<?=$value->id_produksi?>"><?=$value->jumlah_produksi?></option>    
        <?php endforeach;?>     
    </select>
    </div>
    <div class="form-group">
    <label>Nama Bahan Baku*</label>
    <select name="id_bahan_baku" class="form-control" required>
        <option value="" hidden></option>
        <?php foreach ($bahan_baku as $key => $value) : ?>
         <option value="<?=$value->id_bahan_baku?>"><?=$value->nama_bahan_baku?></option>    
        <?php endforeach;?>     
    </select>
    </div>
     <div class="form-group">
    <label>Tanggal Produksi*</label>
    <select name="id_produksi" class="form-control" required>
        <option value="" hidden></option>
        <?php foreach ($produksi as $key => $value) : ?>
         <option value="<?=$value->id_produksi?>"><?=$value->tanggal_produksi?></option>    
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