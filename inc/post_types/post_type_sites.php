<?php
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Sites', 'Site General Name', 'ido_ang_wp' ),
		'singular_name'         => _x( 'Site', 'Site Singular Name', 'ido_ang_wp' ),
		'menu_name'             => __( 'Sites', 'ido_ang_wp' ),
		'name_admin_bar'        => __( 'Site', 'ido_ang_wp' ),
		'archives'              => __( 'Sites Archives', 'ido_ang_wp' ),
		'attributes'            => __( 'Site Attributes', 'ido_ang_wp' ),
		'parent_item_colon'     => __( 'Parent Site:', 'ido_ang_wp' ),
		'all_items'             => __( 'All Sites', 'ido_ang_wp' ),
		'add_new_item'          => __( 'Add New Site', 'ido_ang_wp' ),
		'add_new'               => __( 'Add New', 'ido_ang_wp' ),
		'new_item'              => __( 'New Site', 'ido_ang_wp' ),
		'edit_item'             => __( 'Edit Site', 'ido_ang_wp' ),
		'update_item'           => __( 'Update Site', 'ido_ang_wp' ),
		'view_item'             => __( 'View Site', 'ido_ang_wp' ),
		'view_items'            => __( 'View Sites', 'ido_ang_wp' ),
		'search_items'          => __( 'Search Site', 'ido_ang_wp' ),
		'not_found'             => __( 'Not found', 'ido_ang_wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ido_ang_wp' ),
		'featured_image'        => __( 'Featured Image', 'ido_ang_wp' ),
		'set_featured_image'    => __( 'Set featured image', 'ido_ang_wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'ido_ang_wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'ido_ang_wp' ),
		'insert_into_item'      => __( 'Insert into item', 'ido_ang_wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'ido_ang_wp' ),
		'items_list'            => __( 'Items list', 'ido_ang_wp' ),
		'items_list_navigation' => __( 'Items list navigation', 'ido_ang_wp' ),
		'filter_items_list'     => __( 'Filter items list', 'ido_ang_wp' ),
	);
	$args = array(
		'label'                 => __( 'Sites', 'ido_ang_wp' ),
		'description'           => __( 'All My Sites', 'ido_ang_wp' ),
		'labels'                => $labels,
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'supports'           => array( 'title', 'thumbnail', 'editor' )

	);
	register_post_type( 'sites', $args );

}
add_action( 'init', 'custom_post_type', 0 );

// Register Zones Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Zones', 'Taxonomy General Name', 'ido_ang_wp' ),
		'singular_name'              => _x( 'Zone', 'Taxonomy Singular Name', 'ido_ang_wp' ),
		'menu_name'                  => __( 'Zone', 'ido_ang_wp' ),
		'all_items'                  => __( 'All Items', 'ido_ang_wp' ),
		'parent_item'                => __( 'Parent Item', 'ido_ang_wp' ),
		'parent_item_colon'          => __( 'Parent Item:', 'ido_ang_wp' ),
		'new_item_name'              => __( 'New Item Name', 'ido_ang_wp' ),
		'add_new_item'               => __( 'Add New Item', 'ido_ang_wp' ),
		'edit_item'                  => __( 'Edit Item', 'ido_ang_wp' ),
		'update_item'                => __( 'Update Item', 'ido_ang_wp' ),
		'view_item'                  => __( 'View Item', 'ido_ang_wp' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'ido_ang_wp' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'ido_ang_wp' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'ido_ang_wp' ),
		'popular_items'              => __( 'Popular Items', 'ido_ang_wp' ),
		'search_items'               => __( 'Search Items', 'ido_ang_wp' ),
		'not_found'                  => __( 'Not Found', 'ido_ang_wp' ),
		'no_terms'                   => __( 'No items', 'ido_ang_wp' ),
		'items_list'                 => __( 'Items list', 'ido_ang_wp' ),
		'items_list_navigation'      => __( 'Items list navigation', 'ido_ang_wp' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'zones', array( 'sites' ), $args );
//Register Industry Taxonomy
	$labels = array(
		'name'                       => _x( 'Industries', 'Taxonomy General Name', 'ido_ang_wp' ),
		'singular_name'              => _x( 'Industry', 'Taxonomy Singular Name', 'ido_ang_wp' ),
		'menu_name'                  => __( 'Industry', 'ido_ang_wp' ),
		'all_items'                  => __( 'All Industries', 'ido_ang_wp' ),
		'parent_item'                => __( 'Parent Industry', 'ido_ang_wp' ),
		'parent_item_colon'          => __( 'Parent Industry:', 'ido_ang_wp' ),
		'new_item_name'              => __( 'New Industry Name', 'ido_ang_wp' ),
		'add_new_item'               => __( 'Add New Industry', 'ido_ang_wp' ),
		'edit_item'                  => __( 'Edit Industry', 'ido_ang_wp' ),
		'update_item'                => __( 'Update Industry', 'ido_ang_wp' ),
		'view_item'                  => __( 'View Industry', 'ido_ang_wp' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'ido_ang_wp' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'ido_ang_wp' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'ido_ang_wp' ),
		'popular_items'              => __( 'Popular Items', 'ido_ang_wp' ),
		'search_items'               => __( 'Search Items', 'ido_ang_wp' ),
		'not_found'                  => __( 'Not Found', 'ido_ang_wp' ),
		'no_terms'                   => __( 'No items', 'ido_ang_wp' ),
		'items_list'                 => __( 'Items list', 'ido_ang_wp' ),
		'items_list_navigation'      => __( 'Items list navigation', 'ido_ang_wp' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'Industries', array( 'sites' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );
/*
 * Register Meta Boxes
 *
 */

function register_sites_meta_boxes(){

	add_meta_box(
	            'site_info',
                __( 'Site Information', 'ido_ang_wp' ),
                'ido_angwp_my_display_callback',
                'sites',
                'normal',
                'low'
    );
}

add_action( 'add_meta_boxes', 'register_sites_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */

// Display code/markup goes here. Don't forget to include nonces!
function ido_angwp_my_display_callback( $post ) {
    wp_nonce_field(basename( __FILE__),     'wp_sites_nonce');
    $ido_sites_stored_meta = get_post_meta($post->ID);?>
        <div class="wrap sites-form">
            <div class="form-group">
                <label for="site_url"><?php esc_html_e('Site Url', 'ido_angwp');?></label>
                <input type="text" name="site_url" id="site_url" value="<?php if( !empty( $ido_sites_stored_meta['site_url'] ) ) echo esc_attr( $ido_sites_stored_meta['site_url'] ) ;?>">

            </div>
            <!-- /.form-group -->
        </div>
        <!-- /.wrap sites-form -->

<?php }

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function ido_angwp_save_meta_box( $post_id ) {
	// Save logic goes here. Don't forget to include nonce checks!
}
add_action( 'save_post', 'ido_angwp_save_meta_box' );