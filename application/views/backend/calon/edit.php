



<div class="app-main__outer">
    <div class="app-main__inner">

<?php foreach ($datas as $r): ?>
  
 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Edit Data Calon</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
          <?php if ($this->session->userdata('status_users')=="ADMIN") {?>
              <?php echo form_open('Data/update_calon/'.$r->id_calon); ?>
           

              <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="calon" class="">Nama Calon</label>
                  <input type="text" name="calon" class="form-control" placeholder="Nama Calon.." value="<?php echo $r->calon ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="jk" class="">Jenis - Kelamin</label>
                  <select name="jk" class="form-control">
                    <option <?php echo ($r->jk == 'LAKI-LAKI')?"selected":"" ?> value="1">LAKI-LAKI</option>
                    <option <?php echo ($r->jk == 'PEREMPUAN')?"selected":"" ?> value="2">PEREMPUAN</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kecamatan" class="">Kecamatan</label>
                  <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan.." value="<?php echo $r->kecamatan ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="desa" class="">Desa</label>
                  <input type="text" name="desa" class="form-control" placeholder="Desa.." value="<?php echo $r->desa ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="nomor" class="">No. Urut</label>
                  <select name="nomor" class="form-control">
                    <option>PILIH No. Urut</option>
                    <option <?php echo ($r->nomor == '1')?"selected":"" ?> value="1">1</option>
                    <option <?php echo ($r->nomor == '2')?"selected":"" ?> value="2">2</option>
                    <option <?php echo ($r->nomor == '3')?"selected":"" ?> value="3">3</option>
                    <option <?php echo ($r->nomor == '4')?"selected":"" ?> value="4">4</option>
                    <option <?php echo ($r->nomor == '5')?"selected":"" ?> value="5">5</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="status" class="">Status</label>
                  <input type="text" name="status" class="form-control" placeholder="Status.." value="<?php echo $r->status ?>">
                </div>
              </div>
            </div>
        
          <br><br>
         
                
                <a href="<?php echo base_url('Data/calon'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data Calon</button>
                <!-- </form> -->
                <?php echo form_close(); ?>
         <?php  }elseif ($this->session->userdata('status_users')=="PETUGAS") {?>
             <?php echo form_open('P/update_perhitungan_suara/'.$r->id_calon); ?>
           

             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="calon" class="">Nama Calon</label>
                  <input type="text" name="calon" class="form-control" placeholder="Nama Calon.." value="<?php echo $r->calon ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="jk" class="">Jenis - Kelamin</label>
                  <select name="jk" class="form-control">
                    <option <?php echo ($r->jk == 'LAKI-LAKI')?"selected":"" ?> value="1">LAKI-LAKI</option>
                    <option <?php echo ($r->jk == 'PEREMPUAN')?"selected":"" ?> value="2">PEREMPUAN</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kecamatan" class="">Kecamatan</label>
                  <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan.." value="<?php echo $r->kecamatan ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="desa" class="">Desa</label>
                  <input type="text" name="desa" class="form-control" placeholder="Desa.." value="<?php echo $r->desa ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="nomor" class="">No. Urut</label>
                  <select name="nomor" class="form-control">
                    <option>PILIH No. Urut</option>
                    <option <?php echo ($r->nomor == '1')?"selected":"" ?> value="1">1</option>
                    <option <?php echo ($r->nomor == '2')?"selected":"" ?> value="2">2</option>
                    <option <?php echo ($r->nomor == '3')?"selected":"" ?> value="3">3</option>
                    <option <?php echo ($r->nomor == '4')?"selected":"" ?> value="4">4</option>
                    <option <?php echo ($r->nomor == '5')?"selected":"" ?> value="5">5</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="status" class="">Status</label>
                  <input type="text" name="status" class="form-control" placeholder="Status.." value="<?php echo $r->status ?>">
                </div>
              </div>
            </div>
        
         
          
          <br><br>
         
                
                <a href="<?php echo base_url('P/data_perhitungan_calon'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data Calon</button>
                <!-- </form> -->
                <?php echo form_close(); ?>
        <?php  } ?>
                </div>
                </div>
 
 <?php endforeach ?>               



              </div>
            </div>
          </div>
        