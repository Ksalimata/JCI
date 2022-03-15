<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('tlp/css_file'); ?>
</head>
<body>
	<?php $this->load->view('tlp/header'); ?>

	<!--  ************************* Page Title Starts Here ************************** -->
	<div class="page-nav no-margin row" style="background-image: url('<?=base_url(); ?>assets/images/doc.jpg');height: 400px;width: 100%;background-size: cover; background-position: center center;transform: translate3d(0px, 0px, 0px);">
        <div class="container">
            <div class="row">
                <h2>Documents</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Docuements</li>
                </ul>
            </div>
        </div>
    </div>

	<div class="container">
		<h1 class="page-header text-center">CodeIgniter Download</h1>
		<div class="row">
			<div class="col-sm-4">
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
			</div>
			<div class="col-sm-8">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Filename</th>
							<th>Description</th>
							<th>Download</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($files as $file){
							?>
							<tr>
								<td><?php echo $file->id; ?></td>
								<td><?php echo $file->filename; ?></td>
								<td><?php echo $file->description; ?></td>
								<td><a href="<?php echo base_url().'files/download/'.$file->id; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt"></a></td>
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