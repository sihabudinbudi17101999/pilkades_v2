



<div class="app-main__outer">
    <div class="app-main__inner">

<?php foreach ($datas as $r): ?>
  


 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Edit Data Petugas</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('Data/update_petugas/'.$r->id_user); ?>
           
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="status_akun" class="">Status Akun</label>
                  <select name="status_akun" class="form-control">
                    <option>-- PILIH STATUS AKUN PETUGAS</option>
                    <option <?php echo ($r->status_akun == 'AKTIF')?"selected":"" ?> value="1">AKTIF</option>
                    <option <?php echo ($r->status_akun == 'TIDAK AKTIF')?"selected":"" ?> value="2">TIDAK AKTIF</option>
                  </select>
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="status_users" class="">Status Pengguna</label>
                  <select name="status_users" class="form-control">
                    <option>-- PILIH STATUS PENGGUNA</option>
                    <option <?php echo ($r->status_users == 'ADMIN')?"selected":"" ?> value="1">ADMIN</option>
                    <option <?php echo ($r->status_users == 'PETUGAS')?"selected":"" ?> value="2">PETUGAS PENGINPUTAN SUARA</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_calon" class="">Kecamatan</label>
                  <select name="id_calon" class="form-control">
                    <?php foreach ($w as $wi): ?>
                      <?php $selected = ($r->id_calon == $wi->id_calon)?"selected":"" ?>
                      <option value="<?php echo $wi->id_calon ?>" <?php echo $selected ?>><?php echo $wi->nw ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="nama" class="">Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Petugas.." value="<?php echo $r->nama ?>">
                </div>
              </div>
            </div>
               <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="username" class="">Usename</label>
                  <input type="username" name="username" class="form-control" placeholder="Usename Petugas.." value="<?php echo $r->username ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="password" class="">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password Masuk Sistem.." value="<?php echo $r->password ?>">
                </div>
              </div>
            </div>
           
          <br><br>
         
                
                <a href="<?php echo base_url('Data/petugas'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data Petugas</button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                

<?php endforeach ?>

              </div>
            </div>
          </div>
        