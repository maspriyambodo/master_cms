<div class="modal fade" id="modal_edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_editLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_editLabel">Ubah Hasil Keluaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Close_edit()">
                    <i aria-hidden="true" class="fas fa-times"></i>
                </button>
            </div>
            <form action="<?php echo site_url('Applications/Toto/Keluaran/Update/'); ?>" method="post">
                <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                <input type="hidden" name="e_pasartxt" value="<?php echo Post_get('pasar'); ?>"/>
                <input type="hidden" name="e_id"/>
                <div class="modal-body">
                    <div class="row my-4">
                        <div class="col-md-2">
                            <input id="n4" type="text" name="e_limatxt" class="form-control text-center angka" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="5"/>
                        </div>
                        <div class="col-md-2">
                            <input id="n5" type="text" name="e_enamtxt" class="form-control text-center angka" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="0"/>
                        </div>
                        <div class="col-md-2">
                            <input id="n0" type="text" name="e_satutxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="1"/>
                        </div>
                        <div class="col-md-2">
                            <input id="n1" type="text" name="e_duatxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="2"/>
                        </div>
                        <div class="col-md-2">
                            <input id="n2" type="text" name="e_tigatxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off" autofocus data-next="3"/>
                        </div>
                        <div class="col-md-2">
                            <input id="n3" type="text" name="e_empattxt" class="form-control text-center angka" required="" maxlength="1" onkeypress="return isNumber(event)" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgltxt">Tanggal:</label>
                        <input type="date" name="e_tgltxt" required="" class="form-control datepicker" style="width:100%;" autocomplete="off"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default font-weight-bold" data-dismiss="modal"><i class="far fa-times-circle" onclick="Close_edit()"></i> Cancel</button>
                    <button type="submit" class="btn btn-default font-weight-bold"><i class="fas fa-save text-success"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function Close_edit() {
        $('input[name="e_id"]').val('');
        $('input[name="e_limatxt"]').val('');
        $('input[name="e_enamtxt"]').val('');
        $('input[name="e_satutxt"]').val('');
        $('input[name="e_duatxt"]').val('');
        $('input[name="e_tigatxt"]').val('');
        $('input[name="e_empattxt"]').val();
        $('input[name="e_tgltxt"]').val('');
    }
    function Edit(token) {
        $.ajax({
            url: "Applications/Toto/Keluaran/get_detail?token=" + token,
            type: 'GET',
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.stat) {
                    $('input[name="e_id"]').val(token);
                    $('input[name="e_limatxt"]').val(data.lima);
                    $('input[name="e_enamtxt"]').val(data.enam);
                    $('input[name="e_satutxt"]').val(data.satu);
                    $('input[name="e_duatxt"]').val(data.dua);
                    $('input[name="e_tigatxt"]').val(data.tiga);
                    $('input[name="e_empattxt"]').val(data.empat);
                    $('input[name="e_tgltxt"]').val(data.tgl_keluar);
                    $('#modal_edit').modal({show: true, backdrop: 'static', keyboard: false});
                } else {
                    toastr.warning('error while getting data!');
                }
            }, error: function () {
                toastr.danger('error internal server!');
            }
        });
    }
</script>