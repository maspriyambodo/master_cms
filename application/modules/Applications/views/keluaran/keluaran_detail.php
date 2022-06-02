<link href="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.12.1/plugins/autocomplete/skins/default.css" rel="stylesheet" type="text/css"/>
<script src="https://ckeditor.com/docs/vendors/4.14.0/ckeditor/ckeditor.js"></script>

<div class="table-responsive bg-white">
    <table class="table table-borderless table-hover" style="width:100%;">
        <tbody>
            <tr>
                <td>Web</td>
                <td>
                    : <?php echo '<a href="' . $data['inpo']['nama_web'] . '" target="new">' . $data['inpo']['nama_web'] . '</a>'; ?>
                </td>
                <td>Tipe</td>
                <td>: <?php echo $data['inpo']['tipe'] . 'D'; ?></td>
            </tr>
            <tr>
                <td>Hari Undi</td>
                <td>: <?php echo $data['inpo']['undi']; ?></td>
                <td>Jam Tutup</td>
                <td>: <?php echo $data['inpo']['jam_tutup']; ?></td>
            </tr>
            <tr>
                <td>Hari Libur</td>
                <td>: <?php echo $data['inpo']['libur']; ?></td>
                <td>Jam Undi</td>
                <td>: <?php echo $data['inpo']['jam_undi']; ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clearfix my-4"></div>
