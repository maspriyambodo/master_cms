<section id="introduction" class="section-1 counter skills">
    <div class="container">
        <h2 class="super effect-static-text text-center">AU+ Production</h2>
        <div class="row intro">
            <div class="col-md-6">
                <p class="text-justify">
                    AU+ Production adalah Sekumpulan anak muda yang Kreatif & Penuh dengan ide-ide yang Unik.
                    Kami bergerak dalam bidang media kreatif khususnya di bidang Desain, Videography, dan Photography.
                </p>
            </div>
            <div class="col-md-6">
                <p class="text-justify">
                    Kami Berkarya sejak tahun 2014, meskipun terhitung masih muda, tapi kami telah membantu beberapa Perusahaan Besar dengan ide-ide Unik yang Kami Miliki. Dengan Tim yang Profesional, Kami mampu memunculkan ide yang kreatif & Inovatif.
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
            <?php foreach ($list_services as $list_services) { ?>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card featured">
                        <i class="fas fa-certificate text-info"></i>
                        <h4><?php echo $list_services->nama; ?></h4>
                        <p class="text-justify">
                            <?php echo $list_services->desc; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
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