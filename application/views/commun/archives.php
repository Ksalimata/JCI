<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('tlp/css_file'); ?>
    <style type="text/css">
        body{
           font-family: "Opificio" !important;
           font-size: 20px;
        }
        .page-nav h2 {
            font-size: 100px;
            width: 100%;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>
	<?php $this->load->view('tlp/header'); ?>

	<!--  ************************* Page Title Starts Here ************************** -->
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/archives.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;">
        <div class="container">
            <div class="row">
                <h2>Archives</h2>
                <!-- <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Archives</li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
             <div class="gallery-filter d-none d-sm-block">
                <button class="btn btn-default filter-button active" data-filter="membre">C.E.L.</button>
                <button class="btn btn-default filter-button" data-filter="presse"> C.D.L.</button>
                <button class="btn btn-default filter-button" data-filter="pastP"> COMMISSION</button>

            </div> 
        </div>
    </div>

	<h1>Archives</h1>
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>