<?php $this -> load -> view('imports/header'); ?>
<body id="dealers">
		<?php $this -> load -> view('imports/navigation'); ?>		
		<header>
			<section class="focus">				
					
			</section>
			<div class="filter">
				<div class="container">
					<div class="row">
			  			<div class="col-md-12">
			  				<form id="bh-sl-user-location" method="post" action="#">
					            <div class="bh-sl-filters-container">
									
									<ul id="country-filter" class="bh-sl-filters list-inline list-unstyled">	
										<li class="reset">FILTER BY COUNTRY: </li>	
										<li>	
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-primary">
    											<input type="radio" name="country" id="option1" value="BE">Belgium
  											</label>
  											<label class="btn btn-primary">
    											<input type="radio" name="country" id="option1" value="DE">Germany
  											</label>
  										</div>
  										</li>
										
									</ul>
					
								</div>
					        </form>
			  			</div>
					</div>
				</div>
			</div>
			
		</header>
		
		<section class="dealers block">
			<div class="container">
				<div class="row">
			  		<div class="col-md-12">
			  			<div class="bh-sl-container">
    
					      <div class="bh-sl-form-container">
					        
					      </div>
					      <div id="map-container" class="bh-sl-map-container">
					        <div class="bh-sl-loc-list">
					            <ul class="list list-unstyled"></ul>
					        </div>
					        <div id="bh-sl-map" class="bh-sl-map"></div>
					      </div>
					    </div>
			  			
					</div>
				</div>
			</div>
		</section>
		
		
		<?php $this -> load -> view('imports/sec_footer'); ?>
		
		



<?php $this -> load -> view('imports/footer'); ?>