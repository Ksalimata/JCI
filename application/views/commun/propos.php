<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('tlp/css_file'); ?>
</head>
<body>
	<?php $this->load->view('tlp/header'); ?>
	<!--  ************************* Page Title Starts Here ************************** -->
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/comm.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);">
        <div class="container">
            <div class="row">
                <h2>A propos</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> a propos...</li>
                </ul>
            </div>
        </div>
    </div>
    
	<section class="our-blog" style="background-color: #edf1f5;">
            <div class="container">
                <div class="row session-title">
                    <!-- <p>Take a look at what people say about US </p> -->
                </div>
                <div class="blog-row row">
                    <div class="col-md-6 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="<?=base_url(); ?>assets/images/action.png" alt="" style="height: 241px;width: 100%;">
                            </figure>
                            <div class="blog-detail">
                                    <h5>
                                        <center><a href="<?php echo site_url('Accueil/communo');?>">Agenda</a></center>
                                    </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="<?=base_url(); ?>assets/images/forma.jfif" alt="" style="height: 241px;width: 100%;">
                            </figure>
                            <div class="blog-detail">
                                
                                    <h4>
                                        <center><a href="<?php echo site_url('Accueil/formation');?>">Evènements</a></center>
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