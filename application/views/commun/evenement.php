<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('tlp/css_file'); ?>
</head>
<body>
	<?php $this->load->view('tlp/header'); ?>

	<!--  ************************* Page Title Starts Here ************************** -->
	<!-- <div class="page-nav no-margin row" style="background-image: url('https://amymhaddad.s3.amazonaws.com/morocco-blue.png');height: 400px;width: 100%;">
        <div class="container" >
            <div class="row">
                <h2>Evenement</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Evenement</li>
                </ul>
            </div>
        </div>
    </div>-->
    <div class="page-nav no-margin row slider" style="padding: 0px;background-color: #ffffff;">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slider/slider-3.jpg" alt="" style="height: 400px;width: 100%;"></div>
                    
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slider/slider-1.jpg" alt="" style="height: 400px;width: 100%;"></div>
                
            </div>
            <div class="item">
                <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slider/slider-2.jpg" alt="" style="height: 400px;width: 100%;"></div>
                
            </div>

        </div>
    </div>

    <!--  ************************* Gallery Starts Here ************************** -->
        <div id="portfolio" class="gallery">    
           <div class="container">
              
                <div class="row">
                

                     <div class="gallery-filter d-none d-sm-block">
                        <button class="btn btn-default filter-button" data-filter="all">Galerie</button>
                        <!-- <button class="btn btn-default filter-button" data-filter="hdpe">Finance</button>
                        <button class="btn btn-default filter-button" data-filter="sprinkle">Digital Marketing</button>
                        <button class="btn btn-default filter-button" data-filter="spray"> Money</button>
                        <button class="btn btn-default filter-button" data-filter="irrigation">Business Alaysis</button> -->
                    </div> 
                    <br/>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                            <img src="<?=base_url(); ?>assets/images/events/image_01.jpg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                            <img src="<?=base_url(); ?>assets/images/events/image_02.jpg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                            <img src="<?=base_url(); ?>assets/images/events/image_01.jpg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                            <img src="<?=base_url(); ?>assets/images/events/image_03.jpg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                            <img src="<?=base_url(); ?>assets/images/events/image_04.jpg" class="img-responsive">
                        </div>

                      

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                            <img src="<?=base_url(); ?>assets/images/events/image_05.jpg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                            <img src="<?=base_url(); ?>assets/images/events/image_06.jpg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
                            <img src="<?=base_url(); ?>assets/images/events/image_07.jpg" class="img-responsive">
                        </div>

            
                </div>
            </div>
        </div>

	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>