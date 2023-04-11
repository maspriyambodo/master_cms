<link href="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.12.1/plugins/autocomplete/skins/default.css" rel="stylesheet" type="text/css"/>
<?php
$credit = 0;
$debit = 0;
$deposit = 0;
?>
<div class="row">
    <div class="col-md-3">
        <div class="card card-custom rounded-xl">
            <div class="card-body">
                <div class="text-xl-left" style="font-size:20px;">
                    <i class="fas fa-arrow-down text-success"></i>
                    <span id="crtxt"></span>
                </div>
                <div class="clearfix my-4"></div>
                <b class="text-success">CREDIT</b>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom rounded-xl">
            <div class="card-body">
                <div class="text-xl-left" style="font-size:20px;">
                    <i class="fas fa-arrow-up text-danger"></i>
                    <span id="dbtxt"></span>
                </div>
                <div class="clearfix my-4"></div>
                <b class="text-danger">DEBIT</b>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom rounded-xl">
            <div class="card-body">
                <div class="text-xl-left" style="font-size:20px;">
                    <i class="fas fa-coins"></i>
                    <span id="bltxt"></span>
                </div>
                <div class="clearfix my-4"></div>
                <b>BALANCE</b>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom rounded-xl">
            <div class="card-body">
                <div class="text-xl-left" style="font-size:20px;">
                    <i class="fas fa-coins"></i>
                    <span id="detxt"></span>
                </div>
                <div class="clearfix my-4"></div>
                <b>DEPOSITO</b>
            </div>
        </div>
    </div>
</div>
<div class="clearfix my-4"></div>
<div class="card card-custom">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <select name="filtxt" class="form-control" onchange="Bulan(this.value)">
                        <option value="">Pilih Bulan</option>
                        <?php
                        foreach ($bulan as $dt_bulan) {
                            $tgl = $dt_bulan->tgl;
                            $new_tgl = date('F', strtotime($tgl));
                            echo '<option value="' . Enkrip($dt_bulan->tgl) . '">' . $new_tgl . '</option>';
                        }
?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
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
            </div>
        </div>
    </div>
