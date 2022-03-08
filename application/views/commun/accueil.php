<!DOCTYPE html>
<html lang="fr">
<head>
	<?php $this->load->view('tlp/css_file'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js"></script>
    <style type="text/css">
        .new
        {
            float: left;
            width: 299px;
            margin-right: 0px !important;
            margin-left: 30px !important;
            color: #a0a1a3;
            font-size: 19px;
            padding: 3px;
            padding-left: 29px;
            height: 44px;
            border: 1px solid;
        }
        .ne{
            float: left;
            font-size: 29.09px;
            padding-left: 56px;
            padding-right: 4px;
            color: #575759;
            font-family: "Opificio-Regular";
            margin-top: 7px;
            font-weight: 600;
        }
        .pe{
            background-color: #3597dc;
            border: 1px solid #359dda;
            margin-right: 42px;
            margin-left: 31px;
            margin-top: -3px;
            color: white;
            width: 192px;
            padding: 3px;
            font-size: 25px;
            font-family: "Opificio-Regular";
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
                    <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slide1.jpeg" alt="" style="height: 540px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);"></div>
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
                <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slide2.jpeg" alt="" style="height: 540px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);"></div>
                <div class="container">
                    <div class="row">
                            
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Be Better</h1>
                                </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slide3.jpeg" alt="" style="height: 540px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);"></div>
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
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000;font-size: 30px;margin: 0;font-weight: bold;">Abonnez-vous à notre newsletter</h5>
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
	                <h2>Mot de Bienvenue</h2>
	                <p>Vous souhaitez prononcer un discours de remerciements mais vous ne savez pas exactement comment les exprimer pour être agréable et surtout non répétitif ! Il n'y a pas plus rébarbatif que ces interventions qui font défiler les mercis à la suite sans originalité et avec la même phrase redite à volonté. Vous ne souhaitez pas faire le énième discours de remerciements du festival de Cannes ? Alors, on vous explique comment captiver votre auditoire tout en atteignant votre objectif. </p>
	                <p> Vous souhaitez prononcer un discours de remerciements mais vous ne savez pas exactement comment les exprimer pour être agréable et surtout non répétitif ! Il n'y a pas plus rébarbatif que ces interventions qui font défiler les mercis à la suite sans originalité et avec la même phrase redite à volonté. Vous ne souhaitez pas faire le énième discours de remerciements du festival de Cannes ? Alors, on vous explique comment captiver votre auditoire tout en atteignant votre objectif.</p>	                
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
                  <h4 style="font-weight:bold;"> << Offrir aux jeunes gens des opportunités de développement qui leur permettront de créer des changements positifs >> </h4>
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
                   <h4 style="font-weight:bold;"><< Être le principal réseau mondial de Jeunes Citoyens Actifs>> </h4>
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
        							<h5>
										<center><a href="<?php echo site_url('Accueil/communo');?>">Actions Communautaires et Entrepreneuriat</a></center>
									</h5>
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
										<center><a href="<?php echo site_url('Accueil/formation');?>">Formations et Dévéloppement</a></center>
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
            <div class="col-md-12">
                <form action="<?php echo site_url('Accueil/add_new') ?>" method="POST">
                    <label class="ne">NewsLetter</label>
                    <input type="text" class="new" name="nom" placeholder="Votre nom">
                    <input type="text" class="new" name="email" placeholder="Votre email">
                    <input type="submit" class="pe" value="Inscription">
                </form>
            </div>
    </section>        

	<?php $this->load->view('tlp/footer'); ?>
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