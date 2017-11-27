<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="datatablebarang" style="margin-top:10px;">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th width="150">Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Satuan</th>
                        <th width="50">Harga Beli</th>
                        <th width="50">Harga Jual</th>
                        <th>Diskon</th>
                        <th width="30">Jumlah Min</th>
                        <th>Tgl. Expire</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        foreach($barang as $row):
                            echo "<tr>";
                            echo "<td>".$row->barang_kode."</td>";
                            echo "<td>".$row->barang_nama."</td>";
                            echo "<td>".$row->jenis_nama."</td>";
                            echo "<td>".$row->satuan_nama."</td>";
                            echo "<td>".$row->harga_beli."</td>";
                            echo "<td>".$row->harga_jual."</td>";
                            echo "<td>".$row->diskon."</td>";
                            echo "<td>".$row->jumlah_min."</td>";
                            echo "<td>".$row->tgl_expire."</td>";
                            echo "<td>".$row->status."</td>";
                            echo "</tr>";
                            $no++;
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#datatablebarang').DataTable({
            "oLanguage": {
                "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
                "sLengthMenu": "_MENU_ &nbsp;&nbsp;Data Per Halaman",
                "sInfoFiltered": "(difilter dari _MAX_ total data)", 
                "sZeroRecords": "Pencarian tidak ditemukan", 
                "sEmptyTable": "Data kosong", 
                "sLoadingRecords": "Harap Tunggu...", 
                "oPaginate": {
                    "sPrevious": "Prev",
                    "sNext": "Next"
                }
            }
        });
    });
</script>