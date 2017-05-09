<?php
/**
 *******************************************************************************
 * //home.php
 *******************************************************************************
 *
 * The blog posts.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
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

<div class="container">

    <div class="container" id="display">
        <div class="hidden-xs-down col-sm-12">
          	<div class="float-right">
                <strong>Display</strong>
                <div class="btn-group">
                    <a href="#" id="grid" class="btn btn-default btn-sm"><span class="fa fa-square"></span> Grid</a>
                    <a href="#" id="list" class="btn btn-default btn-sm"><span class="fa fa-list"></span> List</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div id="posts" class="list-group">
            <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


            <article class="item col-12 col-md-6 col-lg-4" id="post-<?php the_ID(); ?>">
                <div class="card">
                    <a href="<?php the_permalink(); ?>">
                        <img class="group list-group-image" src="<?php the_post_thumbnail_url( 'card' ); ?>" alt="" id="post-image" />
                    </a>

                    <div <?php post_class(); ?>>
                        <div class="card-block">
                        <?php if( get_the_title() ): ?>
                            <h4 class="card-title"><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h4>
                        <?php else: ?>
                            <h4 class="card-title"><a href="<?php the_permalink(); ?>">READ MORE</a></h4>
                        <?php endif; ?>

                        <div id="post-metadata">
                            <p>
                                By <?php the_author_posts_link(); ?>
                                <span class="hidden-xs-down">
                                on <?php echo the_time('l, F jS, Y');?>
                                </span>
                                in <?php the_category( ', ' ); ?>.
                                <span class="pull-right hidden-sm-down">
                                <a href="<?php comments_link(); ?>">
                                <?php comments_number(); ?>
                                </a>
                                </span>
                            </p>
                        </div>

                            <?php the_excerpt(); ?>

                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Article</a>
                        </div>
                    </div>
                </div>
            </article>


            <?php endwhile; else: ?>
            </div>
                <div class="page-header error-page">
                <h1>Coming Soon!</h1>
                </div>

                <p>No content is appearing for this page!</p>

            <?php endif; ?>

        </div>
    </div>

    <?php theme_pagination(); ?>

    </div>
</div>

<?php get_footer(); ?>
