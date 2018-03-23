	            <footer role="contentinfo">
								<div class="content wrap">
									<p>Except where otherwise noted, all content on this blog is licensed under a <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International license</a>.</p>
									<p>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</p>
							  	<p class="privacy">
										<a href="<?php echo rss_url(); ?>">RSS</a>
										<?php if (twitter_account()): ?>
											<a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a>
										<?php endif; ?>
										<a href="<?php echo base_url(); ?>" title="Return to my website.">Home</a>
							  	</p>
								</div>
	            </footer>
        </div>
    </body>
</html>
