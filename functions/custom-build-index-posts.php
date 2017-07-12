<?php

function custom_build_index_posts( $is_navigation_displayed, $layout_type = 'magazine_v1', $sidebar_name = false, $osetin_query = false, $sticky_posts = false, $header_arr = false, $content = false, $content_location = false, $bordered = false ){
  $archive_class = osetin_get_archive_class($layout_type);
  $archive_wrapper_class = osetin_get_archive_wrapper_class($layout_type);
  $masonry_layout_mode = osetin_get_masonry_layout_mode($layout_type);
  $layout_settings = osetin_get_layout_settings_arr($layout_type);
  $show_ads = osetin_get_field('ad_between_posts_type', 'option');
  $ads_code = osetin_generate_ads_code($show_ads, $layout_settings['ad_wrapper_class']);
  // sidebar
  $sidebar_location = osetin_get_field('sidebar_position_for_index_option', 'option', 'right');
  $sidebar_html = '';

  $content_html = '';
  if($content_location && $content_location != 'none'){
    $content_html = do_shortcode($content);
  }

  if($sidebar_name && is_active_sidebar( $sidebar_name )){
    $sidebar_class = 'with-sidebar sidebar-location-'.$sidebar_location;
    $sidebar_html.= '<div class="archive-sidebar color-scheme-'.osetin_get_field('sidebar_background_color_type', 'option', 'light').' " style="'.osetin_get_css_prop('background-color', osetin_get_field('sidebar_background_color', 'option')) . osetin_get_css_prop('background-image', osetin_get_field('sidebar_background_image', 'option')).'">';
    ob_start();
    dynamic_sidebar( $sidebar_name );
    $sidebar_html.= ob_get_clean();
    $sidebar_html.= '</div>';
  }else{
    $sidebar_class = '';
  }

  if($bordered){
    $bordered_class = 'bordered';
  }else{
    $bordered_class = '';
  }
  
  $wrapper_step = 0;
  $item_step = 1;
  $counter = 1;

  $html = '';

  if(($content_location == 'before_all') && $content_html){
    $html.= '<div class="page-content-field-w">'.$content_html.'</div>';
  }
  $html.= '<div class="archive-posts-w '.$sidebar_class.' '.$bordered_class.'">';
    if($sidebar_location == 'left'){
      $html.= $sidebar_html;
    }
    $html.= '<div class="archive-posts '.$archive_wrapper_class.'">';
      if(($content_location == 'before_posts') && $content_html){
        $html.= $content_html;
      }
      $html.= '<div class="'.$archive_class.'" data-layout-mode="'.$masonry_layout_mode.'">';
        if($header_arr){

          $html.= '<div class="archive-title-w">';
            $html.= '<h1 class="page-title">'.$header_arr['title'].'</h1>';
            if ( ! empty( $header_arr['description'] ) ) {
              $html.= '<h2 class="page-content-sub-title">'.$header_arr['description'].'</h2>';
            }
          $html.= '</div>';
        }
        if ( $osetin_query->have_posts() ) {
          if($sticky_posts){
            $only_image = true;
            $html.= '<div class="sticky-roll-w"><div class="owl-carousel sticky-posts-owl-slider">';
            foreach($sticky_posts as $sticky_post){
              global $post;
              $post = $sticky_post;
              setup_postdata($post);
              $current_step_class = 'full_full_over';
              $limit = osetin_get_limit_by_item_type($current_step_class);
              ob_start();
              include(locate_template('content.php'));
              $html.= ob_get_clean();
              wp_reset_postdata();
            }
            $html.= '</div></div>';
            unset($only_image);
          }
          while ( $osetin_query->have_posts() ) : $osetin_query->the_post();
            if($ads_code != '' && ($layout_settings['ad_position'] == $counter)) {
              $html.= $ads_code;
            }
            if(($item_step == 1) || in_array(($item_step - 1), $layout_settings['wrapper_ends'])){
              $html.= '<div class="masonry-item any '.$layout_settings['wrapper_classes'][$wrapper_step].'">';
              $wrapper_step++;
              if($wrapper_step >= count($layout_settings['wrapper_classes'])){
                $wrapper_step = $layout_settings['loop_start_from_wrapper_step'];
              }
            }
            $current_step_class = $layout_settings['item_classes'][$item_step - 1];
            $limit = osetin_get_limit_by_item_type($current_step_class, $layout_settings['wrapper_classes'][$wrapper_step], $archive_class);
            ob_start();
            include(locate_template('content.php'));
            $html.= ob_get_clean();
                  

            if(in_array($item_step, $layout_settings['wrapper_ends']) || ($counter == $osetin_query->post_count)){
              $html.= '</div>';
            }

            if($item_step >= count($layout_settings['item_classes'])){
              $item_step = $layout_settings['loop_start_from_item_step'];
            }
            $item_step++;
            $counter++;
          endwhile;
        }else{
          $html.= osetin_load_template_part( 'content', 'none' ); 
        }
      $html.= '</div>';
      // pagination
      global $wp_query;
      $temp_query = $wp_query;
      $wp_query = $osetin_query;
	  if ( true === $is_navigation_displayed ) {
		ob_start();
		osetin_output_navigation();
		$html.= ob_get_clean();
	  }
      $wp_query = $temp_query;
      wp_reset_postdata();
      if(($content_location == 'after_posts') && $content_html){
        $html.= $content_html;
      }
    $html.= '</div>';
    if($sidebar_location == 'right'){
      $html.= $sidebar_html;
    }
  $html.= '</div>';
  if(($content_location == 'after_all') && $content_html){
    $html.= '<div class="page-content-field-w">'.$content_html.'</div>';
  }
  return $html;
}