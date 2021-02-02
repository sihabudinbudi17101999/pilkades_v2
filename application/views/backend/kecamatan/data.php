
<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Data Kecamatan</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <a style="font-size: 12px;" href="<?php echo base_url('Impt/datask'); ?>" class="btn btn-success btn-sm"><i class="fas fa-upload"></i> Import Data Dari Excel</a>
                                                <a style="font-size: 12px;" href="<?php echo base_url('Impt/action3'); ?>" class="btn btn-warning btn-sm"><i class="fas fa-download"></i> Download Format Excel</a>
                                            </div>
                                          
                                            </div>
                                        </h5>
                                        <div class="table-responsive">
                                        <table class="mb-0 table">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">KECAMATAN</th>
                                                <th style="text-align: center; font-size: 12px;">ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->kecamatan; ?></td>
                                                <td   style="text-align: center; font-size: 12px;">
                                                        <a href="<?php echo base_url('Data/edit_kecamatan/'.$r->id_kecamatan); ?>"><i class="fa fa-pen" title="Edit Data Kecamatan"></i></a> |
                                                <a onclick="return confirm('apakah anda ingin menghapus data kecamatan')" href="<?php echo base_url('Data/hapus_kecamatan/'.$r->id_kecamatan); ?>"><i class="fa fa-trash" title="Hapus Data Kecamatan"></i></a>
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
