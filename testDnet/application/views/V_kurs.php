
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Kurs</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <a href="<?= base_url('admin/insertkurs')?>"><button class="btn btn-success">Tambah Data</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Bank</th>
                                        <th>Kurs Jual</th>
                                        <th>Kurs Beli</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    for ($i = 0; $i < sizeof($kurs); $i++) {
                                        echo "
                                        <tr>
                                        <td>" . $no. "</td>
                                        <td>" . $kurs[$i]->bank . "</td>
                                        <td>" . $kurs[$i]->kurs_jual . "</td>
                                        <td>" . $kurs[$i]->kurs_beli . "</td>
                                        <td><button class='btn btn-info' 
                                        onclick='location.href=\"".base_url("admin/editkurs/").$kurs[$i]->id_kurs."\" '>Edit</button></td>
                                        <td><button onclick='location.href=\"".base_url("admin/deletekurs/").$kurs[$i]->id_kurs."\"'
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
