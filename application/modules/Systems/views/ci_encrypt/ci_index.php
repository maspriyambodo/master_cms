<div class="card card-custom">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <form id="enc1" action="#" method="post">
                    <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                    <label class="h4">CI Encryption</label>
                    <div class="clearfix my-4"></div>
                    <div class="form-group">
                        <label for="txt1">Plain text:</label>
                        <input type="text" id="txt1" name="txt1" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="result1">Result:</label>
                        <textarea id="result1" class="form-control" name="result1" rows="5" readonly=""></textarea>
                    </div>
                    <div class="clearfix my-4"></div>
                    <div class="text-center">
                        <button type="button" name="btn1" id="btn1" class="btn btn-default" onclick="Btn1()"><i class="fas fa-key text-danger"></i> Encrypt</button>
                        <button type="button" name="copy1" id="copy1" class="btn btn-default" onclick="Copy1()"><i class="far fa-copy"></i> Copy Result</button>
                        <button type="button" name="clear1" id="clear1" class="btn btn-default" onclick="Clear1()"><i class="far fa-trash-alt"></i> Clear</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <form id="enc2" action="#" method="post">
                    <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                    <label class="h4">CI Decryption</label>
                    <div class="clearfix my-4"></div>
                    <div class="form-group">
                        <label for="txt2">Salt text:</label>
                        <input type="text" id="txt2" name="txt2" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="result2">Result:</label>
                        <textarea id="result2" class="form-control" name="result2" rows="5" readonly=""></textarea>
                    </div>
                    <div class="clearfix my-4"></div>
                    <div class="text-center">
                        <button type="button" name="btn2" id="btn2" class="btn btn-default" onclick="Btn2()"><i class="fas fa-lock-open fa-fw text-success"></i> Decrypt</button>
                        <button type="button" name="copy2" id="copy2" class="btn btn-default" onclick="Copy2()"><i class="far fa-copy"></i> Copy Result</button>
                        <button type="button" name="clear2" id="clear2" class="btn btn-default" onclick="Clear2()"><i class="far fa-trash-alt"></i> Clear</button>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <form id="enc2" action="#" method="post">
                    <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
                    <label class="h4">PHP Hash</label>
                    <div class="clearfix my-4"></div>
                    <div class="form-group">
                        <label for="txt3">Plain text:</label>
                        <input type="text" id="txt3" name="txt3" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="result3">Result:</label>
                        <textarea id="result3" class="form-control" name="result3" rows="5" readonly=""></textarea>
                    </div>
                    <div class="clearfix my-4"></div>
                    <div class="text-center">
                        <button type="button" name="btn3" id="btn3" class="btn btn-default" onclick="Btn3()"><i class="fas fa-key text-danger"></i> Hash</button>
                        <button type="button" name="copy3" id="copy3" class="btn btn-default" onclick="Copy3()"><i class="far fa-copy"></i> Copy Result</button>
                        <button type="button" name="clear3" id="clear3" class="btn btn-default" onclick="Clear3()"><i class="far fa-trash-alt"></i> Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function Clear3() {
        $('input[name="txt3"]').val('');
        $('textarea[name="result3"]').val('');
    }
    function Copy3() {
        var cpo = document.getElementById('result3');
        if (!cpo.value) {
            toastr.error('field cannot be empty');
            return false;
        }
        cpo.select();
        cpo.setSelectionRange(0, 99999);
        document.execCommand("copy");
        toastr.success('password copied !');
    }
    function Btn3() {
        var plaintxt, resultxt, csrf_hash, form_data;
        form_data = new FormData();
        plaintxt = $('input[name="txt3"]').val();
        resultxt = $('textarea[name="result3"]').val();
        csrf_hash = $('input[name="bodo_csrf_token"]').val();
        if (!plaintxt) {
            toastr.error('Please input plain text!');
            return false;
        }

        form_data.append('txt3', plaintxt);
        form_data.append('bodo_csrf_token', csrf_hash);
        $.ajax({
            url: 'Systems/Ci_enkrip/Enc3/',
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function (data) {
                $('input[name="bodo_csrf_token"]').val(data.csrf);
                $('textarea[name="result3"]').val(data.txt);
            },
            error: function () {
                toastr.error('error system!');
                location.reload();
            }
        });
    }

    function Clear1() {
        $('input[name="txt1"]').val('');
        $('textarea[name="result1"]').val('');
    }
    function Copy1() {
        var cpo = document.getElementById('result1');
        if (!cpo.value) {
            toastr.error('field cannot be empty');
            return false;
        }
        cpo.select();
        cpo.setSelectionRange(0, 99999);
        document.execCommand("copy");
        toastr.success('password copied !');
    }
    function Btn1() {
        var plaintxt, resultxt, csrf_hash, form_data;
        form_data = new FormData();
        plaintxt = $('input[name="txt1"]').val();
        resultxt = $('textarea[name="result1"]').val();
        csrf_hash = $('input[name="bodo_csrf_token"]').val();
        if (!plaintxt) {
            toastr.error('Please input plain text!');
            return false;
        }

        form_data.append('txt1', plaintxt);
        form_data.append('bodo_csrf_token', csrf_hash);
        $.ajax({
            url: 'Systems/Ci_enkrip/Enc1/',
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function (data) {
                $('input[name="bodo_csrf_token"]').val(data.csrf);
                $('textarea[name="result1"]').val(data.txt);
            },
            error: function () {
                toastr.error('error system!');
                location.reload();
            }
        });
    }

    function Clear2() {
        $('input[name="txt2"]').val('');
        $('textarea[name="result2"]').val('');
    }
    function Copy2() {
        var cpo = document.getElementById('result2');
        if (!cpo.value) {
            toastr.error('field cannot be empty');
            return false;
        }
        cpo.select();
        cpo.setSelectionRange(0, 99999);
        document.execCommand("copy");
        toastr.success('password copied !');
    }
    function Btn2() {
        var plaintxt, resultxt, csrf_hash, form_data;
        form_data = new FormData();
        plaintxt = $('input[name="txt2"]').val();
        resultxt = $('textarea[name="result2"]').val();
        csrf_hash = $('input[name="bodo_csrf_token"]').val();
        if (!plaintxt) {
            toastr.error('Please input plain text!');
            return false;
        }

        form_data.append('txt2', plaintxt);
        form_data.append('bodo_csrf_token', csrf_hash);
        $.ajax({
            url: 'Systems/Ci_enkrip/Dec1/',
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function (data) {
                $('input[name="bodo_csrf_token"]').val(data.csrf);
                $('textarea[name="result2"]').val(data.txt);
            },
            error: function () {
                toastr.error('error system!');
                location.reload();
            }
        });
    }
</script>