

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
                            Edit Kurs Erate
                        </div>
                        <div class="panel-body">
                            <form action="<?= base_url('admin/editkurs_erate2') ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_kurs" value="<?= $kurs_erate->id_kurs ?>" class="form-control" />
                                
                                <div class="form-group">
                                    <label for="erate_jual">Erate Jual</label>
                                    <input type="text" name="erate_jual" id="erate_jual" value="<?= $kurs_erate->erate_jual ?>" class="form-control" placeholder="Masukkan Erate Jual" />
                                </div>
                                <div class="form-group">
                                    <label for="erate_beli">Erate Beli</label>
                                    <input type="text" name="erate_beli" id="erate_beli" value="<?= $kurs_erate->erate_beli ?>" class="form-control" placeholder="Masukkan Erate Beli" />
                                </div>
                                <div class="form-group">
                                    <label for="ttcounter_jual">TTCounter Jual</label>
                                    <input type="text" name="ttcounter_jual" id="ttcounter_jual" value="<?= $kurs_erate->ttcounter_jual ?>" class="form-control" placeholder="Masukkan TTCounter Jual" />
                                </div>
                                <div class="form-group">
                                    <label for="ttcounter_beli">TTCounter Beli</label>
                                    <input type="text" name="ttcounter_beli" id="ttcounter_beli" value="<?= $kurs_erate->ttcounter_beli ?>" class="form-control" placeholder="Masukkan TTCounter Beli" />
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
