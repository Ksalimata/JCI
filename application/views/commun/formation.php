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
        p{
            text-align: justify;
        }
    </style>
</head>
<body>
	<?php $this->load->view('tlp/header'); ?>
	<!--  ************************* Page Title Starts Here ************************** -->
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/comm.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;">
        <div class="container">
            <div class="row">
                <h2>Formations et  Dévéloppement</h2>
                <!-- <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Formations et  Dévéloppement</li>
                </ul> -->
            </div>
        </div>
    </div>
    <section class="our-blog" style="background-color: #edf1f5;">
            <div class="container">
                <div class="row">
                    <h1>I.  PRESENTATION DE LA COMMISSION</h1> <br> <br>    

                        <p>La Commission Formation et Développement est l’une des trois (3) commissions de travail de notre OLM. Sa fonction principale est de planifier et gérer de façon cohérente un programme d’activités s’articulant autour des activités suivantes : </p> <br>

                        <ul>
                          <li><a href="">Formations internes dénommé IVOIRE TRAINING ;</a></li>
                          <li><a href="">Formations publiques</a></li>
                          <li><a href="">Séminaire (s) professionnel (s)</a></li>
                          <li><a href="">Académie des Membres Potentiels.</a></li>
                        </ul>
                       
                       <p> Pour cette mandature, cette commission est structurée comme suit :</p><br><br>   

                       <table class="table table-bordered table-striped">
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
                                        <td>  KONAN Alex Fréjus </td>
                                        <td>07 49 35 22 88</td>
                                        <td>alexfrejus@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Directeur de commission</td>
                                        <td>BAMENOU Candicio Gerald</td>
                                        <td> 07 09 84 45 70</td>
                                        <td>candiciogerard@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Directeur Adjointe de commission</td>
                                        <td>N’DO Cyrille</td>
                                        <td>0504322895</td>
                                        <td>ndeltsine@gmail.com</td>

                                    </tr>
                            </tbody>
                       </table> 
                            
                    <h1> II.  Cahier de charges de la commission </h1>
                    <br>  <br>  

                        
                            <p>Objectifs généraux</p>
                        <br> 
                        <p>Etudier la faisabilité de chaque projet en relation avec le Vice – président aux opérations, et le réaliser suivant le cadre JCI du citoyen actif (enquête, analyse, planification, action, évaluation et suivi) ;
                        Faire le recrutement conformément au principe d’engagement et de responsabilité membres potentiels par commission de travail.</p><br><br><br>      

                      <p>Objectifs spécifiques</p> <br>

                        <p> Déployer le programme de formation (interne “ivoire training” et publique) à l’endroit des membres et membres potentiels ;</p><br>
                        <p>Contribuer à la mise en œuvre de la stratégie de croissance quantitative et qualitative durable de l’effectif de l’organisation ;</p><br>
                        <p>Développer et renforcer chez les membres des aptitudes en leadership ;<br>
                        S’équiper en matériels (un vidéoprojecteur, un écran de projection, paperboard…).</p><br><br>

                     <p>Le savoir étant l’unique bien dont personne ne peut nous dépouiller, nous invitons tous les membres et membres potentiels à participer activement à la mise en œuvre de ce programme afin qu’il connaisse un succès. Car notre motivation et notre engagement feront de ce programme une réussite.
                        Ainsi, quel que soit la position que l’on occupe ou le rôle que l’on joue au sein de notre organisation, il importe que l’on garde à l’esprit que seule l’action transforme la pensée et la parole en réalité. C'est en nous unissons que nous ferons des exploits.
                        Pour notre part, nous vous promettons d’accomplir avec dynamisme et abnégation la mission qui nous a été assignée pour cette mandature 2022.
                        </p>   
           

                </div>
            </div>
    </section>            
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
                                        <center><a href="<?php echo site_url('FD/reunion');?>">Réunion de Commission</a></center>
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
                                        <center><a href="<?php echo site_url('FD/projetx');?>">Projet</a></center>
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
                                        <center><a href="<?php echo site_url('FD/archive');?>">Archives</a></center>
                                    </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="our-blog" style="background-color: #edf1f5;margin-top: -5%">
            <div class="row">
                <div class="row session-title">
                    <!-- <p>Take a look at what people say about US </p> -->
                </div>
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
                                            <th>DATE</th>
                                            <th>TYPE</th>
                                            <th>THEME</th>
                                            <th>OBJECTIFS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>6/11/2021</td>
                                                <td>Séminaire de Coaching</td>
                                                <td>CDL</td>
                                                <td>Motiver les membres à être engagés dans l’atteinte des résultats individuels et collectifs escomptés pour la mandature 2021.</td>
                                            </tr>
                                            <tr>
                                                <td>11/12/2021</td>
                                                <td>Séminaire de Coaching</td>
                                                <td>DC</td>
                                                <td>Motiver les membres à être engagés dans l’atteinte des résultats individuels et collectifs escomptés pour la mandature 2021.</td>
                                            </tr>
                                            <tr>
                                                <td>27/11/2021</td>
                                                <td>Formation Publique 1</td>
                                                <td>Comment se réinventer en période d'incertitude en gardant l'esprit impactitude</td>
                                                <td>Objectif : capaciter de se réinventer et arriver au sommet</td>
                                            </tr>
                                            <tr>
                                                <td>07/12/2021</td>
                                                <td>Ivoire training 1</td>
                                                <td>Prise de Note et rédaction efficace</td>
                                                <td>Objectif : Initier les membres à acquérir des connaissances des prise de notes</td>
                                            </tr>
                                            <tr>
                                                <td>21/12/2021</td>
                                                <td>Ivoire training 2</td>
                                                <td>Gestion efficace d’une réunion et la procédure parlementaire</td>
                                                <td>Maîtriser les principes d'une production écrite (Compte rendu, procès-verbal, terme de référence et rapport d'évaluation)</td>
                                            </tr>
                                            <tr>
                                                <td>14/01/2022</td>
                                                <td>Ivoire training 3</td>
                                                <td>Education financière et gestion du budget familial</td>
                                                <td>savoir gérer son portefeuille financier familial</td>
                                            </tr>
                                            <tr>
                                                <td>26/01/2022</td>
                                                <td>Ivoire training 4</td>
                                                <td>L’art de l’éloquence et de la persuasion</td>
                                                <td>savoir convaincre son auditoire</td>
                                            </tr>
                                            <tr>
                                                <td>29/01/2022</td>
                                                <td>Concours Local d'Art Oratoire et de Débat</td>
                                                <td>A déterminer</td>
                                                <td>A déterminer</td>
                                            </tr>
                                            <tr>
                                                <td>16/02//2022</td>
                                                <td>Formation Publique 2</td>
                                                <td>Ton Etoile sociale</td>
                                                <td>exploiter ses talents pour impacter</td>
                                            </tr>
                                            <tr>
                                                <td>25/02/2022</td>
                                                <td>Séminaire en entreprise 1</td>
                                                <td>Cultiver son leadership et pratiquer le management / Mind Mapping et Efficacité Professionnelle</td>
                                                <td>Savoir son potentiel en leadership en créant le changement</td>
                                            </tr>
                                            <tr>
                                                <td>07/03/2022</td>
                                                <td>Ivoire training 5</td>
                                                <td>24h Chrono </td>
                                                <td>travailler de façon efficace</td>
                                            </tr>
                                            <tr>
                                                <td>25/03/2022</td>
                                                <td>Ivoire training 6</td>
                                                <td>Connaissance du Mouvement et Planification de sa Carrière Jeune Chambre</td>
                                                <td>Maitriser les rouages de base de la JCI</td>
                                            </tr>
                                            <tr>
                                                <td>20/04/2022</td>
                                                <td>Ivoire training 7</td>
                                                <td>Connaitre sa personnalité par les couleurs</td>
                                                <td>impacter a tout niveau</td>
                                            </tr>
                                            <tr>
                                                <td>06/05/2022</td>
                                                <td>Ivoire training 8</td>
                                                <td>Evaluer sa carrière professionnelle et mieux se positionner</td>
                                                <td>savoir gérer sa carrière professionnelle</td>
                                            </tr>
                                            <tr>
                                                <td>25/05/22</td>
                                                <td>Formation Publique 3</td>
                                                <td>Créer son business et réussir par le design thinking</td>
                                                <td>réussir son business par l’innovation </td>
                                            </tr>
                                            <tr>
                                                <td>09/06/2022</td>
                                                <td>Ivoire training school</td>
                                                <td>A déterminer</td>
                                                <td>motiver les formateurs Abidjan ivoire</td>
                                            </tr>
                                    </tbody>
                                </table>


                            </figure>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
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
</body>
</html>