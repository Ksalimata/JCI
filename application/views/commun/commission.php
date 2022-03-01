<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('tlp/css_file'); ?>
</head>
<body>
	<?php $this->load->view('tlp/header'); ?>
	<!--  ************************* Page Title Starts Here ************************** -->
	<div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Commission</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> commission</li>
                </ul>
            </div>
        </div>
    </div>

	<section class="our-blog" style="background-color: #edf1f5;">
            <div class="container">
                <div class="row session-title">
                    <h2> Nos Actions </h2>
                    <!-- <p>Take a look at what people say about US </p> -->
                </div>
                <div class="blog-row row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="<?=base_url(); ?>assets/images/events/image_01.jpg" alt="">
                            </figure>
                            <div class="blog-detail">
                                    <h5>
                                        <center><a href="<?php echo site_url('Accueil/communo');?>">Actions Communautaires et Entrepreneuriat</a></center>
                                    </h5>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="<?=base_url(); ?>assets/images/events/image_02.jpg" alt="">
                            </figure>
                            <div class="blog-detail">
                                
                                    <h4>
                                        <center><a href="<?php echo site_url('Accueil/formation');?>">Formations et Dévéloppement</a></center>
                                    </h4>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="<?=base_url(); ?>assets/images/events/image_03.jpg" alt="">
                            </figure>
                            <div class="blog-detail">
                                
                                    <h4>
                                        <center><a href="<?php echo site_url('Accueil/loisirs');?>">Cultures, Loisirs et Anglais</a></center>
                                    </h4>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
    </section>
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>