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
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/comm.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;">
        <div class="container">
            <div class="row">
                <h2>INSCRIPTION </h2>
                
            </div>
        </div>
    </div>
    
    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div style="padding:20px" class="col-md-8">
                    <h2  style="text-align:center;">INSCRIPTION </h2> <br>
                    <form action="<?php echo site_url('Accueil/inscription');?>" method="POST">
                        <?php echo $this->session->flashdata('msg'); ?>
                            <div class="row cont-row">
                                <div  class="col-sm-4"><label>Nom & Prenoms </label><span>:</span></div>
                                <div class="col-sm-4"><input type="text" placeholder="Entrez votre nom" name="name" class="form-control input-sm"  ></div>
                                <div class="col-sm-4"><input type="text" placeholder="Entrez votre prenom" name="pname" class="form-control input-sm"  ></div>
                                <?php echo form_error('pname', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-4"><label>Email</label><span>:</span></div>
                                <div class="col-sm-8"><input type="text" name="email" placeholder="Email" class="form-control input-sm"  ></div>
                                <?php echo form_error('email', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-4"><label>Contact</label><span>:</span></div>
                                <div class="col-sm-8"><input type="int" name="phone" placeholder="Telephone" class="form-control input-sm"  ></div>
                                <?php echo form_error('phone', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-4"><label>Fonction</label><span>:</span></div>
                                <div class="col-sm-8"><input type="text" name="fonction" placeholder="Fonction jeune chambre" class="form-control input-sm"  ></div>
                                <?php echo form_error('fonction', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-4"><label>Profession</label><span>:</span></div>
                                <div class="col-sm-8"><input type="text" name="profession" placeholder="Profession" class="form-control input-sm"  ></div>
                                <?php echo form_error('profession', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-4"><label>OLM</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <select name="olm" id="pet-select" class="form-control input-sm">
                                        <option value="1">Abidjan Ivoire</option>
                                        <option value="2">Abidjan</option>
                                        <option value="3">Aidjan Elite</option>
                                        <option value="4">Abidjan Soleil</option>
                                        <option value="5">Abobo</option>
                                    </select>
                                </div>
                                <?php echo form_error('olm', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-4"><label>Role JCI</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <select name="role" id="pet-select" class="form-control input-sm">
                                        <option value="S">Senateurs</option>
                                        <option value="PP">Past President</option>
                                        <option value="P">President</option>
                                        <option value="M">Menbre</option>
                                        <option value="MP">Membre potentiel</option>
                                    </select>
                                </div>
                                <?php echo form_error('role', '<span class="text-danger">','</span>'); ?>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-4"><label>Mot de passe</label><span>:</span></div>
                                <div class="col-sm-8"><input type="password" name="password" placeholder="Mot de passe" class="form-control input-sm"  >
                                    <span >Le mot de passe doit être composé : <br> d'au moins une majuscule<br>d'au moins une minuscule<br>d'au moins un chiffre<br>d'au moins un caractère spécial<br>doit être long de 8 caractères au moins </span>
                                </div><br>

                                <?php echo form_error('password', '<span class="text-danger">','</span>'); ?>
                            </div>

                            <div  class="row cont-row">
                                <div  class="col-sm-4"><label>Confirmer Mot de passe</label><span>:</span></div>
                                <div class="col-sm-8"><input type="password" name="cpassword" placeholder="Confirme Mot de passe" class="form-control input-sm"  ></div>
                                <?php echo form_error('cpassword', '<span class="text-danger">','</span>'); ?>
                            </div>
                            
                            <div style="margin-top:10px;" class="row">
                                <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                <div class="col-sm-8">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Envoyer">
                                </div>
                            </div>
                        
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>