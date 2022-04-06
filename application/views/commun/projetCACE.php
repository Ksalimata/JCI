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
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/archives.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;">
        <div class="container">
            <div class="row">
                <h2>Projet Action Communautaire</h2>
                <!-- <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Archives</li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="container">
	    <div class="blog-row row" style="margin-top: 5%;">
                    <div class="col-md-12">
                        <div class="single-blog">
                            <div class="blog-detail">
                                    <h2>
                                        <center><a href="#">Projets</a></center>
                                    </h2>
                            </div>
                            <figure>
                                <table class="table table-bordered table-striped table_id">
                                    <thead>
                                        <tr>
                                            <th>NOM DU PROJET</th>
                                            <th>DATE DE LANCEMENT</th>
                                            <th>DATE D’EXÉCUTION</th>
                                            <th>LIEU D’EXÉCUTION</th>
                                            <th>NOM DU DIRECTEUR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>Cérémonie d’Ouverture et de Clôture de la 11eme édition de Femmes Leaders Femmes Leaders</td>
                                                <td>Mardi 16 Novembre 2021</td>
                                                <td>Cérémonie d’Ouverture : Samedi 05 Février 2022 Cérémonie de Clôture : Samedi 19 Mars 2022</td>
                                                <td>Chambre de Commerce et de l’Industrie de Cote d’Ivoire</td>
                                                <td>Saint Wilfried N’GUESSAN</td>
                                            </tr>
                                            <tr>
                                                <td>Dépistage gratuit du cancer du col de l’utérus et du sein</td>
                                                <td>Mardi 16 Novembre 2021</td>
                                                <td>Du Vendredi 11 au Samedi 12 Mars 2022</td>
                                                <td>A determiné</td>
                                                <td>Gwladys AHOUNOU</td>
                                            </tr>
                                            <tr>
                                                <td>Remise des clés du Préau de l’école Municipalité</td>
                                                <td>En cours d’exécution</td>
                                                <td>Vendredi 01 Avril 2022</td>
                                                <td>EPP Municipalité de Yopougon</td>
                                                <td>Ghislaine KONAN</td>
                                            </tr>
                                            <tr>
                                                <td>Campagne de sensibilisation contre les grossesses et IST en milieu scolaire</td>
                                                <td>Mardi 16 novembre 2021</td>
                                                <td>Vendredi 06 mai 2022</td>
                                                <td>Lycée Moderne de Treichville</td>
                                                <td>Victorien MANGOU</td>
                                            </tr>
                                    </tbody>
                                </table>
                                
                            </figure>
                            
                        </div>
                    </div>
        </div>
    </div>    
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>