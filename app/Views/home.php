<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>PRODPLAP</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <h1>Dashboard</h1>
 </div>
 <div class="section-body">
  <div class="row">
   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
     <div class="card-icon bg-primary">
      <i class="bi bi-hurricane text-white" style="font-size: 3rem;"></i>
     </div>
     <div class="card-wrap">
      <div class="card-header">
       <h4>Pesanan Produk</h4>
      </div>
      <div class="card-body">
       <?=countData('pesanan_produk')?>
      </div>
     </div>
    </div>
   </div>
   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
     <div class="card-icon bg-danger">
      <i class="bi bi-minecart-loaded" style="font-size: 3rem; color: white;"></i>
     </div>
     <div class="card-wrap">
      <div class="card-header">
       <h4>Bahan baku</h4>
      </div>
      <div class="card-body">
       <?=countData('pemilihan_bahan_baku')?>
      </div>
     </div>
    </div>
   </div>
   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
     <div class="card-icon bg-warning">
      <i class="bi bi-boxes" style="font-size: 3rem; color: white;"></i>
     </div>
     <div class="card-wrap">
      <div class="card-header">
       <h4>produksi</h4>
      </div>
      <div class="card-body">
       <?=countData('produksi')?>
      </div>
     </div>
    </div>
   </div>
   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
     <div class="card-icon bg-success">
      <i class="bi bi-book" style="font-size: 3rem; color: white;"></i>
     </div>
     <div class="card-wrap">
      <div class="card-header">
       <h4>Packing</h4>
      </div>
      <div class="card-body">
       <?=countData('packing')?>
      </div>
     </div>
    </div>
   </div>
  </div>

 </div>
</section>
<?= $this->endSection() ?>