<div class="modal fade" id="modal_add2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_addLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_addLabel">Tambah Hasil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="fas fa-times"></i>
                </button>
            </div>
            <form action="<?php echo site_url('Applications/Toto/Keluaran/Save2/'); ?>" method="post">
                <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                <input type="hidden" name="pasartxt" value="<?php echo Post_get('pasar'); ?>"/>
                <div class="modal-body">
                    <div class="row my-4">
                        <div class="col-md-2">
                                <input id="n4" type="text" name="limatxt" class="form-control text-center angka" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="5"/>
                            </div>
                            <div class="col-md-2">
                                <input id="n5" type="text" name="enamtxt" class="form-control text-center angka" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="0"/>
                            </div>
                        <div class="col-md-2">
                            <input id="n0" type="text" name="satutxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="1"/>
                        </div>
                        <div class="col-md-2">
                            <input id="n1" type="text" name="duatxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="2"/>
                        </div>
                        <div class="col-md-2">
                            <input id="n2" type="text" name="tigatxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="3"/>
                        </div>
                        <div class="col-md-2">
                            <input id="n3" type="text" name="empattxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgltxt">Tanggal:</label>
                        <input type="date" name="tgltxt" required="" class="form-control datepicker" style="width:100%;" autocomplete="off"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default font-weight-bold" data-dismiss="modal"><i class="far fa-times-circle"></i> Cancel</button>
                    <button type="submit" class="btn btn-default font-weight-bold"><i class="fas fa-save text-success"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>