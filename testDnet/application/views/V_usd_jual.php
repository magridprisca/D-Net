
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">USD Jual</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td colspan="9">
                                            <a href="<?= base_url('admin/insertusd_jual')?>"><button class="btn btn-success">Tambah Data</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Mata Uang</th>
                                        <th>Week</th>
                                        <th>Month</th>
                                        <th>Three Month</th>
                                        <th>Six Month</th>
                                        <th>Date Label</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    for ($i = 0; $i < sizeof($usd_jual); $i++) {
                                        echo "
                                        <tr>
                                        <td>" . $no. "</td>
                                        <td>" . $usd_jual[$i]->mata_uang . "</td>
                                        <td>" . $usd_jual[$i]->jual_week . "</td>
                                        <td>" . $usd_jual[$i]->jual_month . "</td>
                                        <td>" . $usd_jual[$i]->jual_threemonth . "</td>
                                        <td>" . $usd_jual[$i]->jual_sixmonth . "</td>
                                        <td>" . $usd_jual[$i]->date_label . "</td>
                                        <td><button class='btn btn-info' 
                                        onclick='location.href=\"".base_url("admin/editusd_jual/").$usd_jual[$i]->id_usd."\" '>Edit</button></td>
                                        <td><button onclick='location.href=\"".base_url("admin/deleteusd_jual/").$usd_jual[$i]->id_usd."\"'
                                         class='btn btn-warning'>Delete</button></td>
                                        </tr>
                                        ";
                                        $no++;
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
