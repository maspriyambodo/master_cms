<div class="modal fade" id="modal_add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_addLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_addLabel">Tambah Hasil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('Applications/Toto/Keluaran/Save/'); ?>" method="post">
                    <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="pasartxt">Pasaran:</label>
                            <select name="pasartxt" class="form-control" required="">
                                <option value="">PILIH PASAR</option>
                                <?php echo $pasaran; ?>
                            </select>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-3">
                                <input id="n0" type="text" name="satutxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="1"/>
                            </div>
                            <div class="col-md-3">
                                <input id="n1" type="text" name="duatxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="2"/>
                            </div>
                            <div class="col-md-3">
                                <input id="n2" type="text" name="tigatxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="3"/>
                            </div>
                            <div class="col-md-3">
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
</div>
<script>
    $('.angka').keyup(function (e) {
        if (this.value.length === this.maxLength) {
            let next = $(this).data('next');
            $('#n' + next).focus();
        }
    });
</script>