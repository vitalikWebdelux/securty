<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package murren
 */

get_header(); ?>
	<section class="error-page">
		<h1><span>404. </span> <?php esc_html_e('Простите, такой страницы не существует!', 'murren'); ?> </h1>
		<a href="<?php echo site_url();?>" class="sd-button"><?php esc_html_e('На главную', 'murren'); ?></a>
	</section>
<?php get_footer();
