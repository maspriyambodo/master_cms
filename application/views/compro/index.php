<div id="slider" class="inspiro-slider slider-fullscreen dots-creative">
    <div class="slide kenburns" data-bg-image="<?php echo base_url('assets/images/systems/wp1.jpg'); ?>">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">
                <h1>WELCOME TO THE DSPORTLIVE</h1>
                <p>Say hello to the smartest and most flexible bootstrap template. Polo is an powerful template that can build any type of websites, and quite possibly the only one you will ever need.</p>
                <a href="#welcome" class="btn scroll-to">SPORT NOW</a><span></span>
            </div>
        </div>
    </div>
</div>
<section id="welcome">
    <div class="container">
        <form action="<?php echo base_url('Polo/Search/'); ?>" method="post" class="widget widget-mycart p-cb" style="cursor: default !important;">
            <input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>"/>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                            <!--<input id="loctxt" name="loctxt" type="text" class="form-control" required="" placeholder="find a favorite sport place" autocomplete="off">-->
                            <select id="loctxt" class="form-control" name="loctxt"></select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            <input id="tgltxt" name="tgltxt" type="text" class="form-control datepicker" required="" onchange="Tanggal(this.value)" value="<?php echo date('Y-m-d'); ?>" onkeydown="return false;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-clock"></i>
                            </span>
                            <select id="timetxt" name="timetxt" class="form-control custom-select" required="">
                                <option value="">Select time</option>
                                <option value="0">00:00</option>
                                <option value="1">01:00</option>
                                <option value="2">02:00</option>
                                <option value="3">03:00</option>
                                <option value="4">04:00</option>
                                <option value="5">05:00</option>
                                <option value="6">06:00</option>
                                <option value="7">08:00</option>
                                <option value="8">09:00</option>
                                <option value="9">10:00</option>
                                <option value="11">11:00</option>
                                <option value="12">12:00</option>
                                <option value="13">13:00</option>
                                <option value="14">14:00</option>
                                <option value="15">15:00</option>
                                <option value="16">16:00</option>
                                <option value="17">17:00</option>
                                <option value="18">18:00</option>
                                <option value="19">19:00</option>
                                <option value="20">20:00</option>
                                <option value="21">21:00</option>
                                <option value="22">22:00</option>
                                <option value="23">23:00</option>
                                <option value="24">24:00</option>
                            </select>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="text-center">
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Find Spot</button>
                </div>
            </div>
        </form>
    </div>
</section>
