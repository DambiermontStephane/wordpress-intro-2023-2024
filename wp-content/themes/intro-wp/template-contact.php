<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>

<?php /* Template Name: Page "Contact" */?>

    <main class="contact">
        <header class="contact__header">
            <h1 class="contact__title"><?= get_the_title(); ?></h1>
        </header>
        <section class="contact__intro">
            <?= get_the_content(); ?>
        </section>
    </main>

<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
<?php get_footer(); ?>