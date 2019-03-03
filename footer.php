<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

				<footer class="footer" role="contentinfo">
          <div class="grid-container">

            <div class="inner-footer grid-x">
                <div class="small-12 medium-6 large-6 cell">
                  <nav role="navigation">
                      <?php joints_footer_links(); ?>
                  </nav>
                </div>

                <div class="small-12 medium-6 large-6 cell" style="text-align: right">
                  <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - Alle Rechte vorbehalten</p>
                </div>
            </div>

					</div> <!-- end #inner-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
