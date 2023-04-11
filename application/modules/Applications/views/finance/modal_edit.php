<div class="modal fade" id="modal_edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_editLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Close_edit()">
                    <i aria-hidden="true" class="fas fa-times"></i>
                </button>
            </div>
            <form action="<?php echo site_url('finance-update'); ?>" method="post">
                <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                <input type="hidden" name="e_id"/>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="e_jenistxt">Jenis:</label>
                                <select id="e_jenistxt" name="e_jenistxt" class="form-control" required="">
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
                                <label for="e_tgltxt">Tanggal:</label>
                                <input name="e_tgltxt" type="date" class="form-control" required="" autocomplete="off"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="e_nomtxt">Nominal:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Rp.</span></div>
                            <input type="text" name="e_nomtxt" class="form-control nomtxt" required="" autocomplete="off" onkeypress="return isNumber(event)"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="e_kettxt">Keterangan:</label>
                        <textarea id="e_kettxt" name="e_kettxt" class="form-control" required=""></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default font-weight-bold" data-dismiss="modal" onclick="Close_edit()"><i class="far fa-times-circle text-danger"></i> Cancel</button>
                    <button type="submit" class="btn btn-default font-weight-bold"><i class="fas fa-save text-success"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function Edit(token) {
        $.ajax({
            url: "Applications/Finance/Dashboard/get_data?token=" + token,
            type: 'GET',
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.stat) {
                    $('input[name="e_id"]').val(token);
                    $('input[name="e_tgltxt"]').val(data.tgl);
                    $('input[name="e_nomtxt"]').val(data.nominal);
                    $("#e_jenistxt").val(data.jenis);
                    CKEDITOR.instances.e_kettxt.setData(data.keterangan);
                    $('#modal_edit').modal({show: true, backdrop: 'static', keyboard: false});
                } else {
                    toastr.warning('error while getting data!');
                }
            }, error: function () {
                toastr.danger('error internal server!');
            }
        });
    }
    function Close_edit() {
        $('input[name="e_id"]').val('');
        $('input[name="e_tgltxt"]').val('');
        $('input[name="e_nomtxt"]').val('');
        $("#e_jenistxt").val('');
        CKEDITOR.instances.e_kettxt.setData('');
    }
</script>