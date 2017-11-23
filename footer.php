            <footer class="home-footer">
              <div class="columns-container row justify-content-between">
                <div class="column-item col-md-4 col-sm-6 col-xs-12 social">
                  <header>
                    <div class="subtitle small centered">
                      <div class="underline light">
                        <div class="text"><h4>Stay in touch</h4></div>
                      </div>
                    </div>
                  </header>
                  <div class="content">
                    <div class="twitter">
                      <a href="https://twitter.com/p2pu">
                        <span><i class="fa fa-twitter" aria-hidden="true"></i>@P2PU</span>
                      </a>
                    </div>
                    <div class="facebook">
                      <a href="https://www.facebook.com/P2PUniversity">
                        <span><i class="fa fa-facebook" aria-hidden="true"></i>P2PUniversity</span>
                      </a>
                    </div>
                    <div class="email">
                      <a href="mailto:thepeople@p2pu.org">
                        <span><i class="fa fa-envelope" aria-hidden="true"></i>thepeople@p2pu.org</span>
                      </a>
                    </div>
                  </div>
                </div>
 
                <div class="column-item col-md-4 col-sm-6 col-xs-12 offset-md-4 newsletter">
                  <header>
                    <div class="subtitle small centered">
                      <div class="underline light">
                        <div class="text"><h4>Get the newsletter</h4></div>
                      </div>
                    </div>
                  </header>
                  <div class="content" id="mc_embed_signup">
                    <form action="//p2pu.us2.list-manage.com/subscribe/post?u=f080ec78070523d59ef613eda&amp;id=06e9c4ece8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      <div id="mc_embed_signup_scroll">
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f080ec78070523d59ef613eda_06e9c4ece8" tabindex="-1" value=""></div>
                        <div class="clear">
                          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn p2pu-btn light">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
 
              <div class="toc">
                <p>Unless otherwise noted, all the materials on this site are licensed under CC BY-SA 4.0. | <a href="https://www.p2pu.org/en/terms/">Terms and Conditions/Privacy</a></p>
              </div>
            </footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
            <script src="<?php echo get_template_directory_uri(); ?>/library/js/bootstrap/collapse.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/library/js/bootstrap/affix.js"></script>
			<script>
				Blog.Homepage.init();
            </script>

	</body>

</html>
