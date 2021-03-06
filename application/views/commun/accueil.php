<!DOCTYPE html>
<html lang="fr">
<head>
	<?php $this->load->view('tlp/css_file'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js"></script>
    <style type="text/css">
        .new
        {
            /*float: left; */
            color: #a0a1a3;
            font-size: 19px;border: 1px solid;
            margin-top: 2%;
            height: 36px;
        }
        .ne{
            font-size: 29.09px;
            padding-left: 56px;
            padding-right: 4px;
            color: #575759;
            font-family: "Opificio-Regular";
            margin-top: 7px;
            font-weight: 600;

        }
        .pe{
            display: inline-table; */
            background-color: #3597dc;
            border: 1px solid #359dda;
            margin-right: 42px;
            margin-left: 100%;
            width: 192px;
            font-family: "Opificio-Regular";
        }
        body{
           font-family: "Opificio" !important;
           font-size: 20px;
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
	<!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slide1.jpeg" alt="" style="height: 450px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;"></div>
                    <div class="container">
                        <div class="row">
                            
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Be Better</h1>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slide2.jpeg" alt="" style="height: 450px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;"></div>
                <div class="container">
                    <div class="row">
                            
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Be Better</h1>
                                </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slide3.jpeg" alt="" style="height: 450px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;"></div>
                <div class="container">
                    <div class="row">
                            
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Be Better</h1>
                                </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 
    
    <div class="modal fade" id="modal-content" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000;font-size: 30px;margin: 0;font-weight: bold;">Abonnez-vous ?? notre newsletter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input placeholder="Entrez votre adresse Email" class="form-control" id="yurEmail" name="email" type="email" value="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default close2" data-dismiss="modal">Fermer</button>
                    <button id="newsletter" type="submit" class="btn btn-danger subscribed">Abonnez-vous</button>
                </div>

            </div>
        </div>
    </div>
   
    <!--  ************************* About Us Starts Here ************************** -->    
       
	<div class="about-us container-fluid">
	    <div class="container">

	        <div class="row natur-row no-margin w-100">
	        	<div class="image-part col-md-6">
		            <img src="<?=base_url(); ?>assets/images/president.jpg" alt="" style="width: 467px;height: 483px;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);">
		            
	            </div>
	            <div class="text-part col-md-6">
                    <br>
	                <h2>Honorables S??nateurs,</h2>
	                <br><br>
                    <p style="font-size: 19px;">Distingu??s Past-Pr??sidents,
                    Amis Membres et Membres Potentiels,

                    C'est avec un grand plaisir que je voudrai vous r??it??rer mes remerciements pour la confiance que vous avez voulu placer en ma personne pour la mandature 2022.

                    Ceci dit de nouveaux challenges et d??fits nous attendent et j'ai la lourde responsabilit?? de r??hausser dans tout ce tremplin l'image de notre oragnisation.

                    ceci ne pourra ??tre possible que par l'engagement de chacun de nous pour donner un impact durable ?? ntre communaut??.</p>
                </div>

	        </div>
	    </div>
	</div>     
      
 	<!-- ################# Mission Vision Start Here #######################--->
  
    <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                  <!-- <h1>Notre Mission</h1> -->
                  <h4 style="font-weight:bold;font-weight: bold;font-size: 20px;font-family: opificio;"> "Offrir aux jeunes gens des opportunit??s de d??veloppement qui leur permettront de cr??er des changements positifs"  </h4>
              </div>
              <div class="col-md-6 mv-img">
                  <img src="<?=base_url(); ?>assets/images/mission.png" alt="" style="margin-left: 17%;">
              </div>
          </div>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                   <img src="<?=base_url(); ?>assets/images/vision.png" alt="">
              </div>
              <div class="col-md-6 mv-det">
                   <!-- <h1>Notre Vision</h1> -->
                   <h4 style="font-weight:bold;font-weight: bold;font-size: 20px;font-family: opificio;">"??tre le principal r??seau mondial de Jeunes Citoyens Actifs" </h4>
              </div>
          </div>
      </div>
   </section> 
    
    <section class="our-blog" style="background-color: #edf1f5;">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Nos Actions </h2>
        		</div>
        		<div class="blog-row row">
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="<?=base_url(); ?>assets/images/action.png" alt="" style="height: 241px;width: 100%;">
        					</figure>
        					<div class="blog-detail">
        							<h4>
										<center><a href="<?php echo site_url('Accueil/communo');?>" style="font-size: 18px;">Actions Communautaires et Entrepreneuriat</a></center>
									</h4>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="<?=base_url(); ?>assets/images/forma.jfif" alt="" style="height: 241px;width: 100%;">
        					</figure>
        					<div class="blog-detail">
        						
									<h4>
										<center><a href="<?php echo site_url('Accueil/formation');?>">Formations et D??v??loppement</a></center>
									</h4>
								
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="<?=base_url(); ?>assets/images/loisi.jpg" alt="" style="height: 241px;width: 100%;">
        					</figure>
        					<div class="blog-detail">
        						
									<h4>
										<center><a href="<?php echo site_url('Accueil/loisirs');?>">Cultures, Loisirs et Anglais</a></center>
									</h4>
        					</div>
        					
        					
        				</div>
        			</div>
        		</div>
         	</div>
    </section>

    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11">
        <div class="container">
            <div class="session-title row">
                  <h2>Nos Partenaires</h2>
                  
            </div>
            <div class="row team-row" >
                <div class="col-md-2"></div>
                <div class="col-md-8" style="background-image: url('<?=base_url(); ?>assets/images/test.png');height: 413px;width: 100%;"></div>
                <div class="col-md-2"></div>


            </div>
        </div>
    </section>

    <section class="our-blog" style="background-color: #edf1f5;">
            <div class="container">
                <!-- <div class="col-md-2"></div> -->
                <div class="row">
                    <div class="col-md-12" style="text-align:center;">
                        <form action="<?php echo site_url('Accueil/add_new') ?>" method="POST">
                            <label class="ne">NewsLetter</label>
                            <input type="text" class="new" name="nom" placeholder="Votre nom">
                            <input type="text" class="new" name="email" placeholder="Votre email">
                            <input type="submit" class="" value="Inscription">
                        </form>
                    </div>    
                </div>
                <!-- <div class="col-md-2"></div> -->
            </div>
    </section>        

	<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <center><h1 style="color: white;">Ev??nements r??cents</h1></center><br>
                    <div class="blog-row row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog">
                                <figure>
                                    <img src="<?=base_url(); ?>assets/images/events/image_01.jpg" alt="" style="height: 164px;">
                                </figure>
                                <div class="blog-detail">
                                    <small><a href="#">Le lancement des Journ??es Nationales de la Citoyennet?? Active JCI ...</a></small>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog">
                                <figure>
                                    <img src="<?=base_url(); ?>assets/images/events/image_02.jpg" alt="" style="height: 164px;">
                                </figure>
                                <div class="blog-detail">
                                    <small><a href="#">Le lancement des Journ??es Nationales de la Citoyennet?? Active JCI ...</a></small>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog">
                                <figure>
                                    <img src="<?=base_url(); ?>assets/images/events/image_03.jpg" alt="" style="height: 164px;">
                                </figure>
                                <div class="blog-detail">
                                    <small><a href="#">Le lancement des Journ??es Nationales de la Citoyennet?? Active JCI ...</a></small>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="blog-row row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog">
                                <figure>
                                    <img src="<?=base_url(); ?>assets/images/events/image_01.jpg" alt="" style="height: 164px;">
                                </figure>
                                <div class="blog-detail">
                                    <small><a href="#">Le lancement des Journ??es Nationales de la Citoyennet?? Active JCI ...</a></small>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog">
                                <figure>
                                    <img src="<?=base_url(); ?>assets/images/events/image_02.jpg" alt="" style="height: 164px;">
                                </figure>
                                <div class="blog-detail">
                                    <small><a href="#">Le lancement des Journ??es Nationales de la Citoyennet?? Active JCI ...</a></small>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog">
                                <figure>
                                    <img src="<?=base_url(); ?>assets/images/events/image_03.jpg" alt="" style="height: 164px;">
                                </figure>
                                <div class="blog-detail">
                                    <small><a href="#">Le lancement des Journ??es Nationales de la Citoyennet?? Active JCI ...</a></small>
                                    
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
                        Nous sommes de jeunes citoyens actifs du monde en g??n??ral et de la C??te d???Ivoire en particulier. Vivant, communiquant, agissant et cr??ant un impact dans nos communaut??s, nous sommes des Elites. Vous ??tes un jeune citoyen actif ? Voulez-vous faire la diff??rence dans votre communaut?? ? Rejoignez-nous dans ce voyage d???action locale pour un impact mondial.
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
                <a href="https://www.smarteyeapps.com/">2022 &copy; Tous droits r??serv??s | JCI Abidjan Ivoire</a>
                
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

    <script>
    // modal and cookie js
    $(".clear-cookie").on("click", function() {
        Cookies.remove('ModalShown');
        $(this).replaceWith("<p><em>Cookie cleared. Re-run demo</em></p>");
    });

    $(".subscribed,.close,.close2").on("click", function() {
        $('#modal-content').modal('hide');
        Cookies.set('ModalShown', 'yes', {  expires: 1});
        $(".clear-cookie").fadeIn();
        lastFocus.focus();
    });

    /*setTimeout(function() {
            lastFocus = document.activeElement;
            $('#modal-content').modal('show');
            $("#yurEmail").focus();
        }, 2000);*/

    var lastFocus;
    var popupShown = Cookies.get('ModalShown');

    if (popupShown) {
        console.log("Cookie found. No action necessary");
        $(".clear-cookie").show();
    } else {
        console.log("No cookie found. Opening popup in 3 seconds");
        $(".clear-cookie").hide();
        setTimeout(function() {
            lastFocus = document.activeElement;
            $('#modal-content').modal('show');
            $("#yurEmail").focus();
        }, 3000);
    }

/// ajax post request
    $(document).ready(function () {

        $("#newsletter").click(function(e) {
            e.preventDefault();
            var email = $("#yurEmail").val();
            var post_url = "<?php echo site_url('Newsletter/add_new') ?>";
            $.ajax({
                type: "POST",
                url: post_url,
                data : {"email" : email},
                dataType: "json",
                success: function (data) {
                    console.log(data);
                }

            });
                console.log(nono);

        });

    });

</script>
</body>
</html>