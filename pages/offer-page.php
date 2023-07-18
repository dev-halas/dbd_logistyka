<?php  

    /* Template Name: Offer Page */

    get_header();

?>

    <main>
        <?php 
            get_template_part('/components/offer/offerHeader');
            get_template_part('/components/offer/map');
            get_template_part('/components/offer/contact');
            get_template_part('/components/offer/offer-cars');
        ?>
    </main>

<?php get_footer(); ?>