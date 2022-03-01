<!DOCTYPE html>
<html lang="fr">
<head>
	<?php $this->load->view('tlp/css_file'); ?>
</head>
<body>
	<?php $this->load->view('tlp/header'); ?>

	<!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slider/slider-3.jpg" alt=""></div>
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
                <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slider/slider-1.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                            
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Be Better</h1>
                                </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="<?=base_url(); ?>assets/images/slider/slider-2.jpg" alt=""></div>
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

    <!--  ************************* About Us Starts Here ************************** -->    
       
	<div class="about-us container-fluid">
	    <div class="container">

	        <div class="row natur-row no-margin w-100">
	        	<div class="image-part col-md-6">
		            <img src="<?=base_url(); ?>assets/images/president.jpg" alt="" style="width: 467px;height: 483px;">
		            
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
   <!-- <section class="our-blog">
   		<div class="container">
         		
        		<div class="blog-row row">
        			<div class="col-md-12 col-sm-6">
        				<div class="single-blog">
        					
        					<div class="blog-detail">
        						<center><h2>Notre Mission</h2></center>
								<center>
									<h4> Offrir aux jeunes gens des opportunités de développement qui leur permettront de créer des changements positifs </h4>
								</center>
								
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="blog-row row">
        			<div class="col-md-12 col-sm-6">
        				<div class="single-blog">
        					
        					<div class="blog-detail">
        						<center><h2>Notre Vision</h2></center>
								<center>
									<h4> Être le principal réseau mondial de Jeunes Citoyens Actifs </h4>
								</center>
								
        					</div>
        				</div>
        			</div>
        		</div>
        </div>				
   </section>  --> 
    <section class="our-blog" style="background-color: #edf1f5;">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Nos Actions </h2>
        			<!-- <p>Take a look at what people say about US </p> -->
        		</div>
        		<div class="blog-row row">
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="<?=base_url(); ?>assets/images/events/image_01.jpg" alt="">
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
        						<img src="<?=base_url(); ?>assets/images/events/image_02.jpg" alt="">
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
        						<img src="<?=base_url(); ?>assets/images/events/image_03.jpg" alt="">
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
                <div class="row team-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="<?=base_url(); ?>assets/images/team/team-memb1.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>CEO </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="<?=base_url(); ?>assets/images/team/team-memb2.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>CFO</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="<?=base_url(); ?>assets/images/team/team-memb3.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>Team Leader</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="<?=base_url(); ?>assets/images/team/team-memb4.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>Project Manager</i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>