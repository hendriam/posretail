<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="datatablepengguna" style="margin-top:10px;">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Lengkap</th>
						<th>Username</th>
						<th>Posisi</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
						$no = 1;
						foreach($pengguna as $row){
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$row->pengguna_nama."</td>";
						echo "<td>".$row->pengguna_username."</td>";
						echo "<td>".$row->pengguna_akses."</td>";
						echo "<td>".$row->pengguna_status."</td>";
						echo "<td width='120'>
										<button class='btn btn-warning btn-xs'> Ubah</button>
										<button class='btn btn-danger btn-xs'> Hapus</button>
									</td>";
						echo "</tr>";
						$no++;
				} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
    $(document).ready(function() {
        $('#datatablepengguna').DataTable();
    });
</script>