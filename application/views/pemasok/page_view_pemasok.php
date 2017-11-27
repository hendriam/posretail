<div class="row">
	<div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               	Daftar Pemasok
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>Tambah</button>
            </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="tblpemasok"></div>
                </div>
            </div>
        </div>
	</div>
</div>
<div id="add" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-add-pemasok">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Pemasok</h4>
            </div>
            <div class="modal-body">
                <form id="formpemasok" class="form-horizontal">
                    <div class="table-responsive">
                    <table id="tblformpemasok" border="0">
                        <tr>
                            <td width="100">Kode Pemasok</td>
                            <td width="20">:</td>
                            <td><input type="text" name="kodepemasok" id="kodepemasok" class="form-control input-sm" style="width:156px; margin-right:30px;"></td>
                            <td width="90">Status</td>
                            <td width="20">:</td>
                            <td>
                                <select class="form-control input-sm" name="status" id="status" style="width:150px;">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Nama Pemasok</td>
                            <td width="20">:</td>
                            <td colspan="6"><input type="text" name="namapemasok" id="namapemasok" class="form-control input-sm" style="width:446px;"></td>
                        </tr>
                        <tr>
                            <td width="120">Alamat Lengkap</td>
                            <td width="20">:</td>
	                        	<td colspan="6">
	                        		<textarea class="form-control input-sm" name="alamat" id="alamat" style="width:446px;"></textarea>
	                        	</td>
                        </tr>
                        <tr>
                            <td width="90">Kota</td>
                            <td width="20">:</td>
                            <td><input type="text" name="kotapemasok" id="kotapemasok" class="form-control input-sm" style="width:156px; margin-right:30px;"></td>
                            <td width="90">Provinsi</td>
                            <td width="20">:</td>
                            <td><input type="text" name="provinsipemasok" id="provinsipemasok" class="form-control input-sm" style="width:150px;"></td>
                        </tr>
                        <tr>
                            <td width="90">Negara</td>
                            <td width="20">:</td>
                            <td><input type="text" name="negarapemasok" id="negarapemasok" class="form-control input-sm" style="width:156px; margin-right:30px;"></td>
                            <td width="90">Nomor Telp.</td>
                            <td width="20">:</td>
                            <td><input type="text" name="notelp" id="notelp" class="form-control input-sm" style="width:150px;"></td>
                        </tr>
                        <tr>
                            <td width="90">Nomor Hp</td>
                            <td width="20">:</td>
                            <td><input type="text" name="nohp" id="nohp" class="form-control input-sm" style="width:156px; margin-right:30px;"></td>
                            <td width="90">Alamat Email</td>
                            <td width="20">:</td>
                            <td><input type="text" name="email" id="email" class="form-control input-sm" style="width:150px;"></td>
                        </tr>
                    </table>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="simpan" onclick="simpan()" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <button type="button" class="btn btn-default" id="batal" "><span class="glyphicon glyphicon-remove"></span> Batal</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    function loadPemasok(args){
        $("#tblpemasok").load("<?php echo base_url(); ?>pemasok/get_pemasok");
    }

    loadPemasok();

    function clear(args){
    	$("#namapemasok").val("");
    	$("#status").val("Aktif");
    	$("#alamat").val("");
    	$("#kotapemasok").val("");
    	$("#provinsipemasok").val("");
    	$("#negarapemasok").val("");
    	$("#notelp").val("");
    	$("#nohp").val("");
    	$("#email").val("");
		}
        
    function simpan(){
        var data = $("#formpemasok").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>pemasok/add_pemasok',
            data: data,
                success: function(html){
                    loadPemasok();
                    clear();
                }
        });
    }

    $("#batal").click(function(){
        clear();
    });
</script>