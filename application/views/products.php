<?php $this->load->view('imports/header'); ?>
<body id="products">

		<?php $this->load->view('imports/navigation'); ?>		
		
		
		<header>
			<section class="focus">				
					
			</section>
			<div class="filter">
				<div class="container">
					<div class="row">
			  			<div class="col-md-12">
			  				<ul class="list-inline list-unstyled">
			  					<li class="reset"><a href="">ALL PRODUCTS</a></li>
			  					<li><a href="">ALL PRODUCTS</a></li>
			  				</ul>
			  				
			  			</div>
					</div>
				</div>
			</div>
			
		</header>
		<section class="products">
			<?php foreach($products as $productCategory){ ?>
				<div class="container">
					<header>
						<div class="row">
				  		<div class="col-md-12">
				  			<header>
				  				<h1><?php echo $productCategory["name"] ?></h1>
				  				<section class="textblock intro">
									<p><?php echo $productCategory["intro"] ?></p>
								</section>
				  			</header>
				  		</div>
					</div>
					</header>
				
					<div class="row">
					<?php
						$i = 0;
						foreach($productCategory[0] as $products) {
							if ($i % 3 === 0) {
								echo '</div><div class="row">';
							}
							$i++
						 ?>
						 <div class="col-md-4">
				  			<article class="productItem">
				  				<div class="image">
									<img src="/assets/images/<?php echo $products["image"] ?>" class="img-responsive" alt="pomp">
								</div>
								<header>
									<h2><?php echo $products["name"] ?></h2>
								</header>
								<section class="textblock">
									<p><?php echo $products["excerpt"] ?></p>
									<a class="btn btn-sm btn-default" href="<?php echo $GLOBALS['language-abbr'] . "/" . lang('nav.item.url.products') . "/"?><?php echo $products["url"] ?>" role="button">Read more</a>
								</section>
				  			</article>
						
						</div>
						
					
					
					
					
					<?php } ?>
					</div>
				
				</div>
				
				
			<?php } ?>
			
			
		
		</section>
		
		
		
		
		
		
		
		
		
		<?php $this->load->view('imports/sec_footer'); ?>
		
		



<?php $this->load->view('imports/footer'); ?>