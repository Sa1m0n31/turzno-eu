<?php
get_header();
?>
<!-- MoveUpBtn -->
<button class="moveUpBtn" onclick="handleMenu(8)">
    ^
</button>
<div class="kurier">
<?php

if(have_posts()) {
    while(have_posts()) {
        the_post();
        the_content();
    }
}
?>
</div>

<?php
get_footer();
?>
