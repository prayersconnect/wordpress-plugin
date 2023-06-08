<?php
function pc_mosque_link_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => '',
        'title' => 'Link',
    ), $atts);

    // Get the mosque ID and title from shortcode attributes
    $id = $atts['id'];
    $title = $atts['title'];

    // Check if the ID is provided
    if (empty($id)) {
        return 'Missing ID.';
    }

    // Generate the link HTML
    $link = sprintf('<a href="https://prayersconnect.com/mosques/%s">%s</a>', $id, $title);

    return $link;
}
add_shortcode('pc_mosque_link', 'pc_mosque_link_shortcode');
