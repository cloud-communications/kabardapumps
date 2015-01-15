<?php if($secondary_footer != false){ ?>

<section id="sec-footer" class="button block blue">
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col">
					<header>
						<h1>News</h1>
					</header>
					<section class="newsList">
						
						
						
						<?php foreach($footer_news as $newsItem){ ?>
						
						
						<article class="newsItem">
							<a href="/<?php echo $GLOBALS['language-abbr']; ?>/news/<?php echo $newsItem["url"] ?>">
							<div class="image">
								<img src="/assets/images/news/<?php echo $newsItem["thumb"] ?>" alt="<?php echo $newsItem["title"] ?>">
							</div>
							<div class="newsDetail">
								<header>
									<h2><?php echo $newsItem["title"] ?></h2>
								</header>
								<section class="textblock">
									<p>
										<?php echo substr($newsItem["excerpt"],0,120) . "..."; ?> <span class="more">Read more ></span>
									</p>
								</section>

							</div> </a>
						</article>
						
						<?php } ?>

					</section>
					<footer>
						<a class="btn btn-sm btn-primary" href="#" role="button">All news items</a>
					</footer>
				</div>
				<div class="col-md-4 col kabarda">
					<header>
						<h1>Kabarda</h1>
					</header>
					<section class="textblock">
						<p class="quote">
							The Kabarda or Kabardin horse is a breed from the Caucasus, currently part of the Kabardino-Balkaria region of Russia and Georgia.
						</p>
					</section>
					<img src="/assets/images/logo_kabarda_white.png" alt="Logo Kabarda pumps">
				</div>
				<div class="col-md-4 col">
					<header>
						<h1>Contact</h1>
					</header>
					<section class="contact">
						<section class="textblock">
							<header>
								<h2>This is a newstitle</h2>
							</header>
							<p>
								Hidrostal Limited 4 &amp; 5
								<br />
								The Galloway Centre
								<br />
								Hambridge Lane
								<br />
								Newbury RG14 5TL
								<br />
								ENGLAND
							</p>
							<p>
						</section>
						<section class="textblock">
							<header>
								<h2>This is a newstitle</h2>
							</header>
							<p>
								Tel: +44 (0)1635 550440
								<br />
								Fax: +44 (0)1635 550140
							</p>
							<div>
								<a href="mailto:info@kabardapumps.com">info@kabardapumps.com</a>
							</div>
						</section>

					</section>

					<footer>
						<a class="btn btn-sm btn-primary" href="#" role="button">To contact form</a>
					</footer>
				</div>
			</div>

		</div>
	</footer>
</section>

<?php } ?>