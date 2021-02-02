<!DOCTYPE html>
<html>
<head>
	<title>Print Jumlah Suara</title>
	<link rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px #000;
		}
	</style>
</head>
<body>
	<img src="assets/img/logo.jpg" style="position: absolute; width: 60px; height: auto;">
	<table style="width: 100%;">
		<tr>
			<td align="center">
				<span style="line-height: 1.6; font-weight: bold;">
					PILKADES
					<br>Banten
				</span>
			</td>
		</tr>
	</table>
	<hr class="line-title">
	<p align="center">
		LAPORAN JUMLAH SUARA <br>
		
	</p>
	 <br>
	<table class="table table-bordered">
		   <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">NAMA CALON</th>
                                                <th style="text-align: center; font-size: 12px;">JK</th>
                                                <th style="text-align: center; font-size: 12px;">NO URUT</th>
                                                <th style="text-align: center; font-size: 12px;">KECAMATAN</th>
                                                <th style="text-align: center; font-size: 12px;">DESA</th>
                                                <th style="text-align: center; font-size: 12px;">JUMLAH SUARA</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->calon; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->jk; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->nomor; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->kecamatan; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->desa; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->jumlah_suara; ?></td>
                                               
                                            </tr>
                                            <?php $i++; } ?>
                                            
                                            </tbody>
	</table>
    
    <p style="text-align: right; "><?php date_default_timezone_set("Asia/Jakarta");
        $dates = date("d-m-Y ");
        echo "Banten, ". $dates;
         ?></p>

</body>
</html>