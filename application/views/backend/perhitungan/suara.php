
<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Data Perhitungan Suara Calon</h5>
            <div class="col-lg-6"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <?php if ($this->session->userdata('status_users')=="ADMIN") {?>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <a style="font-size: 12px;" href="<?php echo base_url('Data/tambah_perhitungan_suara'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Data Perhitungan Suara</a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <?php echo form_open('Rekap/downloads','target="_blank"'); ?>
                                                                <div class="form-row">
                                                                      <div  class="col-md-10">
                                                                        <div  class="position-relative form-group">
                                                                            <!-- <label for="c1" class="">DESA</label> -->
                                                                          <select required style="font-size: 15px;" class=""  name="c1" class="form-control">
                                                                            <option>-- PILIH KECAMATAN --</option>
                                                                            <?php foreach ($tampilwisk as $k): ?>
                                                                                <option  value="<?php echo $k->id_wilayah ?>"><?php echo $k->kecamatan ?></option>
                                                                            <?php endforeach ?>
                                                                          </select>
                                                                          &nbsp;
                                                                          <select required style="font-size: 15px;" class=""  name="c2" class="form-control">
                                                                            <option>-- PILIH  DESA --</option>
                                                                            <?php foreach ($tampilwisd as $d): ?>
                                                                                <option  value="<?php echo $d->id_wilayah ?>"><?php echo $d->desa ?></option>
                                                                            <?php endforeach ?>
                                                                          </select>
                                                                          &nbsp;
                                                                          <button style="font-size: 12px;" type="submit" class="btn btn-warning btn-sm"><i class="fas fa-print"></i> Print</button>
                                                                        </div>
                                                                        
                                                                      </div>
                                                                      <!-- <div  class="col-md-6">
                                                                        
                                                                      </div> -->

                                                                    </div>
                                                             <?php echo form_close(); ?>
                                                </div>
                                            </div>
                                            
                                                <?php  }elseif ($this->session->userdata('status_users')=="PETUGAS") {?>
                                                    <div class="row">
                                            <div class="col-lg-6">
                                                    <a style="font-size: 12px;" href="<?php echo base_url('P/tambah_perhitungan_suaraa'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Data Perhitungan Suara</a>
                                                </div>
                                                </div>
                                                <?php } ?>
                                        <!-- </div> -->
                                        </h5>
                                        <div class="table-responsive">
                                        <table class="mb-0 table">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">NAMA CALON</th>
                                                <th style="text-align: center; font-size: 12px;">NO URUT</th>
                                                <th style="text-align: center; font-size: 12px;">TPS</th>
                                                <th style="text-align: center; font-size: 12px;">KECAMATAN</th>
                                                <th style="text-align: center; font-size: 12px;">DESA</th>
                                                <th style="text-align: center; font-size: 12px;">SUARA</th>
                                                <?php if ($this->session->userdata('status_users')=="ADMIN") {?>
                                                    <th style="text-align: center; font-size: 12px;">PENGINPUT</th>
                                                <?php } ?>
                                                <th style="text-align: center; font-size: 12px;">ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->calon; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->nomor; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->tps; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->kecamatan; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->desa; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->jumlah_suara; ?></td>
                                                 
                                                <?php if ($this->session->userdata('status_users')=="ADMIN") {?>
                                                    <td style="text-align: center; font-size: 12px;"><?php echo $r->modified_by; ?></td>
                                                     <td   style="text-align: center; font-size: 12px;"><a href="<?php echo base_url('Data/edit_hasil_perhitungan/'.$r->id_hasil); ?>"><i class="fa fa-pen" title="Edit Data Perhitungan Suara"></i></a> |
                                                <a onclick="return confirm('apakah anda ingin menghapus data perhitungan suara')" href="<?php echo base_url('Data/hapus_perhitungan_suara/'.$r->id_hasil); ?>"><i class="fa fa-trash" title="Hapus Data Perhitungan Suara"></i></a>
                                                </td>
                                                <?php }elseif ($this->session->userdata('status_users')=="PETUGAS") {?>
                                                    <td   style="text-align: center; font-size: 12px;"><a href="<?php echo base_url('P/edit_hasil_perhitungann/'.$r->id_hasil); ?>"><i class="fa fa-pen" title="Edit Data Perhitungan Suara"></i></a> |
                                                <a onclick="return confirm('apakah anda ingin menghapus data perhitungan suara')" href="<?php echo base_url('P/hapus_perhitungan_suaraa/'.$r->id_hasil); ?>"><i class="fa fa-trash" title="Hapus Data Perhitungan Suara"></i></a>
                                                </td>
                                                <?php } ?>
                                               
                                            </tr>
                                            <?php $i++; } ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>


        </div>
        <!-- ahir row -->
        


                        
</div>
