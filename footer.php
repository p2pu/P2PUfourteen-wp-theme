			<footer class="p2pu-footer">

				<div class="container">

					<ul class="footer-social clearfix">
						<li><a target="_blank" href="http://community.p2pu.org/"><i class="fa fa-weixin"></i></a>
						</li>
						<li><a target="_blank" href="https://twitter.com/p2pu"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a target="_blank" href="https://www.facebook.com/P2PUniversity">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
					</ul>

					<hr>
					<div class="col-md-4 first">
						<h4>What is P2PU?</h4>

						<p>
							The Peer 2 Peer University is a grassroots open education project that organizes learning
							outside of institutional walls and gives learners recognition for their achievements. P2PU
							creates a model for lifelong learning alongside traditional formal higher education.
							Leveraging the internet and educational materials openly available online, P2PU enables
							high-quality low-cost education opportunities.
						</p>

					</div>

					<div class="col-md-4 col-md-offset-1">
                        <?php get_sidebar('sidebar2'); ?>
						<ul class="footer-links">
							<li>
								<i class="fa fa-angle-right "></i>
								<a href="http://p2pu.org/en/terms/">
									Terms of Use
								</a>
							</li>
							<li>
								<i class="fa fa-angle-right "></i>
								<a href="http://p2pu.org/assets/uploads/P2PUMediaKit.pdf">
									Media Kit
								</a>
							</li>
						</ul>
					</div>


					<div class="pull-right col-md-3 cc-by-sa">
						<img src="http://p2pu.org/assets/images/cc-icons.png" alt="CC-BY-SA Icon">

						<p>
							Unless otherwise noted, all the materials on this site are licensed under a
							<a target="_blank" href="http://creativecommons.org/licenses/by-sa/4.0/">
								Creative Commons Attribution Share Alike 4.0</a> Unported license.
						</p>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
			<script type="text/javascript" src="//s3.amazonaws.com/p2pu-navigation-widget/p2pu_menu_slider.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/isotope.min.js"></script>
			<script>
				Blog.Homepage.init();
			</script>
	</body>

</html>
