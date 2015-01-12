		<div id="footer">
			<footer>
				<div class="container">
					
					<div class="row">
					  <div class="col-md-8">
					  	
					  	<ul class="nav navbar-nav navbar-footer">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#about">Products</a>
							</li>
							<li>
								<a href="#contact">Dealers</a>
							</li>
							<li>
								<a href="#contact">About</a>
							</li>
							<li>
								<a href="#contact">News</a>
							</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
						</ul>
					  	
					  	
					  	
					  </div>
					  <div class="col-md-4">
					  	<div class="legal">

					  		&copy; 2014 Kabarda pumps
					  	</div>
					</div>
					
				</div>
			
			</footer>
		
		
		
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>		
		<script src="/assets/owl-carousel/owl.carousel.js"></script>		
		<script src="/assets/js/bootstrap.min.js"></script>
		 <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      navigation : true,
      navigationText : ["<img src='/assets/images/carrouse_prev.png' alt='Previous'>","<img src='/assets/images/carrouse_next.png' alt='Next'>"],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      pagination : false,
      });
      
      
      
    });
    
    $( ".rangeSelector" ).click(function(e) {
    	e.preventDefault();
    	var navHeight = $("#navbar").height();
    	
    	$( ".rangeCollector li" ).removeClass("active");
    	$( this).parent().toggleClass( "active", "" );
	
		$("html, body").animate({
        scrollTop: $('.owl-carousel').offset().top - navHeight
   		 }, 200);
    	var index = $( ".rangeSelector" ).index( this );	
    	var owl = $(".owl-carousel").data('owlCarousel');
    	owl.goTo(index);
	});
   
    </script>
	</body>
</html>