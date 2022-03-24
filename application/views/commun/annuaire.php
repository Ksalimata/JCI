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
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/comm.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;">
        <div class="container">
            <div class="row">
                <h2>Annuaire</h2>
                <!-- <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Annuaire</li>
                </ul> -->
            </div>
        </div>
    </div>

    </div> 
	<div class="container">
        <div class="row">
            <div>
                <form method="POST" action="<?php echo base_url(); ?>Accueil/add_file" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>File:</label>
                        <input type="file" name="upload" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                <?php
                    if($this->session->flashdata('success')){
                        ?>
                        <div class="alert alert-success text-center" style="margin-top:20px;">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php
                    
                    }
                    if($this->session->flashdata('error')){
                        ?>
                        <div class="alert alert-danger text-center" style="margin-top:20px;">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                        <?php
                    }
                ?>
            </div>
        
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Nom&Prenoms</th>
                                <th>Status</th>
                                <th>mandat</th>
                                <th>telephone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($listePP as $liste){
                            ?>
                            <tr>
                                <td><?php echo $liste->nomPrenom; ?></td>
                                <td><?php echo $liste->status; ?></td>
                                <td><?php echo $liste->mandat; ?></td>
                                <td><?php echo $liste->telephone; ?></td>
                                <td><?php echo $liste->email; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </section>
            </div>    
        </div>
    </div>            
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>