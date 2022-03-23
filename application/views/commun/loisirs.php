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
        .footer {
            padding: 50px;
            padding-bottom: 50px;
            background-color: #359dda;
            color: #FFF;
        }
    </style>
</head>
<body>
	<?php $this->load->view('tlp/header'); ?>
	<!--  ************************* Page Title Starts Here ************************** -->
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/comm.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;">
        <div class="container">
            <div class="row">
                <h2>Cultures, Loisirs et Anglais </h2>
                <!-- <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> commission</li>
                </ul> -->
            </div>
        </div>
    </div>
	<section class="our-blog" style="background-color: #edf1f5;">
            <div class="container">
                <div class="row session-title">
                    <!-- <p>Take a look at what people say about US </p> -->
                </div>
                <div class="blog-row row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="<?=base_url(); ?>assets/images/reunion.jpeg" alt="" style="height: 241px;width: 100%;">
                            </figure>
                            <div class="blog-detail">
                                    <h4>
                                        <center><a href="<?php echo site_url('Accueil/communo');?>">Réunion de Commission</a></center>
                                    </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="<?=base_url(); ?>assets/images/projet.png" alt="" style="height: 241px;width: 100%;">
                            </figure>
                            <div class="blog-detail">
                                
                                    <h4>
                                        <center><a href="<?php echo site_url('Accueil/formation');?>">Projet</a></center>
                                    </h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="<?=base_url(); ?>assets/images/archi.jpg" alt="" style="height: 241px;width: 100%;">
                            </figure>
                            <div class="blog-detail">
                                
                                    <h4>
                                        <center><a href="<?php echo site_url('Accueil/loisirs');?>">Archives</a></center>
                                    </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="our-blog" style="background-color: #edf1f5;">
            <div class="container">
                <div class="row session-title">
                    <!-- <p>Take a look at what people say about US </p> -->
                </div>
                <div class="blog-row row" style="margin-top: -8%;">
                    <div class="col-md-12 col-sm-12">
                        <div class="single-blog">
                            <div class="blog-detail">
                                    <h4>
                                        <center><a href="<?php echo site_url('FD/agendaFD');?>">Programme d'activité</a></center>
                                    </h4>
                            </div>
                            <figure>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Projets</th>
                                            <th>Objectifs</th>
                                            <th>Date d’Exécution</th>
                                            <th>Directeur de Projet</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>Arbre de Noël couplée à la Célébration de l’Excellence</td>
                                                <td>Contribuer au renforcement de l'éducation des enfants et à l'épanouissement de ceux-ci et célébrer l’excellence</td>
                                                <td>16/012/ 2021</td>
                                                <td>TRA LOU Angèle</td>
                                            </tr>
                                            <tr>
                                                <td>Concours Local d’Art Oratoire et de Débat Couplé Afterworrk 1</td>
                                                <td>Concours d’art oratoire et renforcer les liens de fraternité els membres et membres potentiels de notre OLM.</td>
                                                <td>A determiner</td>
                                                <td>A determiner</td>
                                            </tr>
                                            <tr>
                                                <td>Sortie Détente</td>
                                                <td>Contribuer au divertissement des membres et membres potentiels.</td>
                                                <td>02/042022</td>
                                                <td>IRIE LOU Ivonne</td>
                                            </tr>
                                            <tr>
                                                <td>Afterwork 2</td>
                                                <td>Contribuer au divertissement et à l’épanouissement des membres et membres potentiels.</td>
                                                <td>23/07/2022</td>
                                                <td>A determiner</td>
                                            </tr>
                                    </tbody>
                                </table>
                                
                            </figure>
                            
                        </div>
                    </div>
                    <!-- <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="<?=base_url(); ?>assets/images/forma.jfif" alt="" style="height: 241px;width: 100%;">
                            </figure>
                            <div class="blog-detail">
                                
                                    <h4>
                                        <center><a href="<?php echo site_url('Accueil/event');?>">Evènements à venir</a></center>
                                    </h4>
                                
                            </div>
                        </div>
                    </div> -->
                    
                </div>
            </div>
    </section>
	<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <center><h1 style="color: white;">Evènements récents</h1></center><br>
                    <div class="blog-row row">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-blog">
                                <figure>
                                    <img src="<?=base_url(); ?>assets/images/events/image_01.jpg" alt="" style="height: 164px;">
                                </figure>
                                <div class="blog-detail">
                                    <small>Le lancement des Journées Nationales de la Citoyenneté Active JCI ...</small>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="single-blog">
                                <figure>
                                    <img src="<?=base_url(); ?>assets/images/events/image_02.jpg" alt="" style="height: 164px;">
                                </figure>
                                <div class="blog-detail">
                                    <small>Le lancement des Journées Nationales de la Citoyenneté Active JCI ...</small>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>    
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-4">
                    <h2>Qui sommes-nous ?</h2>
                    <p>
                        Nous sommes de jeunes citoyens actifs du monde en général et de la Côte d’Ivoire en particulier. Vivant, communiquant, agissant et créant un impact dans nos communautés, nous sommes des Elites. Vous êtes un jeune citoyen actif ? Voulez-vous faire la différence dans votre communauté ? Rejoignez-nous dans ce voyage d’action locale pour un impact mondial.
                    </p>
                    
                </div>
                <div class="col-md-4" >
                    <img src="<?=base_url(); ?>assets/images/logoabidjan.png" style="height: 194px;margin-left: 25%;">
                   
                </div>
                <div class="col-md-4" >
                    <h2>Contactez Nous</h2>
                    <p >
                        JCI Abidjan Ivoire <br>
                        Angle avenue LAMBLIN, Rue Augustin <br>
                        Plateau, 01 BP 3714 Abidjan 01 <br>
                        Phone: (+225) 0708474285/ 0749258131 <br>
                        Email: <a href="#" class="">jciabidjanivoire.sg@gmail.com</a><br>
                        Web: <a href="#" class="">www.jciabidjanivoire.org</a>
                    </p>
                    <!-- <div class="donate-link col-md-3"><a href="<?php //echo site_url('Accueil/contact');?>" class="btn btn-primary "><span class="btn-title">INSCRIPTION</span></a></div> -->
                </div>

            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2022 &copy; Tous droits réservés | JCI Abidjan Ivoire</a>
                
                        <span>
                        <a><i class="fab fa-github"></i></a>
                        <a><i class="fab fa-google-plus-g"></i></a>
                        <a><i class="fab fa-pinterest-p"></i></a>
                        <a><i class="fab fa-twitter"></i></a>
                        <a><i class="fab fa-facebook-f"></i></a>
                </span>
            </div>    

    </div>

    
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>