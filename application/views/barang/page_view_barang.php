<div class="row">
	<div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Daftar barang
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>Tambah</button>
            </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="tblbarang"></div>
                </div>
            </div>
        </div>
	</div>
</div>
<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg-barang">
        <div class="modal-content modal-add-barang">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Barang</h4>
            </div>
            <div class="modal-body">
                <form id="formbarang" class="form-horizontal">
                    <div class="table-responsive">
                    <table id="tblformbarang" border="0">
                        <tr>
                            <td width="90">Kode Barang</td>
                            <td width="20">:</td>
                            <td><input type="text" name="kodebarang" id="kodebarang" class="form-control input-sm" style="width:200px; margin-right:30px;"></td>
                            <td width="90">Status</td>
                            <td width="20">:</td>
                            <td>
                                <select class="form-control input-sm" name="status" id="status" style="width:200px;">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="90">Nama Barang</td>
                            <td width="20">:</td>
                            <td colspan="6"><input type="text" name="namabarang" id="namabarang" class="form-control input-sm" style="width:540px;"></td>
                        </tr>
                        <tr>
                            <td width="90">Jenis Barang</td>
                            <td width="20">:</td>
                            <td>
                                <select class="form-control input-sm" name="jenisbarang" id="jenisbarang" style="width:200px;">
                                    <option value="Pilih">Pilih</option>
                                    <?php
                                        foreach($jenis as $row):
                                            echo "<option value=".$row->jenis_id.">".$row->jenis_nama."</option>";
                                        endforeach;
                                    ?>
                                </select>
                            </td>
                            <td width="90">Satuan</td>
                            <td width="20">:</td>
                            <td>
                                <select class="form-control input-sm" name="satuanbarang" id="satuanbarang" style="width:200px;">
                                    <option value="Pilih">Pilih</option>
                                    <?php
                                        foreach($satuan as $row):
                                            echo "<option value=".$row->satuan_id.">".$row->satuan_nama."</option>";
                                        endforeach;
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="90">Harga Beli</td>
                            <td width="20">:</td>
                            <td><input type="text" name="hargabeli" id="hargabeli" class="form-control input-sm" style="width:150px;"></td>
                            <td width="90">Diskon</td>
                            <td width="20">:</td>
                            <td><input type="text" name="diskon" id="diskon" class="form-control input-sm" style="width:150px;"></td>
                        </tr>
                        <tr>
                            <td width="90">Harga Jual</td>
                            <td width="20">:</td>
                            <td><input type="text" name="hargajual" id="hargajual" class="form-control input-sm" style="width:150px;"></td>
                            <td width="90">Tgl Expire</td>
                            <td width="20">:</td>
                            <td><input type="date" name="tglexpire" id="tglexpire" class="form-control input-sm" style="width:150px;"></td>
                        </tr> 
                        <tr>
                            <td width="90">Jumlah Min</td>
                            <td width="20">:</td>
                            <td><input type="text" name="jumlahminimum" id="jumlahminimum" class="form-control input-sm" style="width:80px;"></td>
                        </tr>               
                    </table>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="savebarang" onclick="simpanbarang()" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <button type="button" class="btn btn-default" id="batal" "><span class="glyphicon glyphicon-remove"></span> Batal</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function loadBarang(args){
        $("#tblbarang").load("<?php echo base_url(); ?>barang/get_barang");
    }

    loadBarang();

    function clear(args){
        $("#kodebarang").val("");
        $("#namabarang").val("");
        $("#jenisbarang").val("Pilih");
        $("#satuanbarang").val("Pilih");
        $("#hargabeli").val("");
        $("#hargajual").val("");
        $("#diskon").val("");
        $("#jumlahminimum").val("");
        $("#tglexpire").val("");
        $("#status").val("Aktif");
    }
        
    function simpanbarang(){
        var data = $("#formbarang").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>barang/add_barang',
            data: data,
                success: function(html){
                    loadBarang();
                    clear();
                }
        });
    }

    $("#batal").click(function(){
        clear();
    });
</script>