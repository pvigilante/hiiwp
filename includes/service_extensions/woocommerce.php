<?php 
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
if (!function_exists('woocommerce_template_loop_product_thumbnail')) {
    function woocommerce_template_loop_product_thumbnail()
    {
        echo woocommerce_get_product_thumbnail();
    }
}
if (!function_exists('woocommerce_get_product_thumbnail')) {
    function woocommerce_get_product_thumbnail($size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0)
    {
        global $post;
        $image_size = apply_filters('single_product_archive_thumbnail_size', $size);
        if (has_post_thumbnail()) {
            $props = wc_get_product_attachment_props(get_post_thumbnail_id(), $post);
            return '<figure class="product-image-wrapper">' . get_the_post_thumbnail($post->ID, $image_size,
                    array(
                        'title' => $props['title'],
                        'alt' => $props['alt'],
                    )) . '</figure>';
        } elseif (wc_placeholder_img_src()) {
            return '<figure class="product-image-wrapper">' . wc_placeholder_img($image_size) . '</figure>';
        }
    }
}

add_action( 'init', 'custom_fix_thumbnail' );
 
function custom_fix_thumbnail() {
  add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');
   
	function custom_woocommerce_placeholder_img_src( $src ) {
		$src = get_theme_mod('product_default_image', '/wp-content/plugins/woocommerce/assets/images/placeholder.png');
		 
		return $src;
	}
}
?>