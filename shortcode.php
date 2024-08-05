<?php 


function anihead_shortcode( $atts ){
    ob_start();
    $query = new WP_Query(array(
        'post_type' => 'anihead-Headline',
        'posts_per_page' => -1,
    ));
    if( $query -> have_posts()){ ?>
  <div class="selector" style="max-width: 100%;">
        <div class="ah-headline">
          <span><?php print get_option('anihead-text'); ?> </span>
          <span class="ah-words-wrapper" >
            <?php while ($query -> have_posts()): $query-> the_post();?>
            <b class=""><?php the_title(); ?></b>
            <?php endwhile; wp_reset_postdata(); ?>
          </span>
    </div>
      </div>
<?php $myvariable = ob_get_clean();
return $myvariable;
    }
}
add_shortcode('animated-headline','anihead_shortcode');

?>