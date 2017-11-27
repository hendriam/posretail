<div class="row">
	<div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">
              Daftar Pengguna
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>Tambah</button>
          </div>
              <div class="panel-body">
                  <div id="tablepengguna"></div>
              </div>
          </div>
        </div>
	</div>
</div>
<!-- Modal add pengguna -->
<div id="add" class="modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content modal-add-pengguna">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Pengguna</h4>
      </div>
      <div class="modal-body">
      <form id="formpengguna">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="namalengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Hak Akses</label>
					<input type="text" name="akses" class="form-control">
				</div>
				<div class="form-group">
					<label>Status</label>
					<select class="form-control" name="status">
						<option value="Aktif">Aktif</option>
						<option value="Tidak Aktif">Tidak Aktif</option>
					</select>
				</div>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" id="savepengguna" onclick="savepengguna()" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
		loadPengguna();
		
		function loadPengguna(args){
			$("#tablepengguna").load("<?php echo base_url(); ?>pengguna/get_pengguna");
		}

		function savepengguna(){
			var data = $("#formpengguna").serialize();
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url(); ?>pengguna/add_pengguna',
				data: data,
					success: function(html){
						loadPengguna();
					}
			});
		}
</script>
