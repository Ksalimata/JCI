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
                <h2>Documents</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Docuements</li>
                </ul>
            </div>
        </div>
    </div>

		<?php if(!empty($files)){ foreach($files as $frow){ ?>
			<div class="file-box">
			    <div class="box-content">
			        <h5><?php echo $frow['title']; ?></h5>
			        <div class="preview">
			            <embed src="<?php echo base_url().'uploads/files/'.$frow['file_name']; ?>">
			        </div>
			        <a href="<?php echo base_url().'files/download/'.$frow['id']; ?>" class="dwn">Download</a>
			    </div>
			</div>
		<?php } } ?>
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>