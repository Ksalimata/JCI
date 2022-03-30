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
                <h2>Air d'opportunités</h2>
                <!-- <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Air d'opportunités</li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                <section>
                    <h2 style="margin-top:2%;">III. AIRES D’OPPORTUNITES</h2> 
                    <p>La Jeune Chambre Internationale est une organisation de possibilités. Elles sont si nombreuses que la plupart des adhérents sélectionnent celles qui s’accordent avec leurs besoins particuliers et en tirent le meilleur parti. On trouve essentiellement quatre (4) domaines (aires) d’opportunités à savoir le membre individuel, la communauté, l’internationalisme et les affaires.</p> 

                    <h3 style="margin-top:2%;">1. Opportunités individuelles</h3>
                    <p>La formation reste un des outils de développement de la personnalité. Par les séances et autres séminaires de formation qu’elle organise sur des thèmes aussi variés que la personnalité, les rapports avec la société ou la libre entreprise, la JCI donne à chacun les moyens d’une prise de conscience et de l’amélioration des capacités individuelles.</p><br>

                    <p>→ Découvrir ses forces et faiblesses, Se former, Développer ses talents de direction, Occuper des postes de responsabilité, Apprendre à oser et à gagner .</p>

                    <h3 style="margin-top:2%;">2. Opportunités Communautaires</h3>
                    <p>L’homme est largement tributaire de la communauté dans laquelle il vit. Elle conditionne ses joies et ses peines et résume ses angoisses. C’est pourquoi la formation, l’information et la communication permettent aux membres de la JCI d’être à l’écoute de la communauté pour recenser et répondre, par une analyse adéquate, à ses préoccupations de tous ordres : culturels, sociaux, économiques, etc.</p><br>

                    <p>→ Développer le sens de responsabilité sociale, Inculquer l’esprit civique, Apprendre à détecter et à solutionner les problèmes sociaux, S’investir aux côtés des autorités et réaliser des projets… </p>

                    <h3 style="margin-top:2%;">3. Opportunités Internationales</h3>
                   <p> Le mouvement de la Jeune Chambre Internationale est aujourd’hui présent dans la quasi-totalité des pays du globe. Par les réunions périodiques qu’elle organise, la JCI offre à ses membres de connaître des jeunes hommes et femmes des autres parties du monde. Le mouvement de la JCI est à l’avant-garde de la mondialisation, du village planétaire. De par son credo, de par son universalité, il traduit la citoyenneté de tous au-delà des frontières des Etats et crée les conditions de l’obtention d’une paix durable dans le monde. </p><br>

                    <p>→ Tisser un réseau international d’amitiés, Offrir des occasions de découvertes, d’échanges et d’enrichissement mutuel, S’ouvrir au monde et sur d’autres réalités que les nôtres… </p>

                    <h3 style="margin-top:2%;">4. Opportunités d’affaires</h3>
                    <p style="margin-top:2%;">Pour formaliser et fortifier ce réseau important créé au niveau des hommes, la JCI a mis en place un réseau des hommes d’affaires, international Business Network (IBN) qui réunit les Jaycees hommes d’affaires. C’est une banque de données immense, des relations commerciales sûres dans tous les domaines aussi variés qu’étendus. </p>


                    <p style="margin-top:2%;">→ Promouvoir la libre entreprise, Inculquer l’esprit d’initiative, Apprendre à ne compter que sur soi-même, Découvrir et intégrer les nombreux réseaux d’affaires JCI, Apprendre à gérer aujourd’hui pour une meilleure gestion demain… </p>


                    <p style="margin-top:2%;margin-bottom: 5%;">Comme on le voit, l’adhésion à la jeune chambre ouvre la porte des défis qui donnent à la vie, son véritable sens et un intérêt. A chacun d’agir selon sa sensibilité, car l’apprentissage par l’action que prône la Jeune Chambre Internationale doit vous amener à faire par vous-même, ce que vous pouvez, par l’intermédiaire de l’organisation. </p>
                    
                </section>
        </div>
    </div>            
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>