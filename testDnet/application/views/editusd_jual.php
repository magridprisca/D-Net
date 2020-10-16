

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">USD Jual</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit USD Jual
                        </div>
                        <div class="panel-body">
                            <form action="<?= base_url('admin/editusd_jual2') ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_usd" value="<?= $usd_jual->id_usd ?>" class="form-control" />
            
                                <div class="form-group">
                                    <label for="mata_uang">Mata Uang</label>
                                    <input type="text" name="mata_uang" id="mata_uang" value="<?= $usd_jual->mata_uang ?>" class="form-control" placeholder="Masukkan Nama Mata Uang" />
                                </div>
                                <div class="form-group">
                                    <label for="jual">Harga Jual</label>
                                </div>
                                <div class="form-group">
                                    <label for="jual_week">Week</label>
                                    <input type="text" name="jual_week" id="jual_week" value="<?= $usd_jual->jual_week ?>" class="form-control" placeholder="Week" />
                                </div>
                                <div class="form-group">
                                    <label for="jual_month">Month</label>
                                    <input type="text" name="jual_month" id="jual_month" value="<?= $usd_jual->jual_month ?>" class="form-control" placeholder="Month" />
                                </div>
                                <div class="form-group">
                                    <label for="jual_threemonth">Three Month</label>
                                    <input type="text" name="jual_threemonth" id="jual_threemonth" value="<?= $usd_jual->jual_threemonth ?>" class="form-control" placeholder="Three Month" />
                                </div>
                                <div class="form-group">
                                    <label for="jual_sixmonth">Six Month</label>
                                    <input type="text" name="jual_sixmonth" id="jual_sixmonth" value="<?= $usd_jual->jual_sixmonth ?>" class="form-control" placeholder="Six Month" />
                                </div>
                                <div class="form-group">
                                    <label for="date_label">Date Label</label>
                                    <input type="date" name="date_label" id="date_label" class="form-control" value="<?= substr($usd_jual->date_label,0,10) ?>" />
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
