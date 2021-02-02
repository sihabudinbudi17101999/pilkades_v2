
<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Data Calon Kepala Desa</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <?php if ($this->session->userdata('status_users')=="ADMIN") {?>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <a style="font-size: 12px;" href="<?php echo base_url('Data/tambah_calon'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Data Jumlah Suara Calon</a>
                                                <a style="font-size: 12px;" href="<?php echo base_url('Impt/datasc'); ?>" class="btn btn-success btn-sm"><i class="fas fa-upload"></i> Import Data Dari Excel</a>
                                                <a style="font-size: 12px;" href="<?php echo base_url('Impt/action2'); ?>" class="btn btn-warning btn-sm"><i class="fas fa-download"></i> Download Format Excel</a>
                                            </div>
                                          
                                            </div>
                                        <?php }elseif ($this->session->userdata('status_users')=="PETUGAS") {?>
                                            <a style="font-size: 12px;" href="<?php echo base_url('P/tambah_calonn'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Data Jumlah Suara Calon</a>
                                        <?php } ?>
                                        </h5>
                                        <div class="table-responsive">
                                        <table class="mb-0 table">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">NAMA CALON</th>
                                                <th style="text-align: center; font-size: 12px;">JK</th>
                                                <th style="text-align: center; font-size: 12px;">KECAMATAN</th>
                                                <th style="text-align: center; font-size: 12px;">DESA</th>
                                                <th style="text-align: center; font-size: 12px;">NO URUT</th>
                                                <th style="text-align: center; font-size: 12px;">STATUS</th>
                                                <th style="text-align: center; font-size: 12px;">NOMOR WILAYAH</th>
                                                <th style="text-align: center; font-size: 12px;">ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->calon; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->jk; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->kecamatan; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->desa; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->nomor; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->status; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->nw; ?></td>
                                                <td   style="text-align: center; font-size: 12px;">
                                                    <?php if ($this->session->userdata('status_users')=="ADMIN") {?>
                                                        <a href="<?php echo base_url('Data/edit_calon/'.$r->id_calon); ?>"><i class="fa fa-pen" title="Edit Data Calon"></i></a> |
                                                <a onclick="return confirm('apakah anda ingin menghapus data calon')" href="<?php echo base_url('Data/hapus_calon/'.$r->id_calon); ?>"><i class="fa fa-trash" title="Hapus Data Calon"></i></a>
                                                    <?php }elseif ($this->session->userdata('status_users')=="PETUGAS") {?>
                                                        <a href="<?php echo base_url('P/edit_perhitungan_suara/'.$r->id_calon); ?>"><i class="fa fa-pen" title="Edit Data Calon"></i></a>
                                                    <?php } ?>
                                                </td>
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
