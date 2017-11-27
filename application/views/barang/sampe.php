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
                    <div class="row">
                        <div class="col-md-7">
                            <div class="table-responsive">
                                <table id="tblformbarang1">
                                    <tr>
                                        <td width="90">Kode Barang</td>
                                        <td width="20">:</td>
                                        <td><input type="text" name="kodebarang" class="form-control input-sm" style="width:200px;"></td>
                                    </tr>
                                    <tr>
                                        <td width="90">Nama Barang</td>
                                        <td width="20">:</td>
                                        <td><input type="text" name="namabarang" class="form-control input-sm" style="width:320px;"></td>
                                    </tr>
                                    <tr>
                                        <td width="90">Jenis Barang</td>
                                        <td width="20">:</td>
                                        <td>
                                            <select class="form-control input-sm" name="jenisbarang" style="width:200px;">
                                                <option value="">Pilih</option>
                                                <option value="1">Baju</option>
                                                <option value="2">Celana</option>
                                                <option value="3">Sepatu</option>
                                                <option value="4">Sendal</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="90">Jumlah</td>
                                        <td width="20">:</td>
                                        <td><input type="text" name="jumlahbarang" class="form-control input-sm" style="width:80px;"></td>
                                    </tr>
                                    <tr>
                                        <td width="90">Satuan</td>
                                        <td width="20">:</td>
                                        <td>
                                            <select class="form-control input-sm" name="satuanbarang" style="width:200px;">
                                                <option value="">Pilih</option>
                                                <option value="1">Buah</option>
                                                <option value="2">Kaleng</option>
                                                <option value="3">Kotak</option>
                                                <option value="4">Bungkus</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="table-responsive">
                                <table id="tblformbarang2">
                                    <tr>
                                        <td width="90">Harga Beli</td>
                                        <td width="20">:</td>
                                        <td><input type="text" name="hargabeli" class="form-control input-sm" style="width:150px;"></td>
                                    </tr>
                                    <tr>
                                        <td width="90">Harga Jual</td>
                                        <td width="20">:</td>
                                        <td><input type="text" name="hargjual" class="form-control input-sm" style="width:150px;"></td>
                                    </tr> 
                                    <tr>
                                        <td width="90">Diskon</td>
                                        <td width="20">:</td>
                                        <td><input type="text" name="diskon" class="form-control input-sm" style="width:150px;"></td>
                                    </tr>               
                                    <tr>
                                        <td width="90">Tgl Expire</td>
                                        <td width="20">:</td>
                                        <td><input type="date" name="tglexpire" class="form-control input-sm" style="width:150px;"></td>
                                    </tr>               
                                </table>
                            </div>
                        </div>
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
    loadBarang();
        
    function loadBarang(args){
        $("#tblbarang").load("<?php echo base_url(); ?>barang/get_barang");
    }

    function savepengguna(){
        var data = $("#formpengguna").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>barang/add_barang',
            data: data,
                success: function(html){
                    loadPengguna();
                }
        });
    }
</script>