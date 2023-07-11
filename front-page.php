<?php get_header(); ?>

    <main>
        <?php 
            get_template_part('/components/home/hero');
            get_template_part('/components/home/offer');
            get_template_part('/components/home/cars');
            get_template_part('/components/home/numbers');
        ?>
    </main>

<?php get_footer(); ?>