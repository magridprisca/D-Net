

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Kurs Erate</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kurs Erate Baru
                        </div>
                        <div class="panel-body">
                            <form action="<?= base_url('admin/insertkurs_erate2') ?>" method="POST">
                                <div class="form-group">
                                    <label for="jual">Erate Jual</label>
                                    <input type="text" name="erate_jual" id="jual" class="form-control" placeholder="Masukkan Erate Jual" />
                                </div>
                                <div class="form-group">
                                    <label for="beli">Erate Beli</label>
                                    <input type="text" name="erate_beli" id="beli" class="form-control" placeholder="Masukkan Erate Beli" />
                                </div>
                                <div class="form-group">
                                    <label for="jual">TTCounter Jual</label>
                                    <input type="text" name="ttcounter_jual" id="jual" class="form-control" placeholder="Masukkan TTCounter Jual" />
                                </div>
                                <div class="form-group">
                                    <label for="beli">TTCounter Beli</label>
                                    <input type="text" name="ttcounter_beli" id="beli" class="form-control" placeholder="Masukkan TTCounter Beli" />
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
