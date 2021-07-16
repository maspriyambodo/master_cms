<!DOCTYPE html>
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
        <section id="slider" class="hero odd p-0 featured">
            <div class="swiper-container no-slider animation slider-h-100 swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center swiper-slide-active" style="width: 1354px;">
                        <div id="particles-1" class="particles full-image" data-particle="bubble" data-mask="70"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1354" height="645"></canvas></div>
                        <div class="slide-content row">
                            <div class="col-12 d-flex inner">
                                <div class="center align-self-center text-center">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text aos-init aos-animate">
                                        # A Different<br />
                                        Digital Agency
                                    </h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description ml-auto mr-auto aos-init aos-animate">We work with a focus on creativity, combining design and results.</p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto mt-5 btn primary-button aos-init aos-animate"><i class="icon-cup"></i>GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </section>
        <section id="skills" class="section-1 counter skills">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2 class="super effect-static-text">AU+ Production</h2>
                        <p class="text-max-800">
                            Dengan tim dari AU+ Production, anda tidak perlu lagi mengintegrasikan konsep branding anda ke dua pihak (fotografer dan graphic designer).
                            Anda cukup mengkomunikasikan konsep branding anda kepada kami, tim kami dapat membuatkan seluruh promotion material yang anda butuhkan mulai dari jasa fotografi di Jakarta hingga Graphic & Web Design.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <section id="services" class="section-2 odd offers featured custom">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="super effect-static-text">Our Services</h2>
                        <p>Focused on results we seek to raise the level of our customers.</p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">

                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured">
                            <i class="icon icon-globe"></i>
                            <h4>Website Pro</h4>
                            <p>We build professional responsive websites optimized for the most popular search engines.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-basket"></i>
                            <h4>E-Commerce</h4>
                            <p>Increase your sales with an incredible online store, full of features and functionality.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-screen-smartphone"></i>
                            <h4>Mobile Apps</h4>
                            <p>Follow the global trend and create your revolutionary mobile app built with the best technologies.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-layers"></i>
                            <h4>Web Application</h4>
                            <p>We build applications for different purposes using technologies that allow you more security.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-chart"></i>
                            <h4>Digital Marketing</h4>
                            <p>We work to promote your brand in partnership with the best marketing platforms today.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured">
                            <i class="icon icon-bulb"></i>
                            <h4>Brand Creation</h4>
                            <p>We create your brand thinking about your target audience using design techniques.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="get" class="section-3 hero odd p-0">
            <div class="swiper-container no-slider animation slider-h-75 swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center swiper-slide-active" style="width: 1354px;">
                        <video class="full-image" data-mask="90" playsinline="" autoplay="autoplay" muted="muted" loop="">
                            <source src="<?php echo base_url('assets/images/project.mp4'); ?>" type="video/mp4" />
                        </video>
                        <div class="slide-content row">
                            <div class="col-12 d-flex inner">
                                <div class="center align-self-center text-center">
                                    <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text aos-init aos-animate">ARE YOU READY?</h2>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description ml-auto mr-auto aos-init aos-animate">
                                        We are driven by creativity. We create innovative things to help you achieve better results and consolidate yourself in the market.
                                    </p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto mt-5 btn primary-button aos-init aos-animate"><i class="icon-rocket"></i>CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </section>
        <section id="subscribe" class="section-5 subscribe">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2 class="super effect-static-text">Newsletter</h2>
                        <p class="text-max-800">Subscribe to our newsletter and follow our content closely. Receive news based on what has to do with you. We promise not to send promotions you don't like.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <form action="php/form.php" id="leverage-subscribe" class="row m-auto items">
                            <div class="col-12 col-lg-5 m-lg-0 input-group align-self-center item"><input type="text" name="name" class="form-control field-name" placeholder="Name" /></div>
                            <div class="col-12 col-lg-5 m-lg-0 input-group align-self-center item"><input type="email" name="email" class="form-control field-email" placeholder="Email" /></div>
                            <div class="col-12 col-lg-2 m-lg-0 input-group align-self-center item"><a class="btn primary-button w-100">SUBSCRIBE</a></div>
                            <div class="col-12 text-center"><span class="form-alert mt-5 mb-0" style="display: none;"></span></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="section-6 odd form featured">
            <div class="container">
                <form action="php/form.php" id="leverage-form" class="multi-step-form" data-steps="3">
                    <input type="hidden" name="section" value="leverage_form" />
                    <input
                        type="hidden"
                        name="reCAPTCHA"
                        data-key="6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"
                        value="03AGdBq26hlG9pV8Lh6y3iV0TBIL7gaBXcJYEQQ8pSrL-cLSg7UACaZYPlAM0JYl_369kHMAHTcmEQ3kQpbtN40awJ62Ft_r_hWCT7TYb9C0LLKm-p22m6PCBw3UbLntDqJ_cxoJXWpndcoTDX4sOAk2I2KLmo6__8jLALptQroZzXInr4BbaFMP4ygsku44fN9xaRofJtIulLinCoM5amnkPB1xO8PtU10NNKCL6diLmTaZH0OdGKWsCUHNryWZhsv7XQBbErW5MTUbCyah5IKrws7m1EKHwvgt5hXL1lbzOwHR5kS8QfYSWXr0mroRj6v9OVDXevNSejj7T3ycHZ3-q97R_lH-Cp-dpS8jOqB61PCdF34siQzUj6uPY3pL_eYbwPPrJ8qsQTS4uHZ2LanXxuF64aS0WncR0y_DN0ON_Zv6vpEin2mZrX4ggOGGe8AvQLBi7olUB4SB1CXTKEUh_y9xnOWQ6p1Q"
                        />
                    <div class="row">
                        <div class="col-12 col-md-6 align-self-start text-center text-md-left">
                            <div class="row success message">
                                <div class="col-12 p-0">
                                    <div class="wait">
                                        <div class="spinner-grow" role="status"><span class="sr-only">Loading</span></div>
                                        <h3 class="sending">SENDING</h3>
                                    </div>
                                    <div class="done">
                                        <i class="icon bigger icon-check"></i>
                                        <h3>Your message was sent successful. Thanks.</h3>
                                        <a href="" class="btn mx-auto primary-button"> <i class="icon-refresh"></i> REFRESH </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row intro form-content">
                                <div class="col-12 p-0">
                                    <div class="step-title" id="step-title-1">
                                        <h2 class="super effect-static-text">Let's Talk?</h2>
                                        <p>Don't wait until tomorrow. Talk to one of our consultants today and learn how to start leveraging your business.</p>
                                    </div>
                                    <div class="step-title" id="step-title-2" style="display: none;">
                                        <h2 class="super effect-static-text">Almost There</h2>
                                        <p>We need some more important information to better understand how we can help you in the best possible way.</p>
                                    </div>
                                    <div class="step-title" id="step-title-3" style="display: none;">
                                        <h2 class="super effect-static-text">Are you Ready?</h2>
                                        <p>Tell us a little about the project you need to create. This is valuable so that we can direct you to the ideal team.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center form-content">
                                <div class="col-12 p-0">
                                    <ul class="progressbar">
                                        <li class="active">Personal Details</li>
                                        <li>Company Budget</li>
                                        <li>Service Setup</li>
                                    </ul>
                                    <fieldset class="step-group" id="step-group-1">
                                        <div class="row">
                                            <div class="col-12 input-group p-0"><input type="email" name="email" data-minlength="3" class="form-control field-email" placeholder="Email" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0"><input type="text" name="name" data-minlength="3" class="form-control field-name" placeholder="Name" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0"><input type="text" name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone" /></div>
                                        </div>
                                        <div class="col-12 input-group p-0">
                                            <a class="step-next btn primary-button" id="step-next-1">NEXT<i class="icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="step-group" id="step-group-2">
                                        <div class="row">
                                            <div class="col-12 input-group p-0"><input type="text" name="company" data-minlength="3" class="form-control field-company" placeholder="Company" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0"><input type="text" name="manager" data-minlength="3" class="form-control field-manager" placeholder="Manager" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected="selected" disabled="disabled">What's your budget range?</option>
                                                    <option>Less than $2.000</option>
                                                    <option>$2.000 — $5.000</option>
                                                    <option>$5.000 — $10.000</option>
                                                    <option>$10,000+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0 d-flex justify-content-between justify-content-md-start">
                                            <a class="step-prev btn primary-button mr-4" id="step-prev-2"><i class="icon-arrow-left-circle"></i>PREV</a>
                                            <a class="step-next btn primary-button" id="step-next-2">NEXT<i class="icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="step-group" id="step-group-3">
                                        <div class="row">
                                            <div class="col-12 input-group p-0"><textarea name="message" data-minlength="3" class="form-control field-message" placeholder="Message" required=""></textarea></div>
                                        </div>
                                        <div class="col-12 input-group p-0 d-flex justify-content-between justify-content-md-start">
                                            <a class="step-prev btn primary-button mr-4" id="step-prev-3"><i class="icon-arrow-left-circle"></i>PREV</a>
                                            <a class="step-next btn primary-button" id="step-next-3">SEND<i class="icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="content-images col-12 col-md-6 pl-md-5 d-none d-md-block">
                            <div class="gallery">
                                <a class="step-image" data-poster="<?php echo base_url('assets/images/about-8.jpg'); ?>" href="https://www.youtube.com/watch?v=7e90gBu4pas" id="step-image-1">
                                    <i class="play-video icon-control-play"></i>
                                    <div class="mask-radius"></div>
                                    <img src="<?php echo base_url('assets/images/about-8.jpg'); ?>" class="fit-image" alt="Contact Us" />
                                </a>
                            </div>
                            <div class="gallery">
                                <a class="step-image" href="https://leverage-html.codings.dev/assets/images/about-6.jpg" id="step-image-2" style="display: none;">
                                    <img src="assets/about-6.jpg" class="fit-image" alt="Contact Us" />
                                </a>
                            </div>
                            <div class="gallery">
                                <a class="step-image" href="https://leverage-html.codings.dev/assets/images/about-7.jpg" id="step-image-3" style="display: none;">
                                    <img src="assets/about-7.jpg" class="fit-image" alt="Contact Us" />
                                </a>
                            </div>
                            <div class="gallery">
                                <a class="step-image" href="https://leverage-html.codings.dev/assets/images/about-leverage.jpg" id="step-image-4" style="display: none;">
                                    <img src="assets/about-leverage.jpg" class="fit-image" alt="Contact Us" />
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <footer class="odd">
            <section id="footer" class="footer">
                <div class="container">
                    <div class="row items footer-widget">
                        <div class="col-12 col-lg-3 p-0">
                            <div class="row">
                                <div class="branding col-12 p-3 text-center text-lg-left item">
                                    <div class="brand"><a href="javascript:void(0);" class="logo"><img src="<?php echo base_url('assets/images/systems/' . $this->bodo->Sys('logo')); ?>"/></a></div>
                                    <p>
                                        Authentic and innovative.<br />
                                        Built to the smallest detail<br />
                                        with a focus on usability<br />
                                        and performance.
                                    </p>
                                    <ul class="navbar-nav social share-list mt-0 ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 p-0">
                            <div class="row">
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Get in Touch</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"> <i class="icon-phone mr-2"></i> +1 123 98765 4321 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"> <i class="icon-envelope mr-2"></i> hello@business.com </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"> <i class="icon-location-pin mr-2"></i> Office Street, 123 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#contact" class="mt-4 mr-auto ml-auto ml-lg-0 btn dark-button smooth-anchor"><i class="icon-speech"></i>SEND A MESSAGE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Our Services</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item"><a href="#" class="nav-link">Website Development</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Building Applications</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">SEO &amp; Digital Marketing</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Branding and Identity</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Digital Images &amp; Videos</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Popular Tags</h4>
                                    <a href="#" class="badge tag">Mobile</a> <a href="#" class="badge tag">Development</a> <a href="#" class="badge tag">Technology</a> <a href="#" class="badge tag">App</a>
                                    <a href="#" class="badge tag">Education</a> <a href="#" class="badge tag">Business</a> <a href="#" class="badge tag">Health</a> <a href="#" class="badge tag">Industry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="copyright" class="p-3 copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left"><p>Enjoy the low price. We are tracking any intention of piracy.</p></div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>© 2021 AU+ Production.</p>
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
    </body>
</html>
