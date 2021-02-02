



<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Tambah Data Petugas</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('Data/save_petugas/'); ?>
           
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="status_users" class="">Status Pengguna</label>
                  <select name="status_users" class="form-control">
                    <option>-- PILIH STATUS PENGGUNA</option>
                    <option value="1">ADMIN</option>
                    <option value="2">PETUGAS PENGINPUTAN SUARA</option>
                  </select>
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_calon" class="">Kecamatan Penginputan Suara</label>
                  <select name="id_calon" class="form-control">
                    <option>-- PILIH NOMOR WILAYAH PENGINPUTAN --</option>
                    <?php foreach ($wc as $wi): ?>
                      <option value="<?php echo $wi->id_calon ?>"><?php echo $wi->nw ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_wilayah" class="">Kecamatan Petugas</label>
                  <select name="id_wilayah" class="form-control">
                    <option>-- PILIH KECAMATAN PETUGAS --</option>
                    <?php foreach ($wp as $wpp): ?>
                      <option value="<?php echo $wpp->id_wilayah ?>"><?php echo $wpp->kecamatan ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
            <!-- <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_desa" class="">Desa Petugas</label>
                  <select name="id_desa" class="form-control">
                    <option>-- PILIH DESA PETUGAS --</option>
                    <?php foreach ($dp as $dpp): ?>
                      <option value="<?php echo $dpp->id_desa ?>"><?php echo $dpp->desa ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div> -->
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="status_akun" class="">Status Akun</label>
                  <select name="status_akun" class="form-control">
                    <option>-- PILIH STATUS AKUN PETUGAS</option>
                    <option value="1">AKTIF</option>
                    <option value="2">TIDAK AKTIF</option>
                  </select>
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="nama" class="">Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Petugas..">
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="username" class="">Usename</label>
                  <input type="username" name="username" class="form-control" placeholder="Usename Petugas..">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="password" class="">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password Masuk Sistem..">
                </div>
              </div>
            </div>
           
            
          <br><br><br>
         
                
                <a href="<?php echo base_url('Data/petugas'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data Petugas</button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        