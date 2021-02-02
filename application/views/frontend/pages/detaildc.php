
<main class="container">

<!--   <div class="starter-template text-center py-5 px-3">
    <h1>Topik</h1>
    <p class="lead">Dalam Perbaikan</p>
  </div>
 -->


<!-- //form cari --><br>
<div class="col-sm-12" >
  <!-- <p>FORM PENCARIAN PERHITUNGAN SUARA</p> -->
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
<br>





<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">  
    <div class="col-md-4">
      <img height="250" src="<?php echo base_url('assets/img/user1.png'); ?>" class="card-img-top" alt="...">
    </div>

    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DESA</th>
      <th scope="col">TPS</th>
      <th scope="col">SKOR SUARA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Tes Desa</td>
      <td>TES TPS</td>
      <td>@TES SKOR</td>
    </tr>
    
  </tbody>
</table>

<br><br>



</main>




</body>
</html>
