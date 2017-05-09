<?php
/**
 *******************************************************************************
 * //page.php
 *******************************************************************************
 *
 * The general page.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/page-templates/
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/
?>

<?php get_header(); ?>

<?php render_navbar(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-justify">

            <?php the_content(); ?>

            <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>No content is appearing for this page!</p>

            <?php endif; ?>

        </div>

    <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
