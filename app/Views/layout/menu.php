<li class="menu-header">Main Menu</li>
<li><a class="nav-link" href="<?=site_url()?>"><i class="bi bi-house-fill"></i> <span>Dashboard</span></a></li>
<li class="menu-header">Proses Pesanan/Permintaan</li>
<li><a class="nav-link" href="<?=site_url('pesanan_produk')?>"><i class="bi bi-hurricane"></i><span>Pesanan
   Produk</span></a>
</li>
<li class="menu-header">Bahan Baku</li>
<li class="nav-item dropdown">
 <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Proses
   Bahan</span></a>
 <ul class="dropdown-menu">
  <li><a class="nav-link" href="<?=site_url('bahan_baku')?>">Bahan Baku</a></li>
  <li><a class="nav-link" href="<?=site_url('pemilihan_bahan_baku')?>">Pemilihan Bahan Baku</a></li>
 </ul>
</li>
<li class="menu-header">Produksi</li>
<li class="nav-item dropdown">
 <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Proses
   Produksi</span></a>
 <ul class="dropdown-menu">
  <li><a class="nav-link" href="<?=site_url('produksi')?>"><i class="bi bi-book"></i> <span>Produksi</span></a></li>
  <li><a class="nav-link" href="<?=site_url('qc_tes')?>"><i class="bi bi-journal-bookmark"></i> <span>QC Tes</span></a>
 </ul>
</li>
<li class="menu-header">Pengemasan/packing</li>
<li><a class="nav-link" href="<?=site_url('Packing')?>"><i class="bi bi-journal-bookmark"></i> <span>Packing</span></a>
</li>