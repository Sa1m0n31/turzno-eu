<?php
get_header();
?>
    <!-- MoveUpBtn -->
    <button class="moveUpBtn" onclick="handleMenu(8)">
        ^
    </button>
<article class="article">
    <?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            $pattern = "/<p>.*?<\/p>/m"; // Global & Multiline
            $paragraph_count = floor(preg_match_all($pattern, get_the_content()));
            ?>
                <div class="articleTop">
                    <div class="left">
                        <button class="btn btn--backToFront">
                            <a href="/public_html">
                                <span class="arrow"> ^ </span> Powrót na stronę główną
                            </a>
                        </button>
                        <h1 class="aktualnosciTitle articleTitle">
                            <?php echo the_title(); ?>
                        </h1>
                        <h4 class="aktualnosciDate">
                            <?php echo get_the_date(); ?>
                        </h4>
                    </div>

                    <div class="right">
                        <?php
                        $url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                        <img class="articleImg" src="<?php echo $url ?>" />
                    </div>
                </div>
                <div class="articleContent">
                    <div class="left">
                    <?php

                    $content = apply_filters( 'the_content', get_the_content() );
                    $content = explode("</p>", $content);
                    $count = count($content);
                    for ($i = 0; $i < $paragraph_count; $i++ ) {
                        if($i == ceil($paragraph_count / 2)) {
                            echo '</div><div class="right">';
                        }
                        echo $content[$i] . "</p>";
                    }
                    echo '</div>';
                    ?>
                </div>

                <?php
            wp_reset_postdata();
        }
    }
    ?>
</article>

<?php
get_footer();
?>