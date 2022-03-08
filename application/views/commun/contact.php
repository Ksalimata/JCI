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
                <h2>Rejoignez-nous ! </h2>
                
            </div>
        </div>
    </div>
	
    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">

                <div style="padding:20px" class="col-sm-7">
                    <h2 >Rejoignez-nous !</h2> <br>
                    <form action="<?php echo site_url('Accueil/sendEmail');?>" method="POST">
                        <?php echo $this->session->flashdata('msg'); ?>
                            <div class="row cont-row">
                                <div  class="col-sm-3"><label>Votre nom </label><span>:</span></div>
                                <div class="col-sm-8"><input type="text" placeholder="Entrez votre nom" name="name" class="form-control input-sm"  ></div>
                                <?php echo form_error('name', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Email</label><span>:</span></div>
                                <div class="col-sm-8"><input type="text" name="email" placeholder="Entrez votre mail" class="form-control input-sm"  ></div>
                                <?php echo form_error('email', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Votre telephone</label><span>:</span></div>
                                <div class="col-sm-8"><input type="text" name="phone" placeholder="Entrez votre numero de telephone" class="form-control input-sm"  ></div>
                                <?php echo form_error('phone', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Votre Message</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <textarea rows="5" placeholder="Entrez votre message" name="message" class="form-control input-sm"></textarea>
                                </div>
                                <?php echo form_error('message', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div style="margin-top:10px;" class="row">
                                <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                <div class="col-sm-8">
                                        <input type="submit" value="Envoyer">
                                </div>
                            </div>
                        
                    </form>
                </div>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">
                        <h2 style="margin-top:10px;">Address</h2>

                       Antonya Street, <br>
                        23/H-2, Building<br>
                        TA, AUS District<br>
                        Phone:+91 9159669599<br>
                        Email:support@smarteyeapps.com<br>
                        Website:www.smarteyeapps.com.com<br>
                    </div>

                </div>
            </div>
        </div>
    </div>
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>