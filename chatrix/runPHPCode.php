<?php

require_once 'wordpress/wp-load.php';

$chatrix_block = '<!-- wp:paragraph --> <p>Below you can see "Chatrix" block in action. You can add it anywhere using either <code>/chatrix</code> or by looking up chatrix when choosing which block to insert.</p> <!-- /wp:paragraph -->  <!-- wp:paragraph --> <p>Even though its not functional in this Playground demo, since it requires its own service worker and that is not compatible with the Playground (running WordPress in your browser) at the moment, you can at least see how it looks and it can be added anywhere you can add a Gutenberg block :)</p> <!-- /wp:paragraph --> <!-- wp:automattic/chatrix {"instanceId":"2530674218113325","defaultHomeserver":"matrix.org"} /-->';

$sample_page_post_id = 2;

$sample_page = get_post( $sample_page_post_id );

wp_update_post( array(
    'ID' => $sample_page_post_id,
    'post_content' => $chatrix_block . '  ' . $sample_page->post_content
) );
