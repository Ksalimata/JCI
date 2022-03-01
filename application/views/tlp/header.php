<header class="continer-fluid ">
    <div  class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            jciabidjanivoire.sg@gmail.com
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            +225 07 07 78 08 87 </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 folouws">
                  
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
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    <button class="btn btn-sm btn-primary"><a href="<?php echo site_url('Accueil/contact');?>">Rejoignez-nous !</a></button>
                    <!-- <button class="btn btn-sm btn-default">Donate</button> -->
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="index.html">
                        <img src="<?=base_url(); ?>assets/images/logo.png" alt="" style="height: 65px;">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

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
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Accueil/archive');?>">Archives</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Accueil/event');?>">Evenements</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Accueil/annuaire');?>">Annuaire</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Accueil/propos');?>">A propos</a>
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
    
</style>