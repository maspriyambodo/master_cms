<section id="portfolio" class="section-1 odd offers secondary">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <h2 class="mb-0 super effect-static-text">What We Do</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
            <?php foreach ($portfolio as $portfolio) { ?>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card featured">
                        <h4><?php echo $portfolio->title; ?></h4>
                        <p><?php echo $portfolio->desc; ?></p>
                        <div class="gallery">
                            <a href="<?php echo base_url('assets/images/portfolio/highres/' . $portfolio->highres); ?>">
                                <img src="<?php echo base_url('assets/images/portfolio/' . $portfolio->lowres); ?>" alt="<?php echo $portfolio->title; ?>" style="height:193px;">
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php echo $this->pagination->create_links(); ?>
    </div>
</section>