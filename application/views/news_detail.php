<?php $this->load->view('imports/header'); ?>
<body id="news-detail">
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54ba5aad73be1aba" async="async"></script>


		<?php $this->load->view('imports/navigation'); ?>		
		
		
		<header>
			<section class="focus">				
					
			</section>
			<div class="container">
				<div class="row">
			  		<div class="col-md-12">
			  			<header>
			  				<h1><?php echo $title; ?></h1>
			  				<section class="textblock">
								<p><?php echo $date; ?></p>
							</section>
							<section class="textblock intro">
								<p><?php echo $intro; ?></p>
							</section>
							
							
			  			</header>
			  		</div>
				</div>
				</div>	
		</header>
		
		
		<section class="block">
			<div class="container">
				<div class="row">
			  		<div class="col-md-12">
			  			<section class="textblock">
								<?php echo $text; ?>
							</section>
			  			
					</div>
				</div>
			</div>
		</section>
		
		<section class="block">
			<div class="container">
				<div class="row">
			  		<div class="col-md-12">
			  			<div class="addthis_native_toolbox"></div>
			  			
					</div>
				</div>
			</div>
		</section>
		
		<?php $this->load->view('imports/sec_footer'); ?>
		
		



<?php $this->load->view('imports/footer'); ?>