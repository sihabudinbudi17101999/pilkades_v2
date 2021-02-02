

<main class="container">

<!--   <div class="starter-template text-center py-5 px-3">
    <h1>Topik</h1>
    <p class="lead">Dalam Perbaikan</p>
  </div>
 -->

<!-- //form cari --><br>
<div class="col-sm-12" >
  <p>FORM PENCARIAN PERHITUNGAN SUARA</p>
<?php echo form_open('Pages/cperhitungan_suara'); ?>

<div class="row">
  <div class="col-lg-3" style="margin-bottom: 10px;">
    <select name="c1" class="form-control">
      <option>PILIH KECAMATAN</option>
      <?php foreach ($carikec as $k): ?>
        <option value="<?php echo $k->id_calon ?>"><?php echo $k->kecamatan ?></option>
      <?php endforeach ?>
    </select>
  </div>
 
  <div class="col-lg-3">
    <button type="submit" class="btn btn-primary">Cari...</button>
  </div>
  <br><br><br>
</div>
<?php echo form_close(); ?>
</div> <!-- akhir row -->
<br>

<div  id="chartContainer" style="height: 330px; width: 80%;"></div>
<br><br>



<!-- <div class="col-sm-12">
      
<table class="table table-bodered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">KECAMATAN</th>
      <th scope="col">JUMLAH SUARA</th>
    </tr>
  </thead>
  <?php $i //=1;  foreach ($datascalonall as $r) {?>
  <tbody>
    <tr>
      <td><?php echo $i; ?></td>
      <td><a href="<?php echo base_url('Pages/detail1/'.$r->id_calon) ?>"><?php echo $r->nama_kecamatan ?></a></td>
      <td><?php echo $r->skor ?></td>
    </tr>
   
  </tbody>
  <?php // $i++; } ?>
</table>
</div> -->
<!-- akhir col -->
<br>


<!-- <div class="row">
<?php //foreach ($datascalon as $dc): ?>
  

  <div class="col-sm-3" style="margin-top: 15px;">
    <div class="card">
      <img height="250" src="<?php echo base_url('assets/img/user1.png'); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $dc->nama_calon ?></h5>
        <p class="card-text"><?php echo $dc->jenis_penyalonan ?></p>
        <a href="#" class="btn btn-primary">-> Lihat Skor Suara</a>
      </div>
    </div>
  </div>
<?php //endforeach ?>


</div><br>
 -->

</main>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>


</body>
</html>
