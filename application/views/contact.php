<?php $this->load->view('imports/header'); ?>
<body id="contact">

		<?php $this->load->view('imports/navigation'); ?>		
		
		
		<header>
			<section class="focus">
				<div class="container">
				<div class="row">
			  		<div class="col-md-12">
			  			<header>
			  				<h1><?php echo lang('contact.title'); ?></h1>
			  				<section class="textblock intro">
								<p><?php echo lang('contact.subtitle'); ?></p>
							</section>
			  			</header>
			  		</div>
				</div>
				</div>
			</div>
				
			</section>
			
		</header>
		
		<section class="contact block blue">
			<div class="container">
				<div class="row">
	  				<div class="col-md-6">
	  					<header>
					  		<h1><?php echo lang('contact.info.title'); ?></h1>
					  	</header>
					  	<section class="contact">
							  	<section class="textblock">
							  	<header><h2 class="heading"><span><?php echo lang('contact.info.location.title'); ?></span></h2></header>	
							  		<p><?php echo lang('contact.info.location.description'); ?></p>
							  	</section>
							  	<section class="textblock">
							  	<header><h2 class="heading"><span><?php echo lang('contact.info.contact.title'); ?></span></h2></header>	
							  		<p><?php echo lang('contact.info.contact.description'); ?></p>
							  	</section>
							  	<section class="textblock">
							  	<header><h2 class="heading"><span><?php echo lang('contact.info.company.title'); ?></span></h2></header>	
							  		<p><?php echo lang('contact.info.company.description'); ?></p>
							  	</section>

						  	</section>
	  				</div>
	  				<div class="col-md-6">
	  					<header>
					  		<h1><?php echo lang('contact.form.title'); ?></h1>
					  	</header>
					  	
					  	
					  	<form method="post" action="http://localhost:8888/<?php echo $language_code . '/contact' ?>">
					  	  <?php if (isset($report)) echo $report; ?>
					  	  <div class="form-group">
					  	  	<label for="inputName"><?php echo lang('contact.form.field.name'); ?></label>
						    <input class="form-control" name="inputName" id="inputName" value="<?php if (isset($name)) echo $name; ?>" placeholder="<?php echo lang('contact.form.field.name'); ?>">
						    
						  </div>
						  <div class="form-group">
						    <label for="inputEmail"><?php echo lang('contact.form.field.email'); ?></label>
						    <input type="email" class="form-control" name="inputEmail" id="inputEmail" value="<?php if (isset($email)) echo $email; ?>" placeholder="<?php echo lang('contact.form.field.email'); ?>">
						  </div>
						  <div class="form-group">
						    <label for="inputSubject"><?php echo lang('contact.form.field.subject'); ?></label>
						    <input class="form-control" name="inputSubject" id="inputSubject" value="<?php if (isset($subject)) echo $subject; ?>" placeholder="<?php echo lang('contact.form.field.subject'); ?>">
						  </div>
						  <div class="form-group">
						  	<label for="inputMessage"><?php echo lang('contact.form.field.message'); ?></label>
						 	<textarea class="form-control" name="inputMessage" id="inputMessage" placeholder="<?php echo lang('contact.form.field.message'); ?>" rows="3"><?php if (isset($message)) echo $message; ?></textarea>
					      </div>
					      <input type="submit" name="submit" value="<?php echo lang('contact.form.button.send'); ?>" class="btn btn-sm btn-primary" />
						  
						</form>
	  				</div>
	  				
				</div>
			</div>
		</section>
		
		<section class="maps">
				  	<div id="map-canvas"></div>
		</section>
		
		
		
		
		
		<?php $this->load->view('imports/sec_footer'); ?>
		
		



<?php $this->load->view('imports/footer'); ?>