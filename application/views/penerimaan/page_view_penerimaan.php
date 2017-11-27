<div class="row">
	<div class="col-md-12">
		<span class="title-content">Penerimaan (Terima Barang)</span>
		<hr class="line">
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<form>
				<table id="tblformpenerimaan1" border="0">
					<tr>
						<td width="180">No. Faktur Pembelian</td>
						<td width="15">:</td>
						<td><input type="text" name="nofaktur" class="form-control" style="width:300px;"></td>
						<td width="180">Syarat Pembayaran</td>
						<td width="15">:</td>
						<td>
							<select class="form-control" name="syaratbayar">
								<option value="Cash">Cash</option>
								<option value="Kredit">Kredit</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="180">Nama Pemasok</td>
						<td width="15">:</td>
						<td><input type="text" name="namapemasok" id="namapemasok" class="form-control" style="width:300px;"></td>
						<td width="135">Tgl Penerimaan</td>
						<td width="15">:</td>
						<td><input type="text" name="tglpenerimaan"  class="form-control"></td>
					</tr>
					<tr>
						<td width="135">Alamat Pemasok</td>
						<td width="15">:</td>
						<td colspan="6"><input type="text" name="alamat" id="alamatpemasok" class="form-control" style="width:100%;"  readonly></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-bordered" id="tblformpenerimaan2">
				<thead>
					<tr>
						<th width="150">Kode Barang</th>
						<th width="380">Nama Barang</th>
						<th width="100">Harga</th>
						<th width="30">Jumlah</th>
						<th width="100">Sub Total</th>
						<th width="50" align="center"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="kodebarang" id="kodebarang" class="form-control" readonly></td>
						<td><input type="text" name="namabarang" id="namabarang" class="form-control"></td>
						<td><input type="text" name="hargabeli" id="hargabeli" class="form-control"></td>
						<td><input type="text" name="jumlah" id="jumlah" class="form-control"></td>
						<td><span id="subtotal" ></span></td>
						<td align="center"><button class="btn btn-primary btn-sm" onclick="tambah();"><span class="glyphicon glyphicon-plus"></span></button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div id="result"></div>
<script>
  $(function(){
    $('#namapemasok').autocomplete({
      minLength:1,
      source: '<?php echo base_url();?>penerimaan/get_pemasok_auto',
      select: function(event, ui){
        $('#namapemasok').val(ui.item.value);
        $('#kodepemasok').val(ui.item.kodepemasok);
        $('#alamatpemasok').val(ui.item.alamatpemasok);
        return false;
      }
    });
  });

  $(function(){
    $('#namabarang').autocomplete({
      minLength:1,
      source: '<?php echo base_url();?>penerimaan/get_barang_auto',
      select: function(event, ui){
        $('#kodebarang').val(ui.item.kodebarang);
        $('#namabarang').val(ui.item.value);
        $('#hargabeli').val(ui.item.hargabeli);
        $('#jumlah').val(ui.item.jumlah);
        return false;
      }
    });
  });

  function tambah(){
  	$("#result").load("<?php echo base_url(); ?>penerimaan/view_penerimaan_barang_temp");
  }
</script>