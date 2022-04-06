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
                <h2>Projet Culture loisirs et Anglais</h2>
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
                </div>   
    </div>
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>