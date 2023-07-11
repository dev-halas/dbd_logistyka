<?php get_header(); ?>

    <main style="overflow:hidden;">
        <?php 
            get_template_part('/components/home/offer');
            get_template_part('/components/home/cars');
            get_template_part('/components/home/numbers');
        ?>
    </main>

<a href="#" class="button">BUTTON</a>

<a href="#" class="button--outline">BUTTON</a>


<?php get_footer(); ?>