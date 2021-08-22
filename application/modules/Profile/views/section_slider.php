<?php $compro = $this->bodo->Compro(); ?>
<section id="slider" class="hero odd p-0 featured">
    <div class="swiper-container no-slider animation slider-h-100 swiper-container-initialized swiper-container-horizontal">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-center swiper-slide-active" style="width: 1354px;">
                <div id="particles-1" class="particles full-image" data-particle="bubble" data-mask="70"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1354" height="645"></canvas></div>
                <div class="slide-content row">
                    <div class="col-12 d-flex inner">
                        <div class="center align-self-center text-center">
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text aos-init aos-animate">
                                <?php
                                if (!empty($compro['slider_text'])) {
                                    echo $compro['slider_text'];
                                } else {
                                    null;
                                }
                                ?>
                            </h1>
                            <p data-aos="zoom-out-up" data-aos-delay="800" class="description ml-auto mr-auto aos-init aos-animate">
                                <?php
                                if (!empty($compro['sub_slider'])) {
                                    echo $compro['sub_slider'];
                                } else {
                                    null;
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</section>