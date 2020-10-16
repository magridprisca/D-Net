

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Kurs</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Kurs
                        </div>
                        <div class="panel-body">
                            <form action="<?= base_url('admin/editkurs2') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="bank">Bank</label>
                                    <input type="text" name="bank" id="bank" value="<?= $kurs->bank ?>" class="form-control" placeholder="Masukkan Nama Bank" />
                                    <input type="hidden" name="id_kurs" value="<?= $kurs->id_kurs ?>" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="kurs_jual">Kurs Jual</label>
                                    <input type="text" name="kurs_jual" id="kurs_jual" value="<?= $kurs->kurs_jual ?>" class="form-control" placeholder="Masukkan Kurs Jual" />
                                </div>
                                <div class="form-group">
                                    <label for="kurs_beli">Kurs Beli</label>
                                    <input type="text" name="kurs_beli" id="kurs_beli" value="<?= $kurs->kurs_beli ?>" class="form-control" placeholder="Masukkan Kurs Beli" />
                                </div>
                                <hr />
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