<div class="row">
    <div class="col-md-4" style="overflow: auto;height: 503px;">
        <div class="clearfix d-block d-xl-none border" style="margin: 20px 0px 20px 0px;"></div>
        <div class="table-responsive bg-white">
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($data['exec'] as $value) {
                        $no++;
                        $id_angka = Enkrip($value->id);
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->tgl_keluar; ?></td>
                            <td><?php echo $value->limad . ' ' . $value->enamd . ' ' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat; ?></td>
                            <td class="text-center">
                                <button id="editbtn" type="button" class="btn btn-icon btn-link btn-xs" title="edit hasil" value="<?php echo $id_angka; ?>" onclick="Edit(this.value)"><i class="far fa-edit"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

    <div class="col-md-4" style="overflow: auto;height: 503px;">
        <div class="clearfix d-block d-xl-none border" style="margin: 20px 0px 20px 0px;"></div>
        <div class="table-responsive bg-white">
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>angka</th>
                        <th>total</th>
                        <th>total2</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="1" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['satu']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['satu_1']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['satu'] + $data['angka2']['satu_1']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="2" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['dua']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['dua_2']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['dua'] + $data['angka2']['dua_2']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="3" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['tiga']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['tiga_3']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['tiga'] + $data['angka2']['tiga_3']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="4" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['empat']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['empat_4']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['empat'] + $data['angka2']['empat_4']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="5" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['lima']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['lima_5']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['lima'] + $data['angka2']['lima_5']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="6" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['enam']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['enam_6']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['enam'] + $data['angka2']['enam_6']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="7" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['tujuh']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['tujuh_7']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['tujuh'] + $data['angka2']['tujuh_7']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="8" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['delapan']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['delapan_8']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['delapan'] + $data['angka2']['delapan_8']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="9" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['sembilan']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['sembilan_9']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['sembilan'] + $data['angka2']['sembilan_9']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control disabled text-center" value="0" disabled=""/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['nol']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka2']['nol_0']; ?>"/></td>
                        <td><input type="text" class="form-control text-center" value="<?php echo $data['angka']['nol'] + $data['angka2']['nol_0']; ?>"/></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-4">
        <div class="clearfix d-block d-xl-none border" style="margin: 20px 0px 20px 0px;"></div>
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>RESULT 3</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>ANGKA</th>
                        <th>AS</th>
                        <th>KOP</th>
                        <th>KEPALA</th>
                        <th>EKOR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><?php echo $data['as']['as_1']; ?></td>
                        <td><?php echo $data['kop']['kop_1']; ?></td>
                        <td><?php echo $data['kepala']['kepala_1']; ?></td>
                        <td><?php echo $data['ekor']['ekor_1']; ?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><?php echo $data['as']['as_2']; ?></td>
                        <td><?php echo $data['kop']['kop_2']; ?></td>
                        <td><?php echo $data['kepala']['kepala_2']; ?></td>
                        <td><?php echo $data['ekor']['ekor_2']; ?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><?php echo $data['as']['as_3']; ?></td>
                        <td><?php echo $data['kop']['kop_3']; ?></td>
                        <td><?php echo $data['kepala']['kepala_3']; ?></td>
                        <td><?php echo $data['ekor']['ekor_3']; ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo $data['as']['as_4']; ?></td>
                        <td><?php echo $data['kop']['kop_4']; ?></td>
                        <td><?php echo $data['kepala']['kepala_4']; ?></td>
                        <td><?php echo $data['ekor']['ekor_4']; ?></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><?php echo $data['as']['as_5']; ?></td>
                        <td><?php echo $data['kop']['kop_5']; ?></td>
                        <td><?php echo $data['kepala']['kepala_5']; ?></td>
                        <td><?php echo $data['ekor']['ekor_5']; ?></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><?php echo $data['as']['as_6']; ?></td>
                        <td><?php echo $data['kop']['kop_6']; ?></td>
                        <td><?php echo $data['kepala']['kepala_6']; ?></td>
                        <td><?php echo $data['ekor']['ekor_6']; ?></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><?php echo $data['as']['as_7']; ?></td>
                        <td><?php echo $data['kop']['kop_7']; ?></td>
                        <td><?php echo $data['kepala']['kepala_7']; ?></td>
                        <td><?php echo $data['ekor']['ekor_7']; ?></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><?php echo $data['as']['as_8']; ?></td>
                        <td><?php echo $data['kop']['kop_8']; ?></td>
                        <td><?php echo $data['kepala']['kepala_8']; ?></td>
                        <td><?php echo $data['ekor']['ekor_8']; ?></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><?php echo $data['as']['as_9']; ?></td>
                        <td><?php echo $data['kop']['kop_9']; ?></td>
                        <td><?php echo $data['kepala']['kepala_9']; ?></td>
                        <td><?php echo $data['ekor']['ekor_9']; ?></td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td><?php echo $data['as']['as_0']; ?></td>
                        <td><?php echo $data['kop']['kop_0']; ?></td>
                        <td><?php echo $data['kepala']['kepala_0']; ?></td>
                        <td><?php echo $data['ekor']['ekor_0']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="clearfix my-4"></div>

<div class="row">
    <div class="col-md-4">
        <div class="clearfix d-block d-xl-none border" style="margin: 20px 0px 20px 0px;"></div>
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>RESULT 4</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>Posisi</th>
                        <th>Angka</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AS</td>
                        <td>
                            <?php
                            foreach ($data['posisi']['as'] as $posisi_1) {
                                echo $posisi_1;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>KOP</td>
                        <td>
                            <?php
                            foreach ($data['posisi']['kop'] as $posisi_2) {
                                echo $posisi_2;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>KEPALA</td>
                        <td>
                            <?php
                            foreach ($data['posisi']['kepala'] as $posisi_3) {
                                echo $posisi_3;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>EKOR</td>
                        <td>
                            <?php
                            foreach ($data['posisi']['ekor'] as $posisi_4) {
                                echo $posisi_4;
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-8">
        <div class="clearfix d-block d-xl-none border" style="margin: 20px 0px 20px 0px;"></div>
        <div class="clearfix d-block d-xl-none my-2 border"></div>
        <form action="<?php echo site_url('Applications/Toto/Keluaran/Save_1/'); ?>" method="post">
            <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
            <input type="hidden" name="idtxt" value="<?php echo Enkrip($id_toto[0]->id); ?>"/>
            <input type="hidden" name="pasartxt2" value="<?php echo Post_get('pasar'); ?>"/>
            <textarea id="editor1" name="asutxt" class="form-control" rows="12" required="">
                <?php
                foreach ($data['exec'] as $noted) {
                    if (!empty($noted->noted)) {
                        echo $noted->noted;
                    }
                }
                ?>
            </textarea>
            <div class="form-group">
                <button type="submit" class="btn btn-success mt-4"><i class="fas fa-save"></i> Save</button>
            </div>
        </form>
    </div>
</div>
<input type="hidden" name="err_msg" value="<?php echo $this->session->flashdata('err_msg'); ?>"/>
<input type="hidden" name="succ_msg" value="<?php echo $this->session->flashdata('succ_msg'); ?>"/>
<?php
require_once 'modal_add2.php';
require_once 'modal_pasar.php';
require_once 'modal_edit.php';
unset($_SESSION['err_msg']);
unset($_SESSION['succ_msg']);
?>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('asutxt', {});
        $('#sticky_toolbar').attr('class', 'sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4');
        $('#sticky_toolbar').append(
                '<li class="nav-item mb-2" data-toggle="modal" data-target="#modal_add2" title="add new"> <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success"> <i class="fas fa-plus"></i> </a> </li>' +
                '<li class="nav-item mb-2" data-toggle="modal" data-target="#modal_pasar" title="pindah pasar"> <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success"> <i class="fas fa-map-marked-alt"></i> </a> </li>'
                );
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
    });
    $('.angka').keyup(function (e) {
        if (this.value.length === this.maxLength) {
            let next = $(this).data('next');
            $('#n' + next).focus();
        }
    });
    function isNumber(b) {
        b = (b) ? b : window.event;
        var a = (b.which) ? b.which : b.keyCode;
        if (a > 31 && (a < 48 || a > 57)) {
            return false;
        }
    }
</script>