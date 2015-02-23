	
			<footer id="page-footer" role="contentinfo">
				<div class="container">
					
					<!-- Column 1: Navigation -->
					<nav class="footer-nav" role="navigation">
						<a class="logo" href="<?php bloginfo('url'); ?>" title="SHARE Home"></a>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					</nav>

					<!-- Column 2: Mailing list -->
					<div class="mailing-list">
						<h6>Sign up for updates</h6>
					</div>

					<!-- Column 3: Twitter feed -->
					<div class="twitter-feed">
						<h6>@SHARE_research</h6>
					</div>

					<!-- Column 4: Social/copyright info -->
					<div class="social-copyright">
						<ul class="social ss-icon">
							<li><a href="<?php bloginfo('rss_url'); ?>">rss</a></li>
							<li><a href="http://www.twitter.com/SHARE_research" target="_blank">twitter</a></li>
							<li><a href="https://www.facebook.com/SHARE.research" target="_blank">facebook</a></li>
							<li><a href="#" target="_blank">linkedin</a></li>
							<li><a href="#" target="_blank">google+</a></li>
							<li><a href="#" target="_blank">pinterest</a></li>
						</ul>
						<p>All content is &copy; Copyright 2015 SHARE and available under a <a href="http://creativecommons.org/licenses/by/4.0/deed.en_US" target="_blank">CC-BY 4.0 license</a>.</p>
						<address>
							Association of Research Libraries<br />
							21 Dupont Circle NW #800<br />
							Washington, DC 20036<br />
							(202) 296-2296
						</address>
					</div>

					<div class="clearfix"></div>
				</div> <!-- .container -->
			</footer>

			<div class="sub-footer">
				<div class="container">
					
					<nav class="sub-footer-nav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'sub-footer-menu' ) ); ?>
					</nav>

				</div>
			</div>
		
		</div>

		<?php wp_footer(); ?>
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
		<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/twitter/jquery.tweet.js"></script> -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	</body>
</html>