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
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/archi.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);background-blend-mode: darken;">
        <div class="container">
            <div class="row">
                <h2>Documents du mandat</h2>
                <!-- <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Docuements</li>
                </ul> -->
            </div>
        </div>
    </div>

	<div class="container">
		<div class="row">
			
			
			<br><br><br>
			<div class="col-sm-12"><br><br>
				<h2 style="text-align:center">Liste des documents officiels</h2><br><br>
				<table class="table table-bordered table-striped table_id">
					<thead>
						<tr>
							<!-- <th>N</th> -->
							<th>Nom</th>
							<th>Description</th>
							<th>Telecharger</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($files as $file){
							?>
							<tr>
								<!-- <td><?php //echo $file->id; ?> </td> -->
								<td><?php echo $file->filename; ?> </td>
								<td><?php echo $file->description; ?> </td>
								<td><center><a href="<?php echo base_url().'files/download/'.$file->id; ?>" class="btn btn-success btn-sm"><i class="fa fa-download"></i></a></center></td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php $this->load->view('tlp/footer'); ?>
	<?php $this->load->view('tlp/js_file'); ?>
</body>
</html>

<!-- <div class="col-sm-4">
				<h3>File Upload Form</h3>
				<form method="POST" action="<?php echo base_url(); ?>Files/insert" enctype="multipart/form-data">
					<div class="form-group">
						<label>Description:</label>
						<input type="text" name="description" class="form-control" required>
					</div>
					<div class="form-group">
						<label>File:</label>
						<input type="file" name="upload" required>
					</div>
					<button type="submit" class="btn btn-primary">Save</button>
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
			</div>  -->