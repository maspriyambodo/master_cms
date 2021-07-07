<style>
    .DTFC_LeftWrapper {
        top: -13px !important;
        overflow-x: hidden;
    }
    .DTFC_RightHeadWrapper{
        top: -13px !important;
        overflow-x: hidden;
    }
    .DTFC_RightBodyWrapper {
        display: none;
    }
</style>
<div class="card card-custom">
    <div class="card-body">
        <?php
        if ($privilege['create']) { // jika memiliki privilege tambah data / create
            echo '<div class="text-right">'
            . '<div class="form-group">'
            . '<a href="' . base_url('Sports/Venue/Add/') . '" class="btn btn-primary mr-2"><i class="far fa-plus-square"></i> Add new</a>'
            . '</div>'
            . '</div>';
        } else {
            null;
        }
        ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" style="width:100%;">
                <thead class="text-center text-uppercase">
                    <tr>
                        <th>No</th>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>tlp</th>
                        <th>provinsi</th>
                        <th>kabupaten</th>
                        <th>kecamatan</th>
                        <th>kelurahan</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                </thead>
            </table>
            <tbody></tbody>
        </div>
    </div>
</div>
<input type="hidden" name="err_msg" value="<?php echo $this->session->flashdata('err_msg'); ?>"/>
<input type="hidden" name="succ_msg" value="<?php echo $this->session->flashdata('succ_msg'); ?>"/>
<?php
if ($privilege['delete']) {
    require_once 'modal_delete.php';
    require_once 'modal_activate.php';
} else {
    null;
}
unset($_SESSION['err_msg']);
unset($_SESSION['succ_msg']);
?>
<script>
    window.onload = function () {
        toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: false,
            positionClass: "toast-top-right",
            preventDuplicates: true,
            onclick: null,
            showDuration: "300",
            hideDuration: "2000",
            timeOut: false,
            extendedTimeOut: "2000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        };
        var a, b;
        a = $('input[name="err_msg"]').val();
        b = $('input[name="succ_msg"]').val();
        if (a) {
            toastr.error(a);
        } else if (b) {
            toastr.success(b);
        }
        $('table').dataTable({
            "serverSide": true,
            "order": [[0, "asc"]],
            "paging": true,
            "ordering": true,
            "info": true,
            "processing": true,
            "deferRender": true,
            "scrollCollapse": true,
            "scrollX": true,
            "scrollY": "400px",
            dom: `<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>
                <'row'<'col-sm-12'tr>>
                <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            buttons: [
                {extend: 'print', footer: true},
                {extend: 'copyHtml5', footer: true},
                {extend: 'excelHtml5', footer: true},
                {extend: 'csvHtml5', footer: true},
                {extend: 'pdfHtml5', footer: true}
            ],
            fixedColumns: {
                leftColumns: 2,
                rightColumns: 1
            },
            "ajax": {
                "url": "<?php echo site_url('Sports/Venue/Lists/') ?>",
                "type": "POST"
            },
            columnDefs: [
                {
                    targets: 0,
                    className: 'text-center',
                    orderable: false
                },
                {
                    targets: 2,
                    className: 'text-center',
                    orderable: false,
                    width: '100%'
                }
            ]
        });
    };
    function isNumber(b) {
        b = (b) ? b : window.event;
        var a = (b.which) ? b.which : b.keyCode;
        if (a > 31 && (a < 48 || a > 57)) {
            return false;
        }
        return true;
    }
</script>