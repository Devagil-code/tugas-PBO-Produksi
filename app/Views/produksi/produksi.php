<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Produksi</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <h1>Produksi</h1>
  <div class="seaction-header-button">
   <a href="<?=site_url('produksi/tambah_produksi')?>" class="btn btn-primary"> Add New</a>
  </div>
 </div>

 <?php if(session()->getFlashdata('success')) :?>
 <div class="alert alert-success alert-dismissible show fade">
  <div class="alert-body">
   <button class="close" data-dismiss="alert">x</button>
   <b>Success !</b>
   <?=session()->getFlashdata('success')?>
  </div>
 </div>
 <?php endif; ?>

 <div class="section-body">

  <div class="card">
   <div class="card-header">
    <h4>Data Produksi</h4>
   </div>
   <div class="text-center card-body table-responsive">
    <table class="table table-striped table-md">
     <tbody>
      <tr>
       <th>No</th>
       <th>nama bahan baku</th>
       <th>jumlah produksi</th>
       <th>tanggal produksi</th>
       <th>Action</th>
      </tr>
      <?php foreach ($produksi as $key => $value) : ?>
      <tr>
       <td><?=$key + 1 ?></td>
       <td><?=$value->id_bahan_baku?></td>
       <td><?=$value->jumlah_produksi?></td>
       <td><?=$value->tanggal_produksi?></td>
       <td class="text-center" style="width:15%">
        <a href="<?=site_url('produksi/edit/'.$value->id_produksi)?>" class="btn btn-warning btn-sm"> <i
          class="fas fa-pencil-alt"></i></a>
        <form action="<?=site_url('produksi/'.$value->id_produksi)?>" method="post" class="d-inline"
         onsubmit="return confirm('Yakin Hapus Data?')">
         <input type="hidden" name="_method" value="DELETE">
         <button href="" class=" btn btn-danger btn-sm">
          <i class="fas fa-trash"></i>
         </button>
        </form>
       </td>
      </tr>
      <?php endforeach; ?>
     </tbody>
    </table>
   </div>
  </div>

 </div>
</section>
<?= $this->endSection() ?>