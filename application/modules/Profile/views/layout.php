<!DOCTYPE html>
<?php $compro = $this->bodo->Compro(); ?>
<html lang="en">
    <head>
        <base href="<?php echo base_url(); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8;">
        <meta property="og:image" content="<?php echo base_url('assets/images/systems/' . $this->bodo->Sys('logo')); ?>">
        <meta property='og:title' content='{siteTitle}'>
        <meta property='og:description' content='{description}'>
        <meta property='og:type' content='article'>
        <meta property='og:url' content='<?php echo base_url(); ?>'>
        <meta property="og:locale" content="en_US">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="description" content="{description}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>{siteTitle}</title>
        <link href="<?php echo base_url('assets/images/systems/' . $this->bodo->Sys('favico')); ?>" rel="shortcut icon"/>
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/systems/' . $this->bodo->Sys('favico')); ?>" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/images/systems/' . $this->bodo->Sys('favico')); ?>" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/images/systems/' . $this->bodo->Sys('favico')); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/slider.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/animation.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/gallery.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/cookie-notice.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/default.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-light-blue.css'); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
        <header id="header">
            <nav class="navbar navbar-expand aos-init aos-animate visible">
                <div class="container header">
                    <a class="navbar-brand" href="javascript:void(0);">
                        <img src="<?php echo base_url('assets/images/systems/' . $this->bodo->Sys('favico')); ?>"/>
                    </a>
                    <div class="ml-auto"></div>
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a href="<?php echo base_url('Profile/index/'); ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Profile/Gallery/'); ?>" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Blog/index/'); ?>" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Profile/Contact/'); ?>" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search"> <i class="icon-magnifier"></i> </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu"> <i class="icon-menu m-0"></i> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        {slider}
        <script src="<?php echo base_url('assets/js/jquery_002.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery_003.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/popper.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/ponyfill.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/slider.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/animation.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/progress-radial.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bricklayer.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/gallery.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/shuffle.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/cookie-notice.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/particles.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
        {content}
        <footer class="odd">
            <section id="footer" class="footer">
                <div class="container">
                    <div class="row items footer-widget">
                        <div class="col-12 col-lg-3 p-0">
                            <div class="row">
                                <div class="branding col-12 p-3 text-center text-lg-left item">
                                    <div class="brand">
                                        <a href="javascript:void(0);" class="logo">
                                            <img src="<?php echo base_url('assets/images/systems/' . $this->bodo->Sys('logo')); ?>"/>
                                        </a>
                                    </div>
                                    <p>
                                        <?php
                                        if (!empty($compro['tagline_company'])) {
                                            echo $compro['tagline_company'];
                                        } else {
                                            null;
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 p-0">
                            <div class="row">
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Get in Touch</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"> <i class="icon-phone mr-2"></i> 
                                                <?php
                                                if (!empty($compro['phone_company'])) {
                                                    echo $compro['phone_company'];
                                                } else {
                                                    null;
                                                }
                                                ?>
                                            </a>
                                        </li>
                                        <?php
                                        if (!empty($compro['mail_company'])) {
                                            echo '<li class="nav-item">'
                                            . '<a href="mailto:' . $compro['mail_company'] . '" class="nav-link">'
                                            . '<i class="icon-envelope mr-2"></i> '
                                            . $compro['mail_company']
                                            . '</a>'
                                            . '</li>';
                                        } else {
                                            null;
                                        }
                                        ?>
                                        <li class="nav-item">
                                            <a href="javascript:void();" class="nav-link">
                                                <i class="icon-location-pin mr-2"></i> 
                                                <?php
                                                if (!empty($compro['alamat_company'])) {
                                                        echo $compro['alamat_company'];
                                                    } else {
                                                        null;
                                                    }
                                                ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Our Services</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Photo Product</a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Photo & Video Product</a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Photo & Video Dokumentasi</a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Photobooth</a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Photobooth Matrix</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <ul class="navbar-nav social share-list mt-0 ml-auto text-center">
                                        <li class="nav-item">
                                            <a href="https://www.instagram.com/auplusproduction/" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://www.facebook.com/auplusproduction" target="new" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://www.youtube.com/channel/UC6nO-RBVbQcTR4R6f8v-kTQ" class="nav-link"><i class="icon-social-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="copyright" class="p-3 copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left">

                        </div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>
                                <?php
                                if (!empty($compro['copyright_company'])) {
                                        echo $compro['copyright_company'];
                                    } else {
                                        null;
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">Search <i class="icon-close"></i></div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>What are you looking for?</h2>
                                        <p>Search for services and news about the best that happens in the world.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group"><input type="text" class="form-control" placeholder="Enter Keywords" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button"><i class="icon-magnifier"></i>SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">Menu <i class="icon-close"></i></div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <ul class="navbar-nav items">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contacts p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="scroll-to-top" class="scroll-to-top" style="display: none;">
            <a href="#header" class="smooth-anchor"> <i class="icon-arrow-up"></i> </a>
        </div>
    </body>
</html>
