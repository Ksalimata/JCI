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
                <h2>Archives</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Archives</li>
                </ul>
            </div>
        </div>
    </div>

	<h1>Archives</h1>
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>