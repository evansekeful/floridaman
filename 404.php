<?php
/**
 *******************************************************************************
 * //404.php
 *******************************************************************************
 *
 * The 404 template (Not found)
 *
 * CODEX REF
 * https://codex.wordpress.org/Creating_an_Error_404_Page
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

<div class="col-md-12">
    <div class="text-center error-page">

        <h1>404</h1>

        <a class="btn btn-danger-outline" href="<?php echo get_home_url(); ?>">
          Return Home
        </a>

    </div>
</div>
