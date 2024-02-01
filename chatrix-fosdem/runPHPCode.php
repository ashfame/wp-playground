<?php

require_once 'wordpress/wp-load.php';

$chatrix_block_welcome = '<!-- wp:paragraph --> <p>Below you can see "Chatrix" block in action. You can add it anywhere using either <code>/chatrix</code> or by looking up chatrix when choosing which block to insert.</p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>Below you see <code>#infodesk:fosdem.org</code> room embedded.</p> <!-- /wp:paragraph -->  <!-- wp:automattic/chatrix {"instanceId":"2530674218113325","defaultHomeserver":"fosdem.org","roomId":"#infodesk:fosdem.org","enableServiceWorker":false} /-->';
$chatrix_block_fosdem = '<!-- wp:automattic/chatrix {"instanceId":"2530674218113325","defaultHomeserver":"fosdem.org","roomId":"#infodesk:fosdem.org","enableServiceWorker":false} /-->';
$chatrix_block_coffee = '<!-- wp:automattic/chatrix {"instanceId":"2530674218113325","defaultHomeserver":"fosdem.org","roomId":"#cafe:fosdem.org","enableServiceWorker":false} /-->';
$chatrix_block_beer = '<!-- wp:automattic/chatrix {"instanceId":"2530674218113325","defaultHomeserver":"fosdem.org","roomId":"#beerevent:fosdem.org","enableServiceWorker":false} /-->';

wp_delete_post( 2 );

wp_update_post( array(
    'ID' => 3,
    'post_title' => 'Welcome to FOSDEM!',
    'post_name' => 'welcome-to-fosdem',
    'post_content' => $chatrix_block_welcome
) );

wp_insert_post( array(
    'ID' => 4,
    'post_title' => '#fosdem:fosdem.org',
    'post_type' => 'page',
    'post_status' => 'publish',
    'post_name' => 'fosdem',
    'post_content' => $chatrix_block_fosdem
) );

wp_insert_post( array(
    'ID' => 5,
    'post_title' => '#cafe:fosdem.org',
    'post_type' => 'page',
    'post_status' => 'publish',
    'post_name' => 'cafe',
    'post_content' => $chatrix_block_coffee
) );

wp_insert_post( array(
    'ID' => 6,
    'post_title' => '#beerevent:fosdem.org',
    'post_type' => 'page',
    'post_status' => 'publish',
    'post_name' => 'IsItBeerOClockYet?',
    'post_content' => $chatrix_block_beer
) );
