



<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Tambah Data Calon</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('Data/save_calon/'); ?>
           
            
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="calon" class="">Nama Calon</label>
                  <input type="text" name="calon" class="form-control" placeholder="Nama Calon..">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="jk" class="">Jenis - Kelamin</label>
                  <select name="jk" class="form-control">
                    <option value="1">LAKI-LAKI</option>
                    <option value="2">PEREMPUAN</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kecamatan" class="">Kecamatan</label>
                  <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan..">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="desa" class="">Desa</label>
                  <input type="text" name="desa" class="form-control" placeholder="Desa..">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="nomor" class="">No. Urut</label>
                  <select name="nomor" class="form-control">
                    <option>PILIH No. Urut</option>
                    <option  value="1">1</option>
                    <option  value="2">2</option>
                    <option  value="3">3</option>
                    <option  value="4">4</option>
                    <option  value="5">5</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="status" class="">Status</label>
                  <input type="text" name="status" class="form-control" placeholder="Status..">
                </div>
              </div>
            </div>
          <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="nw" class="">No. Wilayah</label>
                  <select name="nw" class="form-control">
                    <option>PILIH No. Wilayah</option>
                    <option  value="1">1</option>
                    <option  value="2">2</option>
                    <option  value="3">3</option>
                    <option  value="4">4</option>
                    <option  value="5">5</option>
                    <option  value="6">6</option>
                    <option  value="7">7</option>
                    <option  value="8">8</option>
                    <option  value="9">9</option>
                    <option  value="10">10</option>
                    <option  value="11">11</option>
                    <option  value="12">12</option>
                    <option  value="13">13</option>
                    <option  value="14">14</option>
                    <option  value="15">15</option>
                    <option  value="16">16</option>
                    <option  value="17">17</option>
                    <option  value="18">18</option>
                    <option  value="19">19</option>
                    <option  value="20">20</option>
                    <option  value="21">21</option>
                    <option  value="22">22</option>
                    <option  value="23">23</option>
                    <option  value="24">24</option>
                    <option  value="25">25</option>
                    <option  value="26">26</option>
                    <option  value="27">27</option>
                    <option  value="28">28</option>
                    <option  value="29">29</option>
                    <option  value="30">30</option>
                    <option  value="31">31</option>
                    <option  value="32">32</option>
                    <option  value="33">33</option>
                    <option  value="34">34</option>
                    <option  value="35">35</option>
                    <option  value="36">36</option>
                    <option  value="37">37</option>
                    <option  value="38">38</option>
                    <option  value="39">39</option>
                    <option  value="40">40</option>
                  </select>
                </div>
              </div>
            </div>
         
           
          <br><br>
         
                
                <a href="<?php echo base_url('Data/calon'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data Calon</button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        