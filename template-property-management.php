<?php
    /**
     * Template Name: Property Management - WE Management
     */

     get_template_part('template-parts/section', "header");
?>

<?php
     get_template_part('template-parts/property-management/section', 'content');
?>

<?php
     get_template_part('template-parts/home/section', "cta2");
?> 

<?php 
    get_footer(); 
    wp_footer();
?>