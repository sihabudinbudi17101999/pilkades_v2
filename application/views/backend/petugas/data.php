
<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Data Petugas</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <a style="font-size: 12px;" href="<?php echo base_url('Data/tambah_petugas'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Data Petugas</a>
                                        </h5>
                                        <div class="table-responsive">
                                        <table class="mb-0 table">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">KECAMATAN</th>
                                                <th style="text-align: center; font-size: 12px;">NAMA</th>
                                                <th style="text-align: center; font-size: 12px;">USERNAME</th>
                                                <th style="text-align: center; font-size: 12px;">STATUS AKUN</th>
                                                <th style="text-align: center; font-size: 12px;">STATUS PENGGUNA</th>
                                                <th style="text-align: center; font-size: 12px;">MENDAFTAR AKUN</th>
                                                <th style="text-align: center; font-size: 12px;">ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php if ($r->kecamatan == null) {
                                                    echo "-";
                                                }elseif ($r->kecamatan) {
                                                    echo $r->kecamatan;
                                                } ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php if ($r->nama == null) {
                                                    echo "-";
                                                }elseif ($r->nama) {
                                                    echo $r->nama;
                                                } ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->username; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->status_akun; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->status_users; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->mendaftar; ?></td>
                                                <td   style="text-align: center; font-size: 12px;"><a href="<?php echo base_url('Data/edit_petugas/'.$r->id_user); ?>"><i class="fa fa-pen" title="Edit Data Petugas"></i></a> |
                                                <a onclick="return confirm('apakah anda ingin menghapus data petugas')" href="<?php echo base_url('Data/hapus_petugas/'.$r->id_user); ?>"><i class="fa fa-trash" title="Hapus Data Petugas"></i></a>
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
