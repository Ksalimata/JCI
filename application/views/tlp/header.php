<header class="continer-fluid ">
    <div  class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-md-3 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            jciabidjanivoire.sg@gmail.com
                            <span> </span> <i class="fas fa-phone-volume"></i>
                            +225 07 07 78 08 87
                        </li>

                    </ul>
                </div>
                <div class="col-md-3 folouws">
                  
                    <ul class="ulright">
                       <li> <small>Suivez nous</small>:</li>
                        <li>
                            <i class="fab fa-facebook-square"></i>
                        </li>
                        <li>
                            <i class="fab fa-twitter-square"></i>
                        </li>
                        <li>
                            <i class="fab fa-instagram"></i>
                        </li>
                        <li>
                            <i class="fab fa-linkedin"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 d-none d-md-block btn-bhed" >
                    

                
                    <?php echo $this->session->flashdata('msg');?>
                    <?php if (($this->session->userdata('nom'))==NULL):?>
                    <button class="btn btn-sm btn-primary coo" id="conect"  onclick="nextPrev()" style="border: 1px solid #f9c800;background-color: #f9c800;margin-left:50%;">Connectez-vous !
                    </button>
                    <?php endif;?>
                    <?php if($this->session->userdata('nom')):?>
                        <p style="margin-left: 39%;"><?php echo("Bienvenu ". $this->session->userdata('nom')." ".$this->session->userdata('prenom')); ?></p>
                    <?php endif;?> 
                   
                        <form action="<?php echo site_url('Accueil/login');?>" method="POST" id=connect style="display:none;">
                            <input type="text"  name="email" id="mail" placeholder="email"  class="cobtn" required>
                            <input type="password"  name="password" id="pass" placeholder="password" class="cobtn" required>
                            <input type="submit" value="Se Connecter" style="float: right;">
                        </form>
                    <!-- <button class="btn btn-sm btn-default">Donate</button> -->
                    
                </div>
               
                <div class="col-md-3 d-none d-md-block btn-bhed">
                    <?php if (($this->session->userdata('nom'))==NULL):?>
                    <button class="btn btn-sm btn-primary coo" id="inscrip" style="border: 1px solid #f9c800;background-color: #f9c800;"> 
                        <a href="<?php echo site_url('Accueil/contact');?>">Inscription </a>
                    </button>
                    <?php endif;?>
                    <?php if($this->session->userdata('nom')):?>
                        <a class="btn btn-sm btn-primary coo" href="<?php echo site_url('Accueil/logout');?>" style="border: 1px solid #f9c800;background-color: #f9c800;">Deconnexion</a>
                        
                    <?php endif;?> 
                </div>    
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-2 col-md-12 logo">
                    <a href="index.html">
                        <img src="<?=base_url(); ?>assets/images/logo.png" alt="" style="height: 65px;">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-10 col-md-12 d-none d-lg-block nav-col">

                            <ul class="navbad">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url('Accueil');?>">Accueil
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Accueil/commission');?>">Commissions</a> 
                                </li>    
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#">Commissions</a>
                                      <div class="dropdown-content">
                                        <a style="border-radius: 2px;" href="<?php //echo site_url('Accueil/communo');?>">Actions Communautaires et entrepreneuriales</a>
                                        <a style="border-radius: 2px;" class="sous-menu" href="<?php //echo site_url('Accueil/formation');?>">Formations et Développement</a>
                                        <a style="border-radius: 2px;" class="sous-menu" href="<?php //echo site_url('Accueil/loisirs');?>">Cultures, Loisirs et Anglais</a>
                                      </div>
                                </li> -->
                                <?php if(($this->session->userdata('role_fk')==='1')&&($this->session->userdata('olm')==="1")):?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Accueil/archive');?>">Archives</a>
                                </li>
                                <?php endif;?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Accueil/event');?>">Evenements</a>
                                </li>
                                <?php if(($this->session->userdata('role_fk')==='1')&&($this->session->userdata('olm')==="1")):?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Accueil/annuaire');?>">Annuaire</a>
                                </li>
                                <?php endif;?>
                                
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php //echo site_url('Accueil/propos');?>">A propos</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">A propos</a>
                                      <div class="dropdown-content">
                                        <a style="border-radius: 2px;" class="sous-menu" href="<?php echo site_url('Propos/jci');?>">Jeune Chambre Internationale</a>
                                        <a style="border-radius: 2px;" href="<?php echo site_url('Propos/jciCI');?>">Jeune Chambre Internationale Côte d'Ivoire</a>
                                        <a style="border-radius: 2px;" href="#">Jeune Chambre Internationale Abidjan Ivoire</a>
                                        <a style="border-radius: 2px;" class="sous-menu" href="<?php echo site_url('Propos/organigrame');?>">Organigrammes</a>
                                        <a style="border-radius: 2px;" class="sous-menu" href="#">Membres du CDL</a>
                                        <a style="border-radius: 2px;" class="sous-menu" href="<?php echo site_url('Propos/aires');?>">Aires d'opportunités</a>
                                        <a style="border-radius: 2px;" class="sous-menu" href="<?php echo site_url('Propos/membre');?>">Devenir Membre</a>
                                      </div>
                                </li>   
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Files');?>">Document d'activité</a>
                                </li>   
                            </ul>

                </div>
            </div>
        </div>
    </div> 
</header>
<style type="text/css">
    header .nav-col .navbad li a:hover {
          background-color: #359dda;
          color: #fff !important; }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 2;
      margin-top: 1%;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .nav-item:hover .dropdown-content {display: block;}

    .dropdown:hover .nav-link {background-color: #3e8e41;}

    .nav-item a.active 
{
    background-color: #04AA6D!important;
    color: #ffffff;
} 
.cobtn  
{
    float: left;
    margin-right: 0px !important;
    color: #a0a1a3;
    padding-left: 29px;
    border: 1px solid;
    margin-top: 2%;
}
    
</style>
<script type="text/javascript">
    function nextPrev()
    {
        document.getElementById("conect").style.display = "none";
        document.getElementById("connect").style.display = "block";
        document.getElementById("inscrip").style.display = "none";
        //document.getElementById("pass").style.display = "block";
    }
</script>