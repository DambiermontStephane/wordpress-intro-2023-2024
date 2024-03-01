<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>
    <?php /* Template Name: Page "A propos" */?>
        
        <main class="about">
            <header class="about__header">
                <h1 class="about__title"><?= get_the_title(); ?></h1>
            </header>
            <section class="about__intro">
                <?= get_the_content(); ?>
            </section>
        </main>

    <?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
<?php get_footer(); ?>