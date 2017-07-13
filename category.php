<?php
/**
 * To refactor.
 */

require_once( APDD_FUNCTIONS_PATH . 'display-breadcrumb.php' );
require_once( APDD_FUNCTIONS_PATH . 'get-page-url-by-slug.php' );
$use_apdd_category = false;

$category_hierarchy = get_category_hierarchy( get_query_var( 'cat' ), -1 );
if ( isset( $category_hierarchy[0] ) && in_array( $category_hierarchy[0], APDD_SLUGS_OF_L10N_CATEGORIES ) ) {
  if ( 2 == sizeof( $category_hierarchy ) ) {
    $lg = L10N_CATEGORY_TO_LANGUAGE[ $category_hierarchy[0] ];
		if ( APDD_LIFESTYLE_SLUG[ $lg ] === $category_hierarchy[1] ) {
			require( get_stylesheet_directory() . '/apdd-category.php' );
			$use_apdd_category = true;
		} elseif ( 'recettes' === $category_hierarchy[1] ) { // TODO: hard-coded!!!
      wp_redirect( get_permalink( get_page_by_path( 'fr_FR/recettes' ) ) ); // TODO: hard-coded
    } elseif ( 'recipes' === $category_hierarchy[1] ) { // TODO: hard-coded
      wp_redirect( get_permalink( get_page_by_path( 'en_UK/recipes' ) ) ); // TODO: hard-coded
    }
	}
}

if ( ! $use_apdd_category ) {
get_header(); 
$cat_id =  get_query_var('cat');
$category_bg_image_url = osetin_get_field('category_header_bg', "category_{$cat_id}");
$css_extra_class = ($category_bg_image_url) ? 'with-background' : 'without-background';
$term_description = term_description();

$layout_type_for_term_archive = osetin_get_field('layout_type_for_term_archive', "category_{$cat_id}");
if($layout_type_for_term_archive && ($layout_type_for_term_archive != 'default')){
  $layout_type_for_index = $layout_type_for_term_archive;
}else{
  $layout_type_for_index = osetin_get_settings_field('layout_type_for_index');
}
if(empty($category_bg_image_url)){
  $header_arr['description'] = $term_description;
  $header_arr['title'] = ucwords(single_cat_title( '', false ));
}else{
  $header_arr = false;
}

?>
  <div class="os-container top-bar-w">
    <div class="top-bar <?php if(empty($category_bg_image_url)) echo 'bordered'; ?>">
      <?php display_breadcrumb(); ?>
      <?php osetin_social_share_icons('header'); ?>
    </div>
    <?php if(!empty($category_bg_image_url)){ ?>
      <div class="page-intro-header <?php echo esc_attr($css_extra_class); ?>" style="<?php echo osetin_get_css_prop('background-image', $category_bg_image_url, false, 'background-repeat: repeat; background-position: top left;'); ?>">
        <h2><?php echo ucwords(single_cat_title( '', false )); ?></h2>
        <?php 
          if ( ! empty( $term_description ) ) { ?>
            <div class="page-intro-description"><?php echo $term_description; ?></div>
          <?php } ?>
      </div>
    <?php } ?>
  </div>

  <div class="os-container">
    <?php global $wp_query; ?>
    <?php echo build_index_posts($layout_type_for_index, false, $wp_query, false, $header_arr); ?>
  </div>
<?php get_footer();
}