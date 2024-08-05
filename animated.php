<?php

    function anihead_admin_bar(){
        add_menu_page('Animated Headline','Headline','manage_options','animated-headline','animated_creat_page',plugin_dir_url(__FILE__)."/_inc/icon.png",45);
        add_submenu_page( 'animated-headline','Animated Style', 'Animated Style', 'manage_options','animated-headline','animated_creat_page' );

    }
    add_action('admin_menu','anihead_admin_bar');


    function anihed_admin_style(){
        wp_enqueue_style('anihed-css',plugins_url('_inc/anihead-admin.css',__file__),false,'1.0.0');
        wp_enqueue_style('anihed-style',plugins_url('_inc/bootstrap.min.css',__file__));
        
    wp_enqueue_script('anihed-script',plugins_url('_inc/bootstrap.min.js',__file__),array(),'5.3.3',true);

    }
    add_action('admin_enqueue_scripts','anihed_admin_style');


    function animated_creat_page(){
      ?>
      
<div class="main">
    <div class="left">
        <h2 class="thhth"><?php echo esc_attr('Animated Headline Customizar'); ?></h2>
        <form action="options.php" method="post">
            <?php wp_nonce_field('update-options') ?>

            <div class="input">
            <label for="anihead-tet" name="anihead-text"><?php echo esc_attr('Headline prefix Word') ?></label>
            <input type="text" name="anihead-text" value="<?php print get_option('anihead-text'); ?>" placeholder="Write Your Headline Prefix Word">
            </div>

            <div class="input">
            <label for="anihead-color" name="anihead-color"><?php echo esc_attr('Headline Color') ?></label>
            <input type="color" name="anihead-color" value="<?php print get_option('anihead-color'); ?>">
            </div>

            <div class="input">
            <label for="anihead-font-fli" name="anihead-font-fli"><?php echo esc_attr('Headline Font Family') ?></label>
            <input type="text" name="anihead-font-fli" value='<?php print get_option('anihead-font-fli'); ?>' placeholder="<?php print get_option('anihead-font-ab'); ?>">
            </div>


            <div class="input">
            <label for="anihead-font-size" name="anihead-font-size"><?php echo esc_attr('Headline Font Size') ?></label>
            <input type="number" name="anihead-font-size" min="1" max="200" value="<?php print get_option('anihead-font-size'); ?>" placeholder="Write Your Headline Font Size">
            </div>



            <h4 class="thhth"><?php echo esc_attr('Animated Headline Font Weight'); ?></h4>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" value="true" class="btn-check" name="anihead-weight-font" id="aniheadfontweight1" <?php if(get_option('anihead-weight-font') == 'true') {echo 'checked="checked"';} ?>>
                <label  class="btn btn-primary" for="aniheadfontweight1">Bold</label>
                <input value="false" type="radio" class="btn-check" name="anihead-weight-font" id="aniheadfontweight2" <?php if(get_option('anihead-weight-font') == 'false') {echo 'checked="checked"';} ?>>
                <label class="btn btn-primary" for="aniheadfontweight2">Normal</label>
            </div>

            <h4 class="thhth"><?php echo esc_attr('Customizar'); ?>Animated Headline Font style</h4>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" value="true" class="btn-check" name="anihead-style-font" id="aniheadfontstyle1" <?php if(get_option('anihead-style-font') == 'true') {echo 'checked="checked"';} ?>>
                <label  class="btn btn-primary" for="aniheadfontstyle1">Italic</label>
                <input value="false" type="radio" class="btn-check" name="anihead-style-font" id="aniheadfontstyle2" <?php if(get_option('anihead-style-font') == 'false') {echo 'checked="checked"';} ?>>
                <label class="btn btn-primary" for="aniheadfontstyle2">Normal</label>
            </div>



            <div class="input">
                <h4 class="thhth"><?php echo esc_attr('Headline Animation Type'); ?></h4>
            <select name="anihead-amination-style" id="anihead-amination-style" class="form-select" aria-label="Default select example">
            <option value="rotate-1" <?php if( get_option('anihead-amination-style') == 'rotate-1'){ echo 'selected="selected"'; } ?>> Rotate-1 </option>
            <option value="rotate-2" <?php if( get_option('anihead-amination-style') == 'rotate-2'){ echo 'selected="selected"'; } ?>> Rotate-2 </option>
            <option value="rotate-3" <?php if( get_option('anihead-amination-style') == 'rotate-3'){ echo 'selected="selected"'; } ?>> Rotate-3 </option>
            <option value="type" <?php if( get_option('anihead-amination-style') == 'type'){ echo 'selected="selected"'; } ?>> Type </option>
            <option value="loading-bar" <?php if( get_option('anihead-amination-style') == 'loading-bar'){ echo 'selected="selected"'; } ?>> Loading-bar </option>
            <option value="scale" <?php if( get_option('anihead-amination-style') == 'scale'){ echo 'selected="selected"'; } ?>> Scale </option>
            <option value="clip" <?php if( get_option('anihead-amination-style') == 'clip'){ echo 'selected="selected"'; } ?>> Clip </option>
        </select>
            </div>
            </br>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="anihead-color,anihead-text,anihead-font-fli,anihead-font-size,anihead-weight-font,anihead-style-font,anihead-amination-style">
            <input class="button button-primary" type="submit" value="<?php _e('Save Changes','anihead') ?>">
        </form>
    </div>
    <div class="right">
  
    <h2 class="thhth"><?php echo esc_attr('Wherever you want to use your animated'); ?></h2>
    <h2 class="thhth"><?php echo esc_attr('Headline, Use this shortcode there'); ?></h2>
        <h4 class="thhth"><?php echo esc_attr('Here Is Your Shorcode'); ?> <input type="Text" value="[animated-headline]"></h4>
    </div>
</div>
<?php

    }

?>