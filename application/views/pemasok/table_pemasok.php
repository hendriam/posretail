<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="datatablebarang" style="margin-top:10px;">
                <thead>
                    <tr>
                        <th>Kode Pemasok</th>
                        <th>Nama Pemasok</th>
                        <th>Alamat Pemasok</th>
                        <th>No. Telp</th>
                        <th>No. Hp</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($pemasok as $row):
                            echo "<tr>";
                            echo "<td>".$row->pemasok_kode."</td>";
                            echo "<td>".$row->pemasok_nama."</td>";
                            echo "<td>".$row->pemasok_alamat."</td>";
                            echo "<td>".$row->pemasok_notelp."</td>";
                            echo "<td>".$row->pemasok_nohp."</td>";
                            echo "<td>".$row->status."</td>";
                            echo "</tr>";
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#datatablebarang').DataTable();
    });
</script>