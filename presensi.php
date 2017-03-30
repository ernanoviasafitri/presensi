<?php
	$link= file_get_contents('http://api.kalau.web.id/api/absen?nip=14650015&tgs=2016-01-01&tge=2016-10-30');
	$data= json_decode($link); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data jason dengan php</title>
</head>
<body>	<h3 align="CENTER">DATA ABSENSI MOBILE</h3>
		<table border="1" cellpadding="10" width="100%">
			<tr>
				<th>ID</th>
				<th>NIP</th>
				<th>LATITUDE</th>
				<th>LONGITUDE</th>
				<th>PRESENSI KE:</th>
				<th>PHOTO</th>
				<th>MACADDRESS</th>
				<th>CREATE AT</th>
			</tr>
			<tbody>
				<?php
					for ($i=0;$i<2;$i++){
					echo "<tr>
						<td>".$data->presensi->data_absensi_mobile[$i]->id."</td>
						<td>".$data->presensi->data_absensi_mobile[$i]->nip."</td>
						<td>".$data->presensi->data_absensi_mobile[$i]->latitude."</td>
						<td>".$data->presensi->data_absensi_mobile[$i]->longitude."</td>
						<td>".$data->presensi->data_absensi_mobile[$i]->presensi_ke."</td>
						<td>".$data->presensi->data_absensi_mobile[$i]->photo."</td>
						<td>".$data->presensi->data_absensi_mobile[$i]->macaddress."</td>
						<td>".$data->presensi->data_absensi_mobile[$i]->created_at."</td>

					</tr>
					";
					}
					?>
			</tbody>
			</table>

			<h3 align="CENTER">DATA ABSENSI FINGER</h3>
			<table border="1" cellpadding="10" width="100%">
			<br><br>
			<tr>
				<th>FINGER_ID</th>
				<th>NIP</th>
				<th>TAG DATE</th>
				<th>DINGER_IP</th>
				
			</tr>
					<?php
					for ($i=0;$i<1;$i++){
					echo "<tr>
						<td>".$data->presensi->data_absensi_finger[$i]->finger_id."</td>
						<td>".$data->presensi->data_absensi_finger[$i]->nip."</td>
						<td>".$data->presensi->data_absensi_finger[$i]->tag_date."</td>
						<td>".$data->presensi->data_absensi_finger[$i]->finger_ip."</td>
						

					</tr>
					";
					}
				?>
			</tbody>
			 

		</table>
</body>
</html>
