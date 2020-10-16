

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
                            Kurs Baru
                        </div>
                        <div class="panel-body">
                            <form action="<?= base_url('admin/insertkurs2') ?>" method="POST">
                                <div class="form-group">
                                    <label for="bank">Bank</label>
                                    <input type="text" name="bank" id="bank" class="form-control" placeholder="Masukkan Nama Bank" />
                                </div>
                                <div class="form-group">
                                    <label for="jual">Kurs Jual</label>
                                    <input type="text" name="kurs_jual" id="jual" class="form-control" placeholder="Masukkan Kurs Jual" />
                                </div>
                                <div class="form-group">
                                    <label for="beli">Kurs Beli</label>
                                    <input type="text" name="kurs_beli" id="beli" class="form-control" placeholder="Masukkan Kurs Beli" />
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
