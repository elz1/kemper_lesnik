<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KemperLesnik
 */

?>

	</div><!-- #content -->
	<aside class="top-footer">
		<div class="container">
	    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	    <div id="footer-1" class="top-footer widget-area" role="complementary">
	      <?php dynamic_sidebar( 'footer-1' ); ?>
	    </div>
	  <?php endif; ?>
		</div>
	</aside>
	<footer id="colophon" class="site-footer">
	
		<div class="site-info container">
			<div class="left-footer">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
					) );
				?>
				<p>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Copyright &copy; 2017 &nbsp; All Rights Reserved.', 'kemperlesnik' ), 'kemperlesnik', '' );
				?>
				</p>
			</div>
			<?php if ( is_active_sidebar( 'socials' ) ) : ?>
	    <div id="socials-footer" class="socials widget-area" role="complementary">
	      <?php dynamic_sidebar( 'socials' ); ?>
	    </div>
	  <?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900" rel="stylesheet">
<script src="https://use.fontawesome.com/8020ac3e36.js"></script>

</body>
</html>
