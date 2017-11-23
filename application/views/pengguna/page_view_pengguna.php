<div class="row">
	<div class="col-md-12">
		<span class="title-content">Data Pengguna</span>
		<hr class="line">
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<button class="btn btn-primary" data-toggle="modal" data-target="#add"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i> Tambah</button>
		<div class="table-responsive">
			<table class="table table-bordered" style="margin-top:10px;">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Lengkap</th>
						<th>Username</th>
						<th>Posisi</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- Modal add pengguna -->
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content modal-add-pengguna">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Pengguna</h4>
      </div>
      <div class="modal-body">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label>Hak Akses</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label>Status</label>
					<input type="text" name="" class="form-control">
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>