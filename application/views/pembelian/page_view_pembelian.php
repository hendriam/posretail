<div class="row">
	<div class="col-md-12">
		<span class="title-content">Pembelian</span>
		<hr class="line">
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				Informasi Pembelian
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label>Nama Supplier</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label>Nomor Faktur</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label>Tgl. Pembelian</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label>Petugas</label>
					<input type="text" name="" class="form-control">
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="150">Kode Barang</th>
					<th width="230">Nama Barang</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Sub Total</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input type="text" name="" class="form-control">
					</td>
					<td>Baju Batik</td>
					<td>100.000</td>
					<td>1</td>
					<td>100.000</td>
					<td>
						<button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></button>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="table">
			<thead>
				<tr>
					<th width="150">Kode Barang</th>
					<th width="230">Nama Barang</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Sub Total</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>00001</td>
					<td>Baju Batik</td>
					<td>100.000</td>
					<td>1</td>
					<td>100.000</td>
					<td>
						<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
					</td>					
				</tr>
				<tr>
					<td>00001</td>
					<td>Baju Batik</td>
					<td>100.000</td>
					<td>1</td>
					<td>100.000</td>
					<td>
						<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
					</td>					
				</tr>
				<tr>
					<td>00001</td>
					<td>Baju Batik</td>
					<td>100.000</td>
					<td>1</td>
					<td>100.000</td>
					<td>
						<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
					</td>					
				</tr>
				<tr>
					<td>00001</td>
					<td>Baju Batik</td>
					<td>100.000</td>
					<td>1</td>
					<td>100.000</td>
					<td>
						<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
					</td>					
				</tr>
			</tbody>
		</table>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-horizontal">
					<div class="form-group">
						<textarea class="form-control" rows="3" placeholder="Catatan transaksi"></textarea>
					</div>
				</div>				
			</div>
			<div class="col-sm-6">
				<div class="alert alert-info" style="margin-bottom:10px;">
					<h3 align="right">Total Rp. 400.000</h3>
				</div>
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-4 control-label">Bayar</label>
						<div class="col-sm-8">
							<input type="text" name="" value="Rp. 500.000" class="form-control input-lg">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Kembalian</label>
						<div class="col-sm-8">
							<input type="text" name="" value="Rp. 100.000" class="form-control input-lg" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>