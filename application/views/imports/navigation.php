<div class="container">
<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only"><?php echo lang('nav.toggle'); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/<?php echo $GLOBALS['language-abbr'];?>"> 
						<img src="/assets/images/logo_kabarda.png" alt="Logo Kabarda pumps"> 
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">

					
					<ul class="nav navbar-nav navbar-main">
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
					<ul class="nav navbar-nav navbar-right">
						<li class="phone">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+32 (0)3 322 32 32
						</li>
						<li id="social-icons">
						
							<a href="<?php echo lang('g.facebook'); ?>" target="_blank"><span class="pe-so-facebook"></span></a>
							<a href="<?php echo lang('g.linkedIn'); ?>" target="_blank"><span class="pe-so-linkedin"></span></a>
							<a href="<?php echo lang('g.youtube'); ?>" target="_blank"><span class="pe-so-youtube-1"></span></a>
							<a href="<?php echo lang('g.picasa'); ?>" target="_blank"><span class="pe-so-picasa"></span></a>
							
						</li>
						<li>

							<div class="dropdown language-dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
									UK
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="#">NL</a>
									</li>
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="#">NL</a>
									</li>
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="#">NL</a>
									</li>
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="#">NL</a>
									</li>
								</ul>
							</div>

						</li>
					</ul>
				</div>
			</div>
		</nav>
</div>