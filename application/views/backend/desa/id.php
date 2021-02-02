



<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Upload Data Desa</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open_multipart('Impt/id'); ?>
           
            
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="file" >Import Data Desa Dari Excel. <br> Tekan Tombol Chooce File Untuk Memilih Dan Mengupload File Excel.!</label><br><br>
                  <input type="file" name="file" >
                </div>
              </div>
            </div>
           
          <br>
         
                
                <a href="<?php echo base_url('Data/desa'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Upload Data Desa</button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        