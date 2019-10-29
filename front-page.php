<?php
/*
*	Template Name: front-page
*/
?>
<?php 
get_header();
get_template_part( 'template-parts/content', 'hero' );
get_template_part( 'template-parts/content', 'calculate' ); 
get_template_part( 'template-parts/content', 'logos' ); 
get_template_part( 'template-parts/components/content', 'widjets' );
get_template_part( 'template-parts/components/content', 'modal' ); 
get_footer();