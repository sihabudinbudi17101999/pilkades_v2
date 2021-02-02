



<div class="app-main__outer">
    <div class="app-main__inner">

<?php foreach ($datas as $r): ?>
  


 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Edit Data Desa</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
           
              <?php echo form_open('Data/update_desa/'.$r->id_desa); ?>
           

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="desa" class="">Desa</label>
                  <input type="text" name="desa"  class="form-control" placeholder="Desa.." value="<?php echo $r->desa ?>">
                </div>
              </div>
            </div>
          <br><br>
         
                
                <a href="<?php echo base_url('Data/desa'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data desa</button>
                <!-- </form> -->
                <?php echo form_close(); ?>

                </div>
                </div>
                
<?php endforeach ?>


              </div>
            </div>
          </div>
        