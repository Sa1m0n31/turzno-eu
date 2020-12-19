<?php
get_header();
?>

<section class="archiwum">
    <h2 class="sectionTitle">
        Archiwum
    </h2>

    <div class="archiwumContainer">
    <?php
    $mainQuery = new WP_Query(array(
        'category_name' => 'Aktualności'
    ));

    if($mainQuery->have_posts()) {
        while($mainQuery->have_posts()) {
            $mainQuery->the_post();
            ?>
            <div class="aktualnosciItem">
                <h2 class="aktualnosciTitle">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo the_title(); ?>
                    </a>
                </h2>
                <h3 class="aktualnosciDate">
                    <?php echo get_the_date(); ?>
                </h3>
                <p class="aktualnosciExcerpt">
                    <?php the_excerpt(); ?>
                </p>
                <button class="readMoreBtn borderBtn">
                    <a href="<?php echo the_permalink(); ?>">
                        Czytaj dalej
                    </a>
                </button>
            </div>

            <?php
            wp_reset_postdata();
        }
    }
    ?>
    </div>
</section>

<?php
get_footer();
?>
