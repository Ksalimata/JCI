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
                    <form action="<?php echo site_url('Accueil/inscription');?>" id="comfirms_form" method="POST" >
                        <?php echo $this->session->flashdata('msg'); ?>
                            <div class="row jumbotron">
                                <div class="col-sm-6 form-group">
                                    <label for="name-f">Nom</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Entrez votre nom." required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="name-l">Prenom</label>
                                    <input type="text" class="form-control" name="pname" id="pname" placeholder="Entrez votre prenom" required>
                                    <?php echo form_error('pname', '<span class="text-danger">','</span>'); ?>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre email." required>
                                    <?php echo form_error('email', '<span class="text-danger">','</span>'); ?>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="tel">Telephone</label>
                                    <input type="text" name="phone" class="form-control" id="tel" placeholder="Entrez votre numero de telephone." required>
                                    <?php echo form_error('phone', '<span class="text-danger">','</span>'); ?>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="address-2">Fonction</label>
                                    <input type="text" class="form-control" name="fonction" id="fonction" placeholder="Fonction jeune chambre." required>
                                    <?php echo form_error('fonction', '<span class="text-danger">','</span>'); ?>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="State">Profession</label>
                                    <input type="text" class="form-control" name="profession" id="profession" placeholder="Entrez votre profession." required>
                                    <?php echo form_error('profession', '<span class="text-danger">','</span>'); ?>
                                </div>
                                
                                <div class="col-sm-6 form-group">
                                    <label for="role">Role JCI</label>
                                    <select name="role" class="form-control custom-select browser-default">
                                        <option value="S">Senateurs</option>
                                        <option value="PP">Past President</option>
                                        <option value="P">President</option>
                                        <option value="M">Menbre</option>
                                        <option value="MP">Membre potentiel</option>
                                        <option value="MP">Alumni\ Ancien membre</option>
                                    </select>
                                    <?php echo form_error('role', '<span class="text-danger">','</span>'); ?>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>OLM</label>
                                    <select name="olm" class="form-control browser-default custom-select">
                                        <option value="1">Abidjan Ivoire</option>
                                        <option value="2">Abidjan</option>
                                        <option value="3">Aidjan Elite</option>
                                        <option value="4">Abidjan Soleil</option>
                                        <option value="5">Abobo</option>
                                    </select>
                                    <?php echo form_error('olm', '<span class="text-danger">','</span>'); ?>
                                </div>
                                
                                <div class="col-sm-6 form-group">
                                    <label for="pass">Password</label>
                                    <input type="Password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe." required>
                                    <span >Le mot de passe doit être composé : <br> d'au moins une majuscule<br>d'au moins une minuscule<br>d'au moins un chiffre<br>d'au moins un caractère spécial<br>doit être long de 8 caractères au moins </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="pass2">Confirm Password</label>
                                    <input type="Password" name="cpassword" class="form-control" id="cpassword" placeholder="Saisissez à nouveau votre mot de passe." required>
                                    <?php echo form_error('cpassword', '<span class="text-danger">','</span>'); ?>
                                </div>
                                

                                <div class="col-sm-12 form-group mb-0">
                                   <center><button id="comfirms_1" class="btn btn-primary" style="width: 26%;margin-top: 5%;background-color: #3597dc;border-color: #3597dc;">S'INSCRIRE</button></center>
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

    <script type="text/javascript">
        $("#comfirms_1").click(function (e) 
        {
            
            let strengthBadge = document.getElementById('StrengthDisp');
            let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
            let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')

            var password = document.getElementById('password');
            var c_password = document.getElementById('cpassword');

            if ($(password).val() !== $(c_password).val()){
                password.setCustomValidity("Les mots de passes ne sont pas conformes");
                c_password.setCustomValidity("Les mots de passes ne sont pas conformes");
            } else if(!strongPassword.test($(password).val())){
                password.setCustomValidity("Le mot de passe doit être composé d'au moins d'une majuscule, d'une minuscule, d'un chiffre, d'un caractère spécial et doit être long de 8 caractères au moins");
            } else {
                password.setCustomValidity("");
                c_password.setCustomValidity("");

                $("#comfirms_form").submit();
            }

        });
    </script>
</body>
</html>