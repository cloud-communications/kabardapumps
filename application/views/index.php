<?php $this->load->view('imports/header'); ?>
<body id="welcome">

		<?php $this->load->view('imports/navigation'); ?>		
		
		<header>
			<section class="focus">
				<div class="container">
				<div class="row">
			  		<div class="col-md-6">
			  			<header>
			  				<h1>Build for endurance and the ease to adapt in difficult environments</h1>
			  			</header>
			  			<footer>
			  				<a class="btn btn-sm btn-default" href="/<?php echo $GLOBALS['language-abbr'];?>/<?php echo lang('nav.item.url.products'); ?>" role="button">Discover our product range</a>
			  				<a class="btn btn-sm btn-default" href="/<?php echo $GLOBALS['language-abbr'];?>/<?php echo lang('nav.item.url.contact'); ?>" role="button">Let’s talk</a>
			  				
			  			</footer>
			  			
			  		</div>
			  		<div class="col-md-6">
			  			<div class="image">
			  				
			  				
			  					<img src="/assets/images/home_pump.png" alt="pomp">

			  			</div>
			  			
			  		</div>
				</div>
				</div>
			</div>
				
			</section>
			
		</header>
		
		<section class="strengths block">
			<div class="container">
				<div class="row">
	  				<div class="col-md-4">
	  					<article class="strengthItem">
	  					<span class="glyphicon glyphicon glyphicon-tree-conifer" aria-hidden="true"></span>
	  					<header>
			  				<h2>Efficiency</h2>
			  			</header>
			  			<section class="textblock">
							<p>With fuel savings of up to £696 per week, 
the SuperHawk range by Hidrostal offers market leading </p>
						</section>
	  					</article>
	  				</div>
	  				<div class="col-md-4">
	  					<article class="strengthItem">
	  					<span class="glyphicon glyphicon glyphicon-tree-conifer" aria-hidden="true"></span>
	  					<header>
			  				<h2>Efficiency</h2>
			  			</header>
			  			<section class="textblock">
							<p>With fuel savings of up to £696 per week, 
the SuperHawk range by Hidrostal offers market leading </p>
						</section>
	  					</article>
	  					
	  				</div>
	  				<div class="col-md-4">
	  					<article class="strengthItem">
	  					<span class="glyphicon glyphicon glyphicon-tree-conifer" aria-hidden="true"></span>
	  					<header>
			  				<h2>Efficiency</h2>
			  			</header>
			  			<section class="textblock">
							<p>With fuel savings of up to £696 per week, 
the SuperHawk range by Hidrostal offers market leading </p>
						</section>
	  					</article>
	  					
	  					
	  				</div>
				</div>
			</div>
		</section>
		
		<hr></hr>
			
		<section class="range block">
			<div class="container">
				<div class="row">
				  
				  <div class="col-md-4">
				  		<nav>
				  			<header>
			  					<h1>S.I.P. range</h1>
			  					<h2>Screw Impeller Pumps</h2>
			  			 	</header>
			  			 	<ul class="list-unstyled rangeCollector">
			  			 		
			  			 		<?php 
			  			 			$i = 0;
			  			 			foreach($products as $product){ ?>
			  			 			<li <?php echo ($i == 0) ? 'class="active"': ''; ?>><a class="rangeSelector" href="#"><?php echo $product["name"] ?></a></li>
			  			 		<?php $i++; } ?>
			  			 		
			  			 	</ul>
				  			
				  		</nav>
				  	
				  </div>
				  
				  
				  <div class="col-md-8">

				  		 <div id="owl-demo" class="owl-carousel">
				  		 	
				  		 <?php foreach($products as $product){ ?>
			  			 	<div class="item">
		                		<header>
			  						<h1><?php echo $product["name"] ?></h1>
				  			 	</header>
				  			 	<section class="textblock">
									<p><?php echo $product["excerpt"] ?> 
										<a href="/<?php echo $GLOBALS['language-abbr'] . "/" . lang('nav.item.url.products') . "/"?><?php echo $product["url"] ?>"><?php echo lang('g.readmore'); ?></a>
									</p>
									
								</section>
								<img src="/assets/images/home_pump.png" class="img-responsive" alt="pomp">
		                	</div>
			  			 <?php } ?>	

		              </div>
				  	
				  	
				  	
				  </div>
				  
				</div>
			</div>
		</section>
		
		<hr></hr>
		
		<section class="button block">
			<div class="container">
				<div class="row">
				  <div class="col-md-12"><a class="btn btn-sm btn-default" href="/<?php echo $GLOBALS['language-abbr'];?>/<?php echo lang('nav.item.url.products'); ?>" role="button">Discover the complete product range</a></div>
				</div>
			</div>
		</section>
		
		
		
		<?php $this->load->view('imports/sec_footer'); ?>
		
		



<?php $this->load->view('imports/footer'); ?>