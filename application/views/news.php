<?php $this->load->view('imports/header'); ?>
<body id="news">

		<?php $this->load->view('imports/navigation'); ?>		
		
		
		<header>
			<section class="focus">				
					
			</section>
			<div class="container">
				<div class="row">
			  		<div class="col-md-12">
			  			<header>
			  				<h1>News Kabarda</h1>
			  				<section class="textblock intro">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum sed felis in vehicula. Mauris et tempus ipsum. </p>
							</section>
			  			</header>
			  		</div>
				</div>
				</div>	
		</header>
		<section class="news block">
			<div class="container">
				<div class="row">
				  		<div class="col-md-12">
							<section class="newsList">
								
								<?php foreach($newsItems as $newsItem){ ?>
								
						  		<article class="newsItem">
						  			
						  				<div class="image">
											<img src="/assets/images/news/<?php echo $newsItem["thumb"] ?>" alt="">
										</div>
										<div class="newsDetail">
											<header>
												<h1><?php echo $newsItem["title"] ?></h1>
											</header>
											<section class="textblock">
												<p><?php echo $newsItem["date"] ?></p>
											</section>
											
											
											<section class="textblock">
												<p><?php echo $newsItem["excerpt"] ?></p>
											</section>
											<footer>
									  			<a class="btn btn-sm btn-default" href="/en/news/<?php echo $newsItem["url"] ?>" role="button"><?php echo lang('g.readmore'); ?></a>
									  		</footer>
									  		<hr></hr>
											
										</div>
						  		</article>
						  		
						  		<?php } ?>
						  		
						  		
						  		
					
							
						</div>
				</div>
				</div>
		</section>		
		
		
		
		
		<?php $this->load->view('imports/sec_footer'); ?>
		
		



<?php $this->load->view('imports/footer'); ?>