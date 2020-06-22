<?php  
  header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-type: application/octet-stream");
    header ("Content-Disposition: attachment; filename=Nama_File.xls");
?>

<h3><center>Laporan Data Anggota</center></h3> 
<br/> 
<table class="table-data"> 
	<thead> 
<tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col" nowrap>Member Sejak</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$i = 1;
				foreach ($anggota as $a)
				{
					?>
						<tr>
								<th scope="row"><?= $i++; ?></th>
								<td><?= $a['nama']; ?></td>
								<td><?= $a['email']; ?></td>
								<td><?= date('d F Y', $a['tanggal_input']); ?></td>
								
			</tr> 
			<?php 
		} 
		?> 
	</tbody> 
</table> 
