<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('tlp/css_file'); ?>
</head>
<body>

	<?php $this->load->view('tlp/header'); ?>

	<!--  ************************* Page Title Starts Here ************************** -->
	
    <div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/comm.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);">
        <div class="container" >
            <div class="row">
                <h2>Evenement</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Evenement</li>
                </ul>
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
                            <img src="<?=base_url(); ?>assets/images/events/1.jpeg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                            <img src="<?=base_url(); ?>assets/images/events/2.jpeg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                            <img src="<?=base_url(); ?>assets/images/events/3.jpeg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                            <img src="<?=base_url(); ?>assets/images/events/4.jpeg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                            <img src="<?=base_url(); ?>assets/images/events/5.jpeg" class="img-responsive">
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


                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                            <img src="<?=base_url(); ?>assets/images/events/image_05.jpg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                            <img src="<?=base_url(); ?>assets/images/events/image_06.jpg" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
                            <img src="<?=base_url(); ?>assets/images/events/image_07.jpg" class="img-responsive">
                        </div>
                        <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
                            <img src="<?=base_url(); ?>assets/images/events/image_07.jpg" class="img-responsive">
                        </div>
            
                </div>
            </div>
        </div>

	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
    <style type="text/css">
        .img-responsive{
            height: 175px;
            width: 100%;

        }
    </style>
</body>
</html>