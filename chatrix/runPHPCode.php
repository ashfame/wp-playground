<?php

require_once 'wordpress/wp-load.php';

$chatrix_block = '<!-- wp:automattic/chatrix {"instanceId":"2530674218113325","defaultHomeserver":"matrix.lol"} /-->';

$sample_page = get_post( 2 );

wp_update_post( array(
    'ID' => 2,
    'post_content' => $chatrix_block . '  ' . $sample_page->post_content
) );
