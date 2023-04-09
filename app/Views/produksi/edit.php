<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Produksi</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="seaction-header-back">
   <a href="<?=site_url('produksi')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Update Produksi</h1>
 </div>
 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Update Data Produksi</h4>
   </div>
   <div class="card-body col-md-5">
    <form action="<?=site_url('produksi/update/'.$produksi->id_produksi)?>" method="post" autocomplate="off">
     <input type="hidden" name="_method" value="PUT">
     <div class="form-group">
    <label>bahan baku*</label>
    <select name="id_bahan_baku" class="form-control" required>
        <option value="" hidden></option>
        <?php foreach ($bahan_baku as $key => $value) : ?>
         <option value="<?=$value->id_bahan_baku?>" <?=$produksi->id_bahan_baku == $value->id_bahan_baku ? 'selected' : null?>>
         <?=$value->nama_bahan_baku?>
        </option>    
        <?php endforeach;?>     
    </select>
     </div>

     <div class="form-group">
      <label>jumlah Produksi*</label>
      <input type="number" name="jumlah_produksi" value="<?=$produksi->jumlah_produksi?>" class="form-control" required
       >
     </div>
     <div class="form-group">
      <label>tanggal Produksi*</label>
      <input type="date" name="tanggal_produksi" value="<?=$produksi->tanggal_produksi?>" class="form-control"
       required>
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