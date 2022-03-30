<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('tlp/css_file'); ?>
    <link href="<?=base_url(); ?>assets/css/style12.css" rel="stylesheet" type="text/css" />
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
        p{
            text-align: justify;
        }
    </style>
</head>


<body>
	<?php $this->load->view('tlp/header'); ?>
	<!--  ************************* Page Title Starts Here ************************** -->
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/imgCul1.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;">
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
    <section>
            <div class="container">  
                <div class="row">  
                       <h2 style="margin-top:2%"> I.  Présentation de la commission </h2><br> 
                <p>Pour mener à bien les différentes missions qui nous sont assignées et atteindre nos objectifs, pour la mandature 2022, la commission Cultures, Loisirs et Anglais (CCLA) est composée comme suit :</p> 

                        <table class="table table-bordered table-striped" style="margin-top:2%">
                            <thead>    
                                <tr>
                                    <th>Fonction</th>
                                    <th>Nom et Prénoms</th>
                                    <th>Contact</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>Vice-président assigné</td>
                                        <td>  SORO Tcherignimin Seydou </td>
                                        <td>07 48 27 48 37</td>
                                        <td>tcherigniminseydousoro@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Directeur de commission</td>
                                        <td>N’GUESSAN Saint Wilfried</td>
                                        <td> 07 09 26 14 80</td>
                                        <td>saintwilfried03@gmal.com</td>
                                    </tr>
                                    <tr>
                                        <td>Directeur Adjointe de commission</td>
                                        <td>AGOH Thierry </td>
                                        <td>07 57 34 48 67 </td>
                                        <td>jeanmichelagoh@gmail.com</td>

                                    </tr>
                            </tbody>
                        </table> 
                           
                <h2 style="margin-top:2%">II. Rappel du cahier de charge de la Commission</h2><br>    
                <p>La commission culture Loisirs et Anglais est chargée du développement culturel et de la promotion de la langue anglaise auprès des membres de l’OLM.</p><br> <br>    
                <p style="margin-top:2%"> Le volet Cultures</p><br> 
                <p>L’objectif de cet axe sera non seulement de créer un cadre de partage d’expérience de culture générale, mais aussi de promouvoir la culture ivoirienne en allant à la rencontre de celle des peuples du monde entier en général, de l’Afrique en particulier et plus spécifiquement de celle des communautés de la CEDEAO.</p><br> <br>    

                <p style="margin-top:2%;font-weight: bold;">Les objectifs spécifiques de ces réunions seront de :</p><br>   

                <ul>
                  <li>Partager et renforcer les capacités des membres en termes de culture générale  ;</li>
                  <li>Promouvoir l’image de la JCI Abidjan Ivoire ;</li>
                  <li>Promouvoir la culture ivoirienne ;</li>
                  <li>Contribuer à l’intégration des autres peuples en Côte d’Ivoire.</li>
                </ul> 
                     
                 <p style="margin-top:2%;font-weight: bold;">Le volet Loisirs</p>   <br>   
            <p>Dans cet axe, il sera question d’échanger avec les créateurs d’œuvre d’art et de l’esprit, spécialistes et manager d’entreprises pourvoyeuses de loisirs et de divertissements. Les domaines pressentis sont les suivants : cinéma/théâtre, spectacle/concert, sport, high-tech, jeux vidéo, tourisme, danse/musique/chant, lecture/écriture de roman, artisans manuels, actions humanitaires, radio/télévision, cuisine/pâtisserie, mannequinat, musée, photographie, peinture, etc.</p><br>    <br>    

            <p style="margin-top:2%;font-weight: bold;">Les objectifs spécifiques de ces réunions sont :</p> <br>
            <ul>
                  <li>Promouvoir l’image de la JCI Abidjan Ivoire ;</li>
                  <li>Promouvoir les loisirs proposés au sein de la JCI Abidjan Ivoire ;</li>
            </ul>     
                    
            <p style="margin-top:2%;font-weight: bold;">Le volet anglais</p> <br>   
            <p>Ce volet s’attellera à redonner le goût de la langue anglaise à nos membres et membres potentiels, à renforcer leur capacité, en les amenant à prendre conscience de la nécessité de cette langue dans nos projets actuels et futures.</p> <br>  

        
 
                </div>
            </div>   
    </section>
	<section class="our-blog">
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
    <section class="our-blog">
            <div class="row">
                
                <div class="blog-row row" style="">
                    <div class="col-md-8">
                        <div class="single-blog">
                            <div class="blog-detail">
                                    <h2>
                                        <center><a href="<?php echo site_url('FD/agendaFD');?>">Programme d'activité</a></center>
                                    </h2>
                            </div>
                            <figure>
                                <table class="table table-bordered table-striped table_id">
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
                    <div class="col-md-4">
                        <div class="single-blog">
                            <figure>
                                <div id="slider">
                                    <ul>
                                        <li>
                                        <div class="slider-container" style="background-image: url(https://unsplash.it/500/300/);">
                                        
                                        </div>
                                        </li>
                                            <li>
                                            <div class="slider-container" style="background-image: url(https://unsplash.it/500/301/);">
                                           
                                        </div>
                                        </li>
                                            <li>
                                            <div class="slider-container" style="background-image: url(https://unsplash.it/500/302/);">
                                           
                                        </div>
                                        </li>
                                    </ul>
                                </div>

                            </figure>
                            <div class="blog-detail">
                                
                                    <h4>
                                        <center><a href="<?php echo site_url('Accueil/event');?>">Evènements à venir</a></center>
                                    </h4>
                                
                            </div>
                        </div>
                    </div>
                    
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


    <link href="<?=base_url(); ?>assets/js/style12.js" rel="stylesheet" type="text/css" />
</body>
</html>