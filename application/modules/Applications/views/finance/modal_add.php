<div class="modal fade" id="modal_add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_add" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_addLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="fas fa-times"></i>
                </button>
            </div>
            <form action="<?php echo site_url('Applications/Finance/Dashboard/Save/'); ?>" method="post">
                <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenistxt">Jenis:</label>
                                <select name="jenistxt" class="form-control" required="">
                                    <option value="">Pilih Jenis</option>
                                    <option value="1">Credit</option>
                                    <option value="2">Debit</option>
                                    <option value="3">Deposito</option>
                                    <option value="4">Hutang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgltxt">Tanggal:</label>
                                <input name="tgltxt" type="date" class="form-control" required="" autocomplete="off"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomtxt">Nominal:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Rp.</span></div>
                            <input type="text" name="nomtxt" class="form-control nomtxt" required="" autocomplete="off" onkeypress="return isNumber(event)"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kettxt">Keterangan:</label>
                        <textarea id="editor1" name="kettxt" class="form-control" required=""></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default font-weight-bold" data-dismiss="modal"><i class="far fa-times-circle text-danger"></i> Cancel</button>
                    <button type="submit" class="btn btn-default font-weight-bold"><i class="fas fa-save text-success"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>