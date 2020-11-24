<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
    <?php get_header(); ?>
</head>
<body>
<h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_post_thumbnail('post-thumbnail');?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php the_excerpt();/*
    $excerpt = get_the_excerpt();

    $excerpt = substr( $excerpt, 0, 50 ); // Only display first 50 characters of excerpt
    $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
    echo $result;*/
    ?>
    <!--<?php the_content(); ?>-->
    <?php wp_link_pages(); ?>
    <?php edit_post_link(); ?>

<?php endwhile; ?>

    <?php
    if ( get_next_posts_link() ) {
        next_posts_link();
    }
    ?>
    <?php
    if ( get_previous_posts_link() ) {
        previous_posts_link();
    }
    ?>

<?php else: ?>

    <p>No posts found. :(</p>

<?php endif; ?>
<?php wp_footer(); ?>
<?php get_footer(); ?>
</body>
</html>