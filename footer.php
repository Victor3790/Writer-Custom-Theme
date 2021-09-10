<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Writer_Custom
 */

if ( ! defined( 'ABSPATH' ) ) die();

?>
			</main>
		</div><!-- #layoutDefault_content -->
		<div id="layoutDefault_footer">
			<footer class="footer pt-10 pb-5 mt-auto bg-light footer-light">
				<div class="container px-5">
					<div class="row gx-5">
						<div class="col-lg-3">
							<div class="footer-brand">
								<?php 
									$name = get_theme_mod( 'wrtr_cust_name_handle' ); 
									echo ( empty( $name ) ) ? 'Nombre escritor' : $name;
								?>
							</div>
							<div class="mb-3">
								<?php 
									$name = get_theme_mod( 'wrtr_cust_description_handle' ); 
									echo ( empty( $name ) ) ? 'Descripción corta del escritor' : $name;
								?>
							</div>
							<div class="icon-list-social mb-5">
								<a class="icon-list-social-link" 
									href="<?php 
										$instagram = get_theme_mod( 'wrtr_cust_instagram_handle' ); 
										echo ( empty( $instagram ) ) ? '#' : $instagram;
									?>">
									<i class="fab fa-instagram"></i>
								</a>
								<a class="icon-list-social-link" 
									href="<?php 
										$facebook = get_theme_mod( 'wrtr_cust_facebook_handle' ); 
										echo ( empty( $facebook ) ) ? '#' : $facebook;
									?>">
									<i class="fab fa-facebook"></i>
								</a>
								<a class="icon-list-social-link" 
									href="<?php 
										$twitter = get_theme_mod( 'wrtr_cust_twitter_handle' ); 
										echo ( empty( $twitter ) ) ? '#' : $twitter;
									?>">
									<i class="fab fa-twitter"></i>
								</a>
							</div>
						</div>       
					</div>
					<hr class="my-5" />
					<div class="row gx-5 align-items-center">
						<div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
						<div class="col-md-6 text-md-end small">
							<a href="#!">Privacy Policy</a>
							&middot;
							<a href="#!">Terms &amp; Conditions</a>
						</div>
					</div>
				</div><!-- .container -->
			</footer>
		</div><!-- #ayoutDefault_footer -->
	</div><!-- #layoutDefault -->

<?php wp_footer(); ?>

</body>
</html>
