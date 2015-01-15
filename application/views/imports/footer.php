		<div id="footer">
			<footer>
				<div class="container">
					
					<div class="row">
					  <div class="col-md-8">
					  	
					  	<ul class="nav navbar-nav navbar-footer">
							<li class="active">
							<a href="/<?php echo $GLOBALS['language-abbr'];?>"><?php echo lang('nav.item.home'); ?></a>
						</li>
						<li>
							<a href="/<?php echo $GLOBALS['language-abbr'];?>/<?php echo lang('nav.item.url.products'); ?>"><?php echo lang('nav.item.products'); ?></a>
						</li>
						<li>
							<a href="/<?php echo $GLOBALS['language-abbr'];?>/<?php echo lang('nav.item.url.dealers'); ?>"><?php echo lang('nav.item.dealers'); ?></a>
						</li>
						<li>
							<a href="/<?php echo $GLOBALS['language-abbr'];?>/<?php echo lang('nav.item.url.about'); ?>"><?php echo lang('nav.item.about'); ?></a>
						</li>
						<li>
							<a href="/<?php echo $GLOBALS['language-abbr'];?>/<?php echo lang('nav.item.url.news'); ?>"><?php echo lang('nav.item.news'); ?></a>
						</li>
						<li>
							<a href="/<?php echo $GLOBALS['language-abbr'];?>/<?php echo lang('nav.item.url.contact'); ?>"><?php echo lang('nav.item.contact'); ?></a>
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
	      afterMove: true,
	      afterMove : function(obj){
     			var owl = $(".owl-carousel").data('owlCarousel');
	      	  	var index = owl.currentItem;
	      	  	$( ".rangeCollector li" ).removeClass("active");
	      	  	$( ".rangeCollector" ).children().eq(index).toggleClass( "active", "" );
		  }
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