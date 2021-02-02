



<div class="app-main__outer">
    <div class="app-main__inner">

<?php foreach ($datas as $r): ?>
  


 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Edit Data Perhitungan Suara</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
           <?php if ($this->session->userdata('status_users')=="ADMIN") {?>
              <?php echo form_open('Data/update_perhitungan_suara/'.$r->id_hasil); ?>
           


           <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_wilayah" class="">Kecamatan</label>
                  <select name="id_wilayah" class="form-control">
                    <?php foreach ($tampilwisk as $kec): ?>
                      <?php $selected = ($r->id_wilayah == $kec->id_wilayah)?"selected":"" ?>
                      <option value="<?php echo $kec->id_wilayah ?>" <?php echo $selected ?>><?php echo $kec->kecamatan ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_wilayah" class="">Desa</label>
                  <select name="id_wilayah" class="form-control">
                    <?php foreach ($tampilwisd as $des): ?>
                      <?php $selected = ($r->id_wilayah == $des->id_wilayah)?"selected":"" ?>
                      <option value="<?php echo $des->id_wilayah ?>" <?php echo $selected ?>><?php echo $des->desa ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_calon" class="">Nama Calon</label>
                  <select name="id_calon" class="form-control">
                    <option>-- PILIH CALON --</option>
                    <?php $calon = $this->db->get('tb_calon')->result(); ?>
                    <?php foreach ($calon as $c): ?>
                      <?php $selected = ($r->id_calon == $c->id_calon)?"selected":"" ?>
                      <option value="<?php echo $c->id_calon ?>" <?php echo $selected ?>><?php echo $c->nomor." - ". $c->calon." - ".$c->kecamatan." - ".$c->desa; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
          
          
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="tps" class="">Tps</label>
                  <input type="text" name="tps"  class="form-control" placeholder="Tps" value="<?php echo $r->tps ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="jumlah_suara" class="">jumlah Suara</label>
                  <input type="number" name="jumlah_suara"  class="form-control" placeholder="Jumlah Suara.." value="<?php echo $r->jumlah_suara ?>">
                </div>
              </div>
            </div>
          <br><br>
         
                
                <a href="<?php echo base_url('Data/perhitungan_suara'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data Suara</button>
                <!-- </form> -->
                <?php echo form_close(); ?>
           <?php }elseif ($this->session->userdata('status_users')=="PETUGAS") {?>
              <?php echo form_open('P/update_perhitungan_suaraa/'.$r->id_hasil); ?>
           


          <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_wilayah" class="">Kecamatan</label>
                  <select name="id_wilayah" class="form-control">
                    <?php foreach ($tampilwisk as $kec): ?>
                      <?php $selected = ($r->id_wilayah == $kec->id_wilayah)?"selected":"" ?>
                      <option value="<?php echo $kec->id_wilayah ?>" <?php echo $selected ?>><?php echo $kec->kecamatan ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_wilayah" class="">Desa</label>
                  <select name="id_wilayah" class="form-control">
                    <?php foreach ($tampilwisD as $des): ?>
                      <?php $selected = ($r->id_wilayah == $des->id_wilayah)?"selected":"" ?>
                      <option value="<?php echo $des->id_wilayah ?>" <?php echo $selected ?>><?php echo $des->desa ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_calon" class="">Nama Calon</label>
                   <select name="id_calon" class="form-control">
                    <option>-- PILIH CALON --</option>
                    <?php $calon = $this->db->get('tb_calon')->result(); ?>
                    <?php foreach ($calon as $c): ?>
                      <?php $selected = ($r->id_calon == $c->id_calon)?"selected":"" ?>
                      <option value="<?php echo $c->id_calon ?>"><?php echo $c->nomor." - ". $c->calon." - ".$c->kecamatan." - ".$c->desa; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
          
          
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="tps" class="">Tps</label>
                  <input type="text" name="tps"  class="form-control" placeholder="Tps" value="<?php echo $r->tps ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="jumlah_suara" class="">jumlah Suara</label>
                  <input type="number" name="jumlah_suara"  class="form-control" placeholder="Jumlah Suara.." value="<?php echo $r->jumlah_suara ?>">
                </div>
              </div>
            </div>
          <br><br>
         
                
                <a href="<?php echo base_url('P/data_perhitungan_calon'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data Suara</button>
                <!-- </form> -->
                <?php echo form_close(); ?>
           <?php } ?>
                </div>
                </div>
                
<?php endforeach ?>


              </div>
            </div>
          </div>
        