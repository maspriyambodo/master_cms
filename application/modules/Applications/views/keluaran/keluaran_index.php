<div class="row">
    <?php
    foreach ($pasaran as $dt_pasar) {
        $id_pasar = Enkrip($dt_pasar->id);
        ?>
        <div class="col-md-4 my-4">
            <div class="table-responsive bg-white">
                <div class="form-group mt-4 text-center">
                    <a href="<?php echo base_url('keluaran_detail?pasar=' . $id_pasar); ?>"><?php echo $dt_pasar->nama; ?></a>
                </div>
                <table class="table table-borderless table-hover" style="width:100%;">
                    <tbody>
                        <tr>
                            <td>web</td>
                            <td>: <?php echo $dt_pasar->nama_web; ?></td>
                        </tr>
                        <tr>
                            <td>Hari Undi</td>
                            <td>: <?php echo $dt_pasar->hari_undi; ?></td>
                        </tr>
                        <tr>
                            <td>Hari Libur</td>
                            <td>: <?php echo $dt_pasar->hari_libur; ?></td>
                        </tr>
                        <tr>
                            <td>Jam Tutup</td>
                            <td>: <?php echo $dt_pasar->jam_tutup; ?></td>
                        </tr>
                        <tr>
                            <td>Jam Undi</td>
                            <td>: <?php echo $dt_pasar->jam_undi; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
</div>

<input type="hidden" name="err_msg" value="<?php echo $this->session->flashdata('err_msg'); ?>"/>
<input type="hidden" name="succ_msg" value="<?php echo $this->session->flashdata('succ_msg'); ?>"/>
<?php
if ($privilege['update']) {
    require_once 'modal_edit.php'; // jika bisa mengubah data dengan modal, jika tidak maka button dibuat menjadi  href
}
if ($privilege['delete']) {
    require_once 'modal_delete.php';
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
    };
    function isNumber(b) {
        b = (b) ? b : window.event;
        var a = (b.which) ? b.which : b.keyCode;
        if (a > 31 && (a < 48 || a > 57)) {
            return false;
        }
    }
</script>