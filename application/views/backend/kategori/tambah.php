



<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Tambah Data Kategori</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('Data/save_kategori'); ?>
           
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="nama_kategori" class="">Nama Kategori</label>
                  <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori..">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="jenis_kategori" class="">Jenis Kategori</label>
                  <input type="text" name="jenis_kategori" class="form-control" placeholder="Jenis Kategori..">
                </div>
              </div>
            </div>
          <br><br>
         
                
                <a href="<?php echo base_url('Data/kategori'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data Kategori</button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        