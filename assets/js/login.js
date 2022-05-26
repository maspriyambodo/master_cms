"use strict";
var KTLoginGeneral = function () {
    var _login;
    var _showForm = function (form) {
        var cls = 'login-' + form + '-on';
        var form = 'kt_login_' + form + '_form';

        _login.removeClass('login-forgot-on');
        _login.removeClass('login-signin-on');
        _login.removeClass('login-signup-on');

        _login.addClass(cls);

        KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
    };
    var _handleSignInForm = function () {
        var validation;
        validation = FormValidation.formValidation(
                KTUtil.getById('kt_login_signin_form'),
                {
                    fields: {
                        username: {
                            validators: {
                                notEmpty: {
                                    message: 'Username is required'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'Password is required'
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap()
                    }
                }
        );
        $('#kt_login_signin_form').keypress(function (e) {
            if (e.which == 13) {
                $('#kt_login_signin_submit').click();
                return false;
            }
        });
        $('#kt_login_signin_submit').on('click', function (e) {
            $('#kt_login_signin_submit').attr('disabled', '');
            e.preventDefault();
            validation.validate().then(function (status) {
                var token_hash = $('input[name="bodo_csrf_token"]').val();
                var formData = new FormData($('#kt_login_signin_form')[0]);
                formData.append('bodo_csrf_token', token_hash);
                if (status == 'Valid') {
                    $.ajax({
                        url: "Auth/Signin/",
                        type: "POST",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: "JSON",
                        success: function (data) {
                            $('input[name="bodo_csrf_token"]').val('');
                            if (data.stat) {
                                window.location.href = data.href;
                            } else if (data.stat == 'blocked') {
                                Swal.fire({
                                    text: "Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, mengerti!",
                                    customClass: {
                                        confirmButton: "btn btn-light"
                                    }
                                }).then(function () {
                                    location.reload();
                                });
                            } else {
                                $('input[name="bodo_csrf_token"]').val(data.csrf);
                                $('#kt_login_signin_submit').removeAttr('disabled');
                                if (data.login_attemp === 3) {
                                    location.reload();
                                }
                                Swal.fire({
                                    text: data.msgtxt,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, mengerti!",
                                    customClass: {
                                        confirmButton: "btn btn-light"
                                    }
                                });
                            }
                        }
                    });
                } else {
                    $('#kt_login_signin_submit').removeAttr('disabled');
                }
            });
        });

    };
    return {
        init: function () {
            _login = $('#kt_login');
            _handleSignInForm();
        }
    };
}();
jQuery(document).ready(function () {
    KTLoginGeneral.init();
});
