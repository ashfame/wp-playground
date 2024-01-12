<?php

require_once 'wordpress/wp-load.php';

$chatrix_block = '<!-- wp:automattic/chatrix {"instanceId":"2530674218113325","defaultHomeserver":"matrix.lol"} /-->';

$sample_page_post_id = 2;

$sample_page = get_post( $sample_page_post_id );

wp_update_post( array(
    'ID' => $sample_page_post_id,
    'post_content' => $chatrix_block . '  ' . $sample_page->post_content
) );
