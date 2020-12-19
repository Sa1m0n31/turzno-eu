<?php
$tiktokQuery = new WP_Query(array(
    'pagename' => 'tiktok'
));

if($tiktokQuery->have_posts()) {
    while($tiktokQuery->have_posts()) {
        $tiktokQuery->the_post();
        the_content();
    }
}
?>
