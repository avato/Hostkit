<?php
/**
 * Hostkit settings page html
 *
 * @link              http://ava.to
 * @since             0.1
 * @package           Hostkit
 *
 *
 */
if ( ! defined( 'WPINC' ) ) die;


$hk_get_ajaxdata = 'action=hk_test_apidetails';
$hk_get_orders   = 'action=hk_get_orders';



?>


<!-- settings pagewrapper -->
<section id="hk-dashboard-wrapper">


	<div class="hk-init-valwrap" data-action="<?php echo $hk_get_ajaxdata;  ?>"></div>
	<div class="hk-init-valwrap" data-action="<?php echo $hk_get_orders;  ?>"></div>


	<?php 
		/**
		* hk_before_settings_page_logo hook
		*/
		do_action('hk_before_settings_page_logo'); 
	?>


	<!-- settings page header -->
	<header class="hk-page-title">


		<!-- hostkit link and logo -->
		<a href="http://hostkit.ava.to" class="hk-logo hk-color-branding">
			<?php _e('Hostkit','hostkit'); ?>
		</a>


		<h2 class="hk-heading" id="hk-options-header">
			<?php _e('Dashboard','hostkit'); ?>
		</h2>	

	</header> <!-- .hk-page-title -->


	<?php 
		/**
		* hk_after_settings_page_logo hook
		*/
		do_action('hk_after_settings_page_logo'); 
	?>


	<!-- main navigation bar  -->
	<nav class="hk-main-nav">
		<ul>

		<!-- current user avatar -->
			<li class="hk-current-user">
				<?php echo $HK->user['avatar']; ?>
			</li>

		</ul>
	</nav> <!-- .hk-main-nav -->



	<!-- settings page body -->
	<main class="hk-page-body cf">


		<!--left panel -->
		<div class="hk-span-3 hk-column">


			<!--APi SETTINGS PANEL -->
			<div class="hk-panel hk-api-settings-panel hk-ajax-parent">


				<div class="hk-panel-header">
					<h5><?php _e('WHMCS API','hk'); ?></h5>
				</div>


				<div class="hk-panel-body">


					<?php echo $HK->set_textinput('hk-whmcs-domainpath',__('Domain Path','hostkit'),'http://...');  ?>


					<?php echo $HK->set_textinput('hk-whmcs-username',__('User name','hostkit'),__('Add username','hostkit')  );  ?>


					<?php echo $HK->set_password_input('hk-whmcs-password',__('User password','hostkit'),__('Change password','hostkit'));  ?>


					<!-- button to test the api commection  -->
					<div class="hk-test-connection">
						<a class="hk-spinner hk-ajax-task hk-color-grey hk-button" data-action="hk_test_apidetails">
							<span class="icon-hk-cog hk-spin"></span>
							<?php _e('TEST API CONNECTION','hostkit'); ?>
						</a>
					</div>


					<!-- Saved values message -->
					<div class="hk-update-message hk-color-red"></div>


				</div><!-- .hk-panel-body -->


				<!-- Panel Footer -->
				<div class="hk-panel-footer">
					<a class="hk-spinner hk-ajax-task hk-color-branding hk-button" data-action="hk_update_whmcs_apidetails">
						<span class="icon-hk-cog hk-spin"></span>
						<?php _e('UPDATE SETTINGS','hostkit'); ?>
					</a>
				</div>


			</div><!-- .hk-api-settings-panel -->


			<!-- SHOW IP ADDRESS -->

			<div class="hk-show-ip-address hk-color-branding">


				<h6><?php _e('Your IP Address','hostkit'); ?></h6>


				<?php echo $_SERVER["REMOTE_ADDR"];  ?>


			</div><!-- .hk-show-ip-address -->


		</div><!-- .hk-span-3 -->



		<div class="hk-span-6 hk-column">

			<!--APi SETTINGS PANEL -->
			<div class="hk-panel">

				<div class="hk-panel-header">
					<h5><?php _e('Business Vitals','hostkit'); ?></h5>
				</div>

				<div class="hk-panel-body hk-quickstats-outer">

					<div class="hk-quickstats-panel hk-quickstats-income">
						<span class="hk-hero-stats">0</span>
						<?php _e('Income','hk'); ?> <?php echo date_i18n( 'M Y', time(), false ); ?>
					</div>

					<div class="hk-quickstats-panel hk-quickstats-pending-orders">
						<span class="hk-hero-stats">0</span>
						<?php _e('Pending orders','hk'); ?>
					</div>

					<div class="hk-quickstats-panel hk-quickstats-tickets-open">
						<span class="hk-hero-stats">0</span>
						<?php _e('Open Tickets','hk'); ?>
					</div>

				</div>
			</div><!-- .hk-api-settings-panel -->
			<br/>


			<div class="hk-panel">

				<div class="hk-panel-header">
					<h5><?php _e('Latest Orders','hostkit'); ?></h5>
				</div>

				<div class="hk-panel-body hk-latest-transactions">


				</div>
			</div><!-- .hk-api-settings-panel -->





		</div>



		<div class="hk-span-3 hk-column hk-last-column hk-column">


			<div class="hk-hostkit-panel hk-color-branding">
				<a href="http://hostkit.ava.to" target="_blank" class="hk-logo">Hostkit</a>
				<h6>hostkit</h6>
				<a href="http://hostkit.ava.to" class="hk-hostkit-links">Hostkit Website</a><br/>
				<a href="http://hostkit.ava.to/docs" class="hk-hostkit-links">Hostkit Docs</a>
			</div>


			<div class="hk-github-panel hk-color-dark">
				<a href="https://github.com/avato/Hostkit" target="_blank" class="hk-logo">Hostkit on Github</a>
				<h6>hostkit on Github</h6>
				<a href="http://hostkit.ava.to" class="hk-github-links">Report a bug</a><br/>
			</div>


		</div>
	</main>
</section><!-- #hk-dashboard-wrapper -->