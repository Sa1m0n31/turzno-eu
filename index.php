<?php
get_header();
?>

<!-- LANDING -->
<main class="landing">
    <img class="landingBackground" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/landing.png'; ?>" alt="turzno" />
    <h1 class="landingTextMain">
        Lorem ipsum<br/>
        Dolor sit amet<br/>
        <span class="gold">Turzno Pałac Romantyczny</span>
    </h1>
    <p class="landingTextMinor">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </p>
</main>

<!-- AKTUALNOSCI -->
<section class="aktualnosci" id="aktualnosci">
    <h1 class="aktualnosciHeader">Aktualności</h1>
    <p class="aktualnosciText">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
    <div class="aktualnosciContainer">
        <?php
            $mainQuery = new WP_Query(array(
                    'posts_per_page' => 3
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
                            <?php echo the_excerpt(); ?>
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

        <!--<div class="aktualnosciItem">
            <h2 class="aktualnosciTitle">Lorem ipsum tytuł</h2>
            <h3 class="aktualnosciDate">15.12.2020</h3>
            <p class="aktualnosciExcerpt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <button class="readMoreBtn borderBtn">
                Czytaj dalej
            </button>
        </div>

        <div class="aktualnosciItem">
            <h2 class="aktualnosciTitle">Lorem ipsum tytuł</h2>
            <h3 class="aktualnosciDate">15.12.2020</h3>
            <p class="aktualnosciExcerpt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <button class="readMoreBtn borderBtn">
                Czytaj dalej
            </button>
        </div>-->
    </div>
    <button class="allArticlesBtn borderBtn">Zobacz wszystkie artykuły</button>
</section>

<?php
get_footer();
?>f