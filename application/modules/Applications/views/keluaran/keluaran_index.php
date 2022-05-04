<?php
if ($privilege['create']) { // jika memiliki privilege tambah data / create
    echo '<div class="text-right">'
    . '<div class="form-group">'
    . '<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#modal_add"><i class="far fa-plus-square"></i> Add new</button>'
    . '</div>'
    . '</div>';
    require_once 'modal_add.php'; // jika bisa menambah data dengan modal, jika tidak maka button dibuat menjadi  href
} else {
    null;
}
?>
<div class="row">
    <div class="col-md-4" style="height:450px;overflow:auto;">

        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>HK SIANG</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Setiap Hari</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: N/A</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 10:30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 11:00</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $hk_siang; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(1)); ?>" class="btn btn-default">Detail HK SIANG</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>

    </div>

    <div class="col-md-4" style="height:450px;overflow:auto;">
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>SYDNEY</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Setiap Hari</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: N/A</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 13:30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 14:00</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $sydney; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(2)); ?>" class="btn btn-default">Detail SYDNEY</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>

    </div>

    <div class="col-md-4" style="height:450px;overflow:auto;">
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>HAIPONG</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Setiap Hari</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: N/A</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 14:30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 15:00</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $haipong; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(3)); ?>" class="btn btn-default">Detail HAIPONG</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>

    </div>
</div>

<div class="row mt-4">
    <div class="col-md-4" style="height:450px;overflow:auto;">
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>SINGAPORE</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Senin, Rabu, Kamis, Sabtu, Minggu</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: Selasa, Jumat</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 17:30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 17:45</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $singapore; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(4)); ?>" class="btn btn-default">Detail SINGAPORE</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>

    </div>

    <div class="col-md-4" style="height:450px;overflow:auto;">
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>SINGAPORE 45</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Senin, Kamis</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: Selasa, Rabu, Jumat, Sabtu, Minggu</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 17:30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 17:45</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $singapore_45; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(5)); ?>" class="btn btn-default">Detail SINGAPORE 45</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>

    </div>

    <div class="col-md-4" style="height:450px;overflow:auto;">
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>MALAYSIA</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Setiap Hari</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: N/A</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 18:30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 19:00</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $malaysia; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(6)); ?>" class="btn btn-default">Detail MALAYSIA</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>

    </div>
</div>

<div class="row mt-4">
    <div class="col-md-4" style="height:450px;overflow:auto;">
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>JINAN</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Setiap Hari</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: N/A</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 19.30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 20.00</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $jinan; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(7)); ?>" class="btn btn-default">Detail JINAN</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>

    </div>

    <div class="col-md-4" style="height:450px;overflow:auto;">
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>QATAR</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Setiap Hari</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: N/A</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 20:30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 21:00</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $qatar; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(8)); ?>" class="btn btn-default">Detail QATAR</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>

    </div>

    <div class="col-md-4" style="height:450px;overflow:auto;">
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>BOGOR</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Setiap Hari</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: N/A</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 21:30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 22:00</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $bogor; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(9)); ?>" class="btn btn-default">Detail BOGOR</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>

    </div>
</div>

<div class="row mt-4">
    <div class="col-md-4" style="height:450px;overflow:auto;">
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>HONGKONG</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <tbody>
                    <tr>
                        <td>Hari Undi</td>
                        <td>: Setiap Hari</td>
                    </tr>
                    <tr>
                        <td>Hari Libur</td>
                        <td>: N/A</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td>: 22:30</td>
                    </tr>
                    <tr>
                        <td>Jam Undi</td>
                        <td>: 23:00</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $hongkong; ?>
                </tbody>
            </table>
            <div class="clearfix my-2"></div>
            <div class="text-center">
                <a href="<?php echo base_url('Applications/Toto/Keluaran/Detail?pasar=' . Enkrip(10)); ?>" class="btn btn-default">Detail HONGKONG</a>
            </div>
            <div class="clearfix my-2"></div>
        </div>
    </div>
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