</div>
<div class="clearfix my-4"></div>
<div class="card card-custom">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" style="width:100%;">
                <thead class="text-center text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>jenis</th>
                        <th>tanggal</th>
                        <th>nominal</th>
                        <th>keterangan</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    if (!$privilege['read']) { // jika memiliki privilege tambah atau create
        $uang_masuk = [];
    }
    foreach ($uang_masuk as $key => $dt_masuk) {
        $id_table = Enkrip($dt_masuk->id);
        ?>
                        <tr>
                            <td class="text-center">
                                <?php
                static $id = 1;
        echo $id++;
        ?>
                            </td>
                            <td class="text-center">
                                <?php
        if ($dt_masuk->jenis == 1) {
            $credit += $dt_masuk->nominal;
            echo '<span class="text-success">CREDIT</span>';
        } elseif ($dt_masuk->jenis == 2) {
            echo '<span class="text-danger">DEBIT</span>';
            $debit += $dt_masuk->nominal;
        } else {
            $deposit += $dt_masuk->nominal;
            echo '<span class="text-success">DEPOSITO</span>';
        }
        ?>
                            </td>
                            <td class="text-center"><?php echo $dt_masuk->tgl; ?></td>
                            <td class="text-right">Rp. <?php echo number_format($dt_masuk->nominal); ?></td>
                            <td><?php echo $dt_masuk->keterangan; ?></td>
                            <td class="text-center">
                                <?php
        $editbtn = '<button id="editbtn" type="button" class="btn btn-icon btn-link btn-xs" title="Edit" value="' . $id_table . '" onclick="Edit(this.value)"><i class="far fa-edit"></i></button>';
        $delbtn = '<button id="delbtn" type="button" class="btn btn-icon btn-link btn-xs" title="Delete" value="' . $id_table . '" onclick="Delete(this.value)"><i class="far fa-trash-alt text-danger"></i></button>';

        echo '<div class="btn-group">'; // open div btn-group

        if ($privilege['update']) { // jika memiliki privilege edit
            echo $editbtn;
        }
        if ($dt_masuk->stat and $privilege['delete']) { // jika memiliki privilege delete
            echo $delbtn;
        }

        echo '</div>'; //close div btn-group
        ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<input type="hidden" name="crtxt" value="<?php echo number_format($credit); ?>"/>
<input type="hidden" name="dbtxt" value="<?php echo number_format($debit); ?>"/>
<input type="hidden" name="dptxt" value="<?php echo number_format($deposit); ?>"/>
<input type="hidden" name="bltxt" value="<?php echo number_format($credit - $debit); ?>"/>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ckeditor.com/docs/vendors/4.14.0/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js?v=7.0.6'); ?>"></script>
<script>
                        window.onload = function () {
                            var credit = $('input[name="crtxt"]').val();
                            var debit = $('input[name="dbtxt"]').val();
                            var balance = $('input[name="bltxt"]').val();
                            var deposito = $('input[name="dptxt"]').val();
                            document.getElementById('crtxt').innerHTML = credit;
                            document.getElementById('dbtxt').innerHTML = debit;
                            document.getElementById('bltxt').innerHTML = balance;
                            document.getElementById('detxt').innerHTML = deposito;
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
                                "ServerSide": true,
                                "order": [[0, "asc"]],
                                "paging": false,
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
                                ]
                            });
                            CKEDITOR.replace('kettxt', {});
                            CKEDITOR.replace('e_kettxt', {});
                        };
                        function isNumber(b) {
                            b = (b) ? b : window.event;
                            var a = (b.which) ? b.which : b.keyCode;
                            if (a > 31 && (a < 48 || a > 57)) {
                                return false;
                            }
                            $('.nomtxt').mask('#.##0', {reverse: true});
                        }
                        function Bulan(token) {
                            window.location.href = 'Applications/Finance/Dashboard/filter?token=' + token;
                        }
                        function Delete(id){
                            Swal.fire({
                                html: `Anda yakin ingin menghapus data?`,
                                icon: "warning",
                                buttonsStyling: false,
                                showCancelButton: true,
                                confirmButtonText: "Ya",
                                cancelButtonText: 'Batal',
                                allowOutsideClick: false,
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: 'btn btn-danger'
                                }
                            }).then(function(result){
                                if (result.isConfirmed) {
                                    
                                    var csrf_hash = $('input[name="bodo_csrf_token"]').val();
                                    var formData = new FormData();
                                    formData.append('bodo_csrf_token', csrf_hash);
                                    formData.append('id', id);
                                    $.ajax({
                                        url: "finance-delete",
                                        type: "POST",
                                        data: formData,
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        dataType: "JSON",
                                        success: function (data) {
                                            if(data.stat){
                                                Swal.fire({
                                                text: 'berhasil menghapus data',
                                                icon: "success",
                                                buttonsStyling: false,
                                                confirmButtonText: "tutup",
                                                customClass: {
                                                    confirmButton: "btn btn-light"
                                                }
                                                }).then(function () {
                                                    location.reload();
                                                });
                                            }else {
                                                Swal.fire({
                                                text: 'gagal menghapus data',
                                                icon: "error",
                                                buttonsStyling: false,
                                                confirmButtonText: "tutup",
                                                customClass: {
                                                    confirmButton: "btn btn-light"
                                                }
                                                }).then(function () {
                                                    location.reload();
                                                });
                                            }
                                        },
                                        error: function () {
                                            Swal.fire({
                                                text: "Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.",
                                                icon: "error",
                                                buttonsStyling: false,
                                                confirmButtonText: "tutup",
                                                customClass: {
                                                    confirmButton: "btn btn-light"
                                                }
                                            }).then(function () {
                                                location.reload();
                                            });
                                        }
                                    });
                                }
                            });
                            
                        }
</script>