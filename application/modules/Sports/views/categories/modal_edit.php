<div class="modal fade" id="modal_edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_editLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Close_edit()">
                    <i aria-hidden="true" class="fas fa-times"></i>
                </button>
            </div>
            <form action="<?php echo site_url('Sports/Categories/Update/'); ?>" method="post">
                <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                <input type="hidden" name="id_e"/>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categorie_e">Categories:</label>
                        <input id="categorie_e" type="text" name="categorie_e" class="form-control" required="" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label for="description_e">Description:</label>
                        <textarea id="description_e" name="description_e" class="form-control" required="" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal" onclick="Close_edit()"><i class="far fa-times-circle"></i> Cancel</button>
                    <button type="submit" class="btn btn-success font-weight-bold"><i class="fas fa-save"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function Edit(id) {
        $.ajax({
            url: "<?php echo base_url('Sports/Categories/Get_data?id='); ?>" + id,
            type: 'GET',
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                document.getElementById('modal_editLabel').innerHTML = 'Edit Data ' + data.results.nama;
                $('input[name="id_e"]').val(id);
                $('input[name="categorie_e"]').val(data.results.nama);
                $('textarea[name="description_e"]').val(data.results.description);
            },
            error: function (jqXHR) {
                toastr.warning('error ' + jqXHR.status + ' ' + jqXHR.statusText);
            }
        });
    }
    function Close_edit() {
        $('input[name="id_e"]').val("");
        $('input[name="categorie_e"]').val("");
        $('textarea[name="description_e"]').val("");
    }
</script>