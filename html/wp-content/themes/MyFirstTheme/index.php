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
<div id="gridcontainer">
    <?php
    $counter =1; //starts counter
    $grids =2; //Grids per row
    global $query_string; //needed for pagination
    query_posts($query_string.'&caller_get_posts=1&posts_per_page=6');
    ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    //Left column
    if ($counter==1):?>
    <div class="griditemleft">
        <div class="postimage">
            <?php the_post_thumbnail('post-thumbnail');?>
        </div>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt();?>
    </div>
    <?php
    //Rigth column
    elseif($counter==$grids):
    ?>
        <div class="griditemrigth">
            <div class="postimage">
                <?php the_post_thumbnail('post-thumbnail');?>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt();?>
        </div>
    <div class="clear"></div>
    <?php $counter=0;
    endif;?>

        <!--<?php the_post_thumbnail('post-thumbnail');?>-->
    <!--<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
    <!--<?php the_excerpt();/*
    $excerpt = get_the_excerpt();

    $excerpt = substr( $excerpt, 0, 50 ); // Only display first 50 characters of excerpt
    $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
    echo $result;*/
    ?>-->
    <!--<?php the_content(); ?>-->
    <?php wp_link_pages(); ?>
    <?php edit_post_link(); ?>

<?php $counter++; endwhile; ?>

    <!--<?php
    if ( get_next_posts_link() ) {
        next_posts_link();
    }
    ?>-->
    <!--<?php
    if ( get_previous_posts_link() ) {
        previous_posts_link();
    }
    ?>-->

    <!--<?php else: ?>-->

    <!--<p>No posts found. :(</p>-->

<?php endif; ?>
</div>
<?php wp_footer(); ?>
<?php get_footer(); ?>
</body>
</html>