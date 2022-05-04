<h3 class="text-center"><?php echo $data['exec'][0]->nama_pasar; ?></h3>
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
<div class="clearfix my-4"></div>
<div class="row">
    <div class="col-md-4">
        <div class="clearfix d-block d-xl-none my-2 border"></div>
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>KELUARAN</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($data['exec'] as $value) {
                        $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->tgl_keluar; ?></td>
                            <td><?php echo $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

    <div class="col-md-4">
        <div class="clearfix d-block d-xl-none my-2 border"></div>
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>RESULT 1</b>
            </div>
            <table class="table table-borderless table-hover" style="width:100%;">
                <thead class="text-uppercase">
                    <tr>
                        <th>angka</th>
                        <th>total</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><?php echo $data['angka']['satu']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><?php echo $data['angka']['dua']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><?php echo $data['angka']['tiga']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo $data['angka']['empat']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><?php echo $data['angka']['lima']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><?php echo $data['angka']['enam']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><?php echo $data['angka']['tujuh']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><?php echo $data['angka']['delapan']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><?php echo $data['angka']['sembilan']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td><?php echo $data['angka']['nol']; ?></td>
                        <td><input type="text" class="form-control" maxlength="1" style="width:20%;height:23px;"/></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-4">
        <div class="clearfix d-block d-xl-none my-2 border"></div>
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>RESULT 2</b>
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
        <div class="table-responsive bg-white">
            <div class="form-group mt-4 text-center">
                <b>RESULT 3</b>
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
        <div class="clearfix d-block d-xl-none my-2 border"></div>
        <form action="<?php echo site_url('Applications/Toto/Keluaran/Save_1/'); ?>" method="post">
            <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
            <input type="hidden" name="idtxt" value="<?php echo Enkrip($id_toto[0]->id); ?>"/>
            <textarea name="asutxt" class="form-control" rows="12" required="">
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