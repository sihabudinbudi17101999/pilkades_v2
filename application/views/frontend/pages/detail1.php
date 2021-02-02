
<main class="container">

<!--   <div class="starter-template text-center py-5 px-3">
    <h1>Topik</h1>
    <p class="lead">Dalam Perbaikan</p>
  </div>
 -->
<!-- //form cari -->
<div class="col-sm-12" >
  <p>FORM PENCARIAN PERHITUNGAN SUARA</p>
<?php echo form_open('Pages/cperhitungan_suara'); ?>

<div class="row">
  <div class="col-lg-3" style="margin-bottom: 10px;">
    <select name="c1" class="form-control">
      <option>PILIH KECAMATAN</option>
      <?php $kec = $this->db->get('tb_kecamatan')->result(); ?>
      <?php foreach ($kec as $k): ?>
        <option value="<?php echo $k->id_kecamatan ?>"><?php echo $k->nama_kecamatan ?></option>
      <?php endforeach ?>
    </select>
  </div>
 
  <div class="col-lg-3">
    <button type="submit" class="btn btn-primary">Cari...</button>
  </div>
  <br><br><br>
</div>
<?php echo form_close(); ?>
</div>
<br><br>



<div class="row">
  <div class="col-lg-12">
    
<table class="table table-bodered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">DESA</th>
      <th scope="col">CALON</th>
      <th scope="col">JUMLAH SUARA</th>
    </tr>
  </thead>
  <?php $i=1;  foreach ($detail1 as $r) {?>
  <tbody>
    <tr>
      <!-- <th scope="row">1</th> -->
      <td><?php echo $i; ?></td>
      <td><a href="<?php echo base_url('Pages/detail2/'.$r->id_calon) ?>"><?php echo $r->desa ?></a></td>
      <td><?php echo $r->calon ?></td>
      <td><?php echo $r->jumlah_suara ?></td>
    </tr>
   
  </tbody>
  <?php $i++; } ?>
</table>

  </div>
</div>


</main>




</body>
</html>
