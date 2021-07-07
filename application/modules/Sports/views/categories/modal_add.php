<div class="modal fade" id="modal_add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_add" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_addLabel">add new categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="fas fa-times"></i>
                </button>
            </div>
            <form action="<?php echo site_url('Sports/Categories/Add/'); ?>" method="post">
                <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categorie_a">Categories:</label>
                        <input id="categorie_a" type="text" name="categorie_a" class="form-control" required="" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label for="description_a">Description:</label>
                        <textarea id="description_a" name="description_a" class="form-control" required="" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"><i class="far fa-times-circle"></i> Cancel</button>
                    <button type="submit" class="btn btn-success font-weight-bold"><i class="fas fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>