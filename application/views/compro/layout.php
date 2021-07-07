<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="INSPIRO" />
        <meta name="description" content="Themeforest Template Polo" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>dsportlive | solution for all your sport</title>
        <link href="<?php echo base_url('assets/images/systems/' . $this->bodo->Sys('favico')); ?>" rel="shortcut icon"/>
        <link href="https://maspriyambodo.co.id/Polo/css/plugins.css" rel="stylesheet"/>
        <link href="https://maspriyambodo.co.id/Polo/css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
        <link href="<?php echo base_url('assets/css/me.css'); ?>" rel="stylesheet"/>
    </head>
    <body>
        <div class="body-inner">
            <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
                <div class="header-inner">
                    <div class="container">
                        <div id="logo">
                            <a href="<?php echo base_url(); ?>">
                                <span class="logo-default">BODO</span>
                                <span class="logo-dark">BODO</span>
                            </a>
                        </div>
                        <div id="search">

                        </div>
                        <div class="header-extras">
                            <ul>
                                <li>
                                </li>
                            </ul>
                        </div>
                        <div id="mainMenu-trigger">
                            <a class="lines-button x"><span class="lines"></span></a>
                        </div>
                        <div id="mainMenu">
                            <div class="container">
                                <nav>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                        <li><a href="<?php echo base_url(); ?>">Blog</a></li>
                                        <li><a href="<?php echo base_url(); ?>">Tournament</a></li>
                                        <li><a href="<?php echo base_url('Signin'); ?>">Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            {content}
            <div class="clearfix" style="margin:2% 0px;"></div>
            <footer id="footer">
                <div class="footer-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="widget">
                                    <div class="widget-title">Polo HTML5 Template</div>
                                    <p class="mb-5">
                                        Built with love in Fort Worth, Texas, USA<br />
                                        All rights reserved. Copyright © 2019. INSPIRO.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="widget">
                                            <div class="widget-title">Discover</div>
                                            <ul class="list">
                                                <li><a href="#">Features</a></li>
                                                <li><a href="#">Layouts</a></li>
                                                <li><a href="#">Corporate</a></li>
                                                <li><a href="#">Updates</a></li>
                                                <li><a href="#">Pricing</a></li>
                                                <li><a href="#">Customers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="widget">
                                            <div class="widget-title">Features</div>
                                            <ul class="list">
                                                <li><a href="#">Layouts</a></li>
                                                <li><a href="#">Headers</a></li>
                                                <li><a href="#">Widgets</a></li>
                                                <li><a href="#">Footers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="widget">
                                            <div class="widget-title">Pages</div>
                                            <ul class="list">
                                                <li><a href="#">Portfolio</a></li>
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Shop</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="widget">
                                            <div class="widget-title">Support</div>
                                            <ul class="list">
                                                <li><a href="#">Help Desk</a></li>
                                                <li><a href="#">Documentation</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-content">
                    <div class="container">
                        <div class="copyright-text text-center"><?php
                            $app_year = $this->bodo->Sys('app_year');
                            $now = date('Y');
                            if ($now == $app_year) {
                                echo $now . ' &copy;';
                            } else {
                                echo $app_year . '-' . $now . ' &copy;';
                            }
                            echo ' ' . $this->bodo->Sys('company_name') . '.';
                            ?></div>
                    </div>
                </div>
            </footer>
        </div>
        <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
        <script src="https://maspriyambodo.co.id/Polo/js/jquery.js"></script>
        <script src="https://maspriyambodo.co.id/Polo/js/plugins.js"></script>
        <script src="https://maspriyambodo.co.id/Polo/js/functions.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
        <script>
            $('.custom-select').select2();
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            function Tanggal(val) {

            }
            $('#loctxt').select2({
                ajax: {
                    url: '<?php echo base_url('Polo/Get_lapangan'); ?>',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });
        </script>
    </body>
</html>
