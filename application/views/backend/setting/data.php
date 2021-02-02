
<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Setting Wilayah</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('setting/simpan'); ?>
           
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="status_users" class="">Wilayah</label>
                  <select name="provinsi" class="form-control" id="select_provinsi">
                    <option>-- Pilih Wilayah -- </option>
                    <?php foreach ($provinsi as $row): ?>
                      <option value="<?= $row->id_prov ?>"><?= $row->id_prov."-".$row->nama ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="status_users" class="">Kota/ Kabupaten</label>
                  <select name="kota" class="form-control" id="select_kota">
                    <option>-- Pilih Kota -- </option>
                  </select>
                </div>
              </div>
            </div>

             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_calon" class="">Kecamatan Penginputan Suara</label>
                  <select name="kecamatan" class="form-control" id="select_kecamatan"> 
                    <option>-- Kecamatan --</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_calon" class="">Kelurahan Penginputan Suara</label>
                  <select name="kelurahan" class="form-control" id="select_kelurahan"> 
                    <option>-- Kelurahan --</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="id_calon" class="">KODE</label>
                  <input type="text" name="kode_setting" class="form-control">
                </div>
              </div>
            </div>
            
          <br><br><br>
         
                
                <a href="<?php echo base_url('Data/petugas'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        

        <script>
          $(document).ready(function() {
           
           $('#select_kota').select2({
              placeholder: 'Masukkan nama kota',
              allowClear: true,
            });
            $('#select_provinsi').select2({
              placeholder: 'Masukkan nama Provinsi',
              allowClear: true,
            });
            $('#select_kecamatan').select2({
              placeholder: 'Masukkan nama kecamatan',
              allowClear: true,
            });
            $('#select_kelurahan').select2({
              placeholder: 'Masukkan nama Kelurahan',
              allowClear: true,
            });


            $('#select_provinsi').change(function() {
              /* Act on the event */
              var id_prov = $(this).val();
              $.ajax({
                url: '<?= base_url('setting/get_kota') ?>',
                type: 'POST',
                dataType: 'html',
                data: {id_prov: id_prov},
                success: function(res) {
                  $('select#select_kota').html(res);
                  getAjaxkota();
                }
              })
            });

            $('#select_kota').change(getAjaxkota);
            function getAjaxkota() {
                var id_kota = $('#select_kota').val();
                $.ajax({
                url: '<?= base_url('setting/get_kecamatan') ?>',
                type: 'POST',
                dataType: 'html',
                data: {id_kota: id_kota},
                success: function(res) {
                  $('select#select_kecamatan').html(res);
                  getAjaxkecamatan();
                }
              })
            }

            $('#select_kecamatan').change(getAjaxkecamatan);
            function getAjaxkecamatan() {
                var id_kota = $('#select_kecamatan').val();
                $.ajax({
                url: '<?= base_url('setting/get_kelurahan') ?>',
                type: 'POST',
                dataType: 'html',
                data: {id_kota: id_kota},
                success: function(res) {
                  $('select#select_kelurahan').html(res);
                }
              })
            }     

            // $('#select_kelurahan').change(getAjaxkelurahan);
            // function getAjaxkelurahan() {
            //     var id_kota = $('#select_kecamatan').val();
            //     $.ajax({
            //     url: '<?= base_url('setting/get_kelurahan') ?>',
            //     type: 'POST',
            //     dataType: 'html',
            //     data: {id_kota: id_kota},
            //     success: function(res) {
            //        //$('select#select_kelurahan').html(res);
            //     }
            //   })
            // }      
              

    
            // $('#select_provinsi').select2({
            //   //minimumInputLength : 3,
            //   allowClear: true,
            //   placeholder: 'Masukkan nama Provinsi',
            //   ajax: {
            //     url: '<?= base_url('setting/get_provinsi') ?>',
            //     type: 'POST',
            //     dataType: 'JSON',
            //     data: function(params){
            //       return {
            //         search: params.term
            //       }
            //     },
            //     processResults: function(data, page) {
            //       return {
            //         results: data
            //       };
            //     },
            //   }

            // }).on('select2:select', function(e){
            //   var id = $("#select_provinsi option:selected").val();
            //     if (id != null) {
            //       $('#select_kota').select2({
            //       // minimumInputLength : 3,
            //         allowClear: true,
            //         placeholder: 'Masukkan nama Kota / Kabupaten',
            //         ajax: {
            //           url: '<?= base_url('setting/get_kota') ?>',
            //           type: 'POST',
            //           dataType: 'JSON',
            //           data: function(params){
            //             return {
            //               search: params.term,
            //               id : id
            //             }
            //           },
            //           processResults: function(data, page) {
            //             return {
            //               results: data
            //             };

            //           },
            //         }

            //       })

            //     } else {
            //       $("#select_kota").val(null).trigger('change')
            //     }
            // }).on('select2:change', function(e){
            //   alert("diganti");
            //   $("#select_kota").val(null).trigger('change')
            // })


            // $('#select_provinsi').on('select2:selecting', function(event) {
            //   event.preventDefault();
              
            // });

          });
        </script>