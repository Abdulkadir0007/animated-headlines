<?php 

function anihed_animated_custom_Headlines(){

  register_post_type("anihead-Headline", array(
              "public" => true,
              'menu_position'=>9,
              "show_in_menu"=> "animated-headline",
              'supports'=> array('title',''),
              'labels' => array(
                  'name'=> esc_html__('Headlines','anihead'),
                  'singular_name'=> esc_html__('Headlines','anihead'),
                  'add_new'=> esc_html__('Add New Headlines','anihead'),
                  'add_new_item'=> esc_html__('Add New Headlines','anihead'),
                  'all_items'=> esc_html__('All Headlines','anihead'),
                  'title'=> esc_html__('All Headlines','anihead'),
                  'edit_item'=> esc_html__('Edit Headlines','anihead'),
                  'new_item'=> esc_html__('New Headlines','anihead'),
                  'view_item'=> esc_html__('View Headlines','anihead'),
                  'view_items'=> esc_html__('View Headliness','anihead'),
                  'search_items'=> esc_html__('Search Headlines','anihead'),
                  'not_found'=> esc_html__('Not Found Headlines','anihead'),
                  'not_found_in_trash'=> esc_html__('Not Found Headlines In Trash','anihead'),
                  'insert_into_item'=> esc_html__('Inset Into Headlines','anihead'),
                  'uploaded_to_this_item'=> esc_html__('Uploaded Headlines','anihead'),
                  'items_list'=> esc_html__('Items Headlines','anihead'),
                  'item_published'=> esc_html__('Published Headlines','anihead'),
                  'item_trashed'=> esc_html__('Headlines Trashed','anihead'),
                  'item_updated'=> esc_html__('Headlines Updated','anihead'),
                  'item_link'=> esc_html__('Headlines Link','anihead'),
                  'item_link_description'=> esc_html__('Headlines Link Description','anihead'),
                ),
  ) );

  
}
add_action("after_setup_theme","anihed_animated_custom_Headlines");
function anihed_animated_heading(){
    ?>
<script>
  (function ($) {
    $(document).ready(function () {



      $('span.ah-words-wrapper b:nth-child(1)').addClass('is-visible');


      <?php if(get_option('anihead-amination-style') == 'rotate-1'): ?>
      $('.selector').animatedHeadline({

        animationType: 'rotate-1',
      });

      <?php elseif(get_option('anihead-amination-style') == 'rotate-2'):?>
        $('.selector').animatedHeadline({

      animationType: 'rotate-2',
      });
      <?php elseif(get_option('anihead-amination-style') == 'rotate-3'):?>
        $('.selector').animatedHeadline({

      animationType: 'rotate-3',
      });
      <?php elseif(get_option('anihead-amination-style') == 'loading-bar'):?>
        $('.selector').animatedHeadline({

      animationType: 'loading-bar',
      });
      <?php elseif(get_option('anihead-amination-style') == 'scale'):?>
        $('.selector').animatedHeadline({

      animationType: 'scale',
      });
      <?php elseif(get_option('anihead-amination-style') == 'type'):?>
        $('.selector').animatedHeadline({

      animationType: 'type',
      });
      <?php elseif(get_option('anihead-amination-style') == 'clip'):?>
        $('.selector').animatedHeadline({

      animationType: 'clip',
      typeAnimationDelay: 500,
      });

    <?php endif; ?>
    });

  })(jQuery)
</script>
<?php
    }
    add_action('wp_footer','anihed_animated_heading');
    function anihead_style_css(){
      ?>
<style>
  .ah-headline {
    color: <?php print get_option('anihead-color');
    ?>;
    font-size: <?php print get_option('anihead-font-size');
    ?>px;
    line-height: normal;
  }
  .ah-headline.clip .ah-words-wrapper::after {
    background-color: <?php print get_option('anihead-color');?>
}


  .ah-words-wrapper b,
  .ah-headline span {
    padding: 0!important;
    font-family: <?php print get_option("anihead-font-fli");
    ?>;
    <?php if(get_option('anihead-weight-font') == 'true') {echo "font-weight: bold;"; } else {echo "font-weight: normal";}?>
  }

  .ah-words-wrapper i {
    <?php if(get_option('anihead-style-font') == 'true') {echo "font-style: italic;"; } else {echo "font-style: normal";}?>
  }
  input[type=radio] {
    
}
.ah-headline.loading-bar .ah-words-wrapper::after {
    background: <?php print get_option('anihead-color');?>
}
</style>
<?php 
      }
      add_action('wp_head','anihead_style_css');

?>