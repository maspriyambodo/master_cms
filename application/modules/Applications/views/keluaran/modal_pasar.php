<div class="modal fade" id="modal_pasar" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_pasarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_pasarLabel">LIST PASARAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive-md">
                    <table class="table table-bordered table-hover table-head-solid" style="width:100%;">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2">PASARAN</th>
                                <th rowspan="2">TIPE</th>
                                <th rowspan="2">WEB</th>
                                <th colspan="2">HARI</th>
                                <th colspan="2">JAM</th>
                            </tr>
                            <tr>
                                <th>UNDI</th>
                                <th>LIBUR</th>
                                <th>TUTUP</th>
                                <th>UNDI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                foreach ($pasaran as $dt_pasar) {
                                    $id_pasar = Enkrip($dt_pasar->id);
                                    if ($dt_pasar->id == Dekrip(Post_get('pasar'))) {
                                        $keluaran_url = $dt_pasar->nama;
                                    } else {
                                        $keluaran_url = '<a href="' . base_url('keluaran_detail?pasar=' . $id_pasar) . '">' . $dt_pasar->nama . '</a>';
                                    }
                                    echo '<tr>'
                                    . '<td>' . $keluaran_url . '</td>'
                                    . '<td class="text-center">' . $dt_pasar->tipe . 'D</td>'
                                    . '<td><a href="' . $dt_pasar->nama_web . '" target="new">buka</a></td>'
                                    . '<td>' . $dt_pasar->hari_undi . '</td>'
                                    . '<td>' . $dt_pasar->hari_libur . '</td>'
                                    . '<td class="text-center">' . $dt_pasar->jam_tutup . '</td>'
                                    . '<td class="text-center">' . $dt_pasar->jam_undi . '</td>'
                                    . '</tr>';
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="button" class="btn btn-info btn-hover-bg-success btn-block btn-light-primary" data-dismiss="modal" aria-label="Close" style="width:100%;">
                    <i aria-hidden="true" class="fas fa-times"></i> Close
                </button>
            </div>
        </div>
    </div>
</div>