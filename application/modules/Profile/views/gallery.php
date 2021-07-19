<section id="portfolio-grid" class="section-1 showcase portfolio blog-grid filter-section">
    <div class="overflow-holder">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2 class="mb-0">What We Do</h2>
                </div>
            </div>               
            <div class="row items filter-items-1 shuffle">
                <?php foreach ($portfolio as $portfolio) { ?>
                    <div class="col-12 col-md-6 col-lg-4 item filter-item-1 shuffle-item shuffle-item--visible" data-groups="[&quot;technology&quot;,&quot;digital-marketing&quot;,&quot;photography&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <div class="row card p-0 text-center">
                            <div class="gallery">
                                <?php
                                if ($portfolio->tipe == 1) {
                                    $btn_portfolio = '';
                                    $path_portfolio = base_url('assets/images/portfolio/highres/' . $portfolio->highres);
                                } elseif ($portfolio->tipe == 2) {
                                    $btn_portfolio = '<i class="play-video-full icon-control-play"></i><div class="mask-radius-full"></div>';
                                    $path_portfolio = base_url('assets/images/portfolio/highres/' . $portfolio->highres);
                                } else {
                                    $btn_portfolio = '<i class="play-video-full icon-control-play"></i><div class="mask-radius-full"></div>';
                                    $path_portfolio = $portfolio->highres;
                                }
                                ?>
                                <a href="<?php echo $path_portfolio; ?>" class="image-over">
                                    <?php echo $btn_portfolio; ?>
                                    <img src="<?php echo base_url('assets/images/portfolio/' . $portfolio->lowres); ?>" alt="<?php echo $portfolio->title; ?>" style="height:193px;"/>
                                </a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="<?php echo $path_portfolio; ?>">
                                        <h4 class="m-0"><?php echo $portfolio->title; ?></h4>
                                    </a>
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <p><?php echo $portfolio->desc; ?></p>
                                </div>
                            </div>
                        </div> 
                    </div>
                <?php } ?>
            </div>
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</section>