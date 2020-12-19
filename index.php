<?php
get_header();
?>
<!-- MoveUpBtn -->
<button class="moveUpBtn" onclick="handleMenu(8)">
    ^
</button>

<!-- LANDING -->
<main class="landing">
    <span class="line big left"></span>
    <span class="line big right"></span>
    <span class="line small left smallLeft"></span>
    <span class="line small right smallRight"></span>
    <img class="landingBackground" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/landing.png'; ?>" alt="turzno" />
    <img class="landingMobile" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/landing-mobile.png'; ?>" alt="turzno" />
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
<section class="aktualnosci">
    <span id="aktualnosci"></span>
    <h2 class="sectionTitle">
        Aktualności
    </h2>
    <p class="sectionIntro">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
    <div class="aktualnosciContainer">
        <?php
            $mainQuery = new WP_Query(array(
                    'posts_per_page' => 3,
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
    <button class="allArticlesBtn borderBtn">
        <a href="/public_html/archiwum">
            Zobacz wszystkie artykuły
        </a>
    </button>
</section>

<!-- TURZNO -->
<section class="turzno">
    <span id="turzno"></span>
    <div class="left">
        <h2 class="sectionTitle">
            Turzno
        </h2>
        <p class="sectionIntro">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        <div class="turznoParagraph">
            <h3 class="turznoParagraphTitle">
                Nagłówek pierwszy
            </h3>
            <p class="turznoParagraphText">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="turznoParagraph">
            <h3 class="turznoParagraphTitle">
                Nagłówek pierwszy
            </h3>
            <p class="turznoParagraphText">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="turznoParagraph">
            <h3 class="turznoParagraphTitle">
                Nagłówek pierwszy
            </h3>
            <p class="turznoParagraphText">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p class="turznoParagraphText textInside">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </div>
    <div class="right">
        <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/turzno-2.jpg'; ?>" alt="turzno" />

        <div class="turznoParagraph">
            <h3 class="turznoParagraphTitle">
                Nagłówek pierwszy
            </h3>
            <p class="turznoParagraphText">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="turznoParagraph">
            <h3 class="turznoParagraphTitle">
                Nagłówek pierwszy
            </h3>
            <p class="turznoParagraphText">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/turzno-1.jpg'; ?>" alt="turzno" />
    </div>
</section>

<!-- DEKLARACJA -->
<section class="deklaracja">
    <span id="deklaracja"></span>
    <h2 class="sectionTitle">
        Deklaracja
    </h2>
    <p class="sectionIntro">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqe.
    </p>
    <h3 class="deklaracjaTitle">
        Deklaracja założycielska Komitetu Społecznego Turzno
    </h3>
    <div class="deklaracjaContainer">
       <div class="deklaracjaLeft">
           <p class="deklaracjaP">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           </p>

           <p class="deklaracjaP">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           </p>

           <p class="deklaracjaP">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           </p>

           <p class="deklaracjaP">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           </p>

           <p class="deklaracjaP">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           </p>
       </div>

        <div class="deklaracjaRight">
            <p class="deklaracjaP">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <p class="deklaracjaP">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <p class="deklaracjaP">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <p class="deklaracjaP">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <p class="deklaracjaP">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </div>

</section>

<!-- GALERIA -->
<section class="galeria">
    <span id="galeria"></span>

    <h2 class="sectionTitle">
        Galeria
    </h2>
    <div class="galeriaContainer">

    <?php

    $gallery = new WP_Query(array(
       'posts_per_page' => 6,
       'category_name' => 'Galeria'
    ));

    if($gallery->have_posts()) {
        while($gallery->have_posts()) {
            $gallery->the_post();

            ?>


            <div class="galeriaItem">
                <?php the_content(); ?>
            </div>

    <?php
        }
    }

    ?>
    </div>
</section>

<!-- VIDEO -->
<section class="videoSection">
    <h2 class="sectionTitle">
        Video
    </h2>
    <div class="videoContainer">
        <iframe src="https://www.youtube.com/embed/beKTe3G5kfA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe src="https://www.youtube.com/embed/beKTe3G5kfA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<!-- TIKTOK -->
<section class="tiktokSection">
    <h2 class="sectionTitle">
        Jesteśmy też na TikToku!
    </h2>
    <div class="tiktokContainer">
        <?php
            include 'page-tiktok.php';
        ?>
    </div>
</section>

<!-- KOMITET HONOROWY -->
<section class="komitetHonorowy">
    <span id="komitetHonorowy"></span>
    <img class="komitetHonorowyBackground" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/order.svg'; ?>" alt="turzno-komitet-honorowy" />
    <h2 class="sectionTitle">
        Komitet honorowy
    </h2>
    <p class="sectionIntro">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqe.
    </p>
    <div class="komitetHonorowyContainer">
        <div class="komitetHonorowyLeft">
            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="komitetHonorowyRight">
            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="komitetHonorowyItem">
                <h3 class="name">
                    Jan Kowalski
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SPONSORZY SPOLECZNI -->
<section class="sponsorzySpoleczni">
    <span id="sponsorzySpoleczni"></span>
    <h2 class="sectionTitle">
        Sponsorzy społeczni
    </h2>
    <p class="sectionIntro">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqe.
    </p>
    <div class="sponsorzySpoleczniContainer">
        <div class="sponsorzySpoleczniItem">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skylo.png'; ?>" alt="turzno" />
            <div class="overlay">
                <h3 class="sponsorName">
                    Agencja wizerunkowa Skylo
                </h3>
            </div>
        </div>
        <div class="sponsorzySpoleczniItem">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skylo.png'; ?>" alt="turzno" />
            <div class="overlay">
                <h3 class="sponsorName">
                    Agencja wizerunkowa Skylo
                </h3>
            </div>
        </div>
        <div class="sponsorzySpoleczniItem">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skylo.png'; ?>" alt="turzno" />
            <div class="overlay">
                <h3 class="sponsorName">
                    Agencja wizerunkowa Skylo
                </h3>
            </div>
        </div>

        <div class="sponsorzySpoleczniItem">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skylo.png'; ?>" alt="turzno" />
            <div class="overlay">
                <h3 class="sponsorName">
                    Agencja wizerunkowa Skylo
                </h3>
            </div>
        </div>
        <div class="sponsorzySpoleczniItem">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skylo.png'; ?>" alt="turzno" />
            <div class="overlay">
                <h3 class="sponsorName">
                    Agencja wizerunkowa Skylo
                </h3>
            </div>
        </div>
        <div class="sponsorzySpoleczniItem">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skylo.png'; ?>" alt="turzno" />
            <div class="overlay">
                <h3 class="sponsorName">
                    Agencja wizerunkowa Skylo
                </h3>
            </div>
        </div>

        <div class="sponsorzySpoleczniItem">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skylo.png'; ?>" alt="turzno" />
            <div class="overlay">
                <h3 class="sponsorName">
                    Agencja wizerunkowa Skylo
                </h3>
            </div>
        </div>
        <div class="sponsorzySpoleczniItem">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skylo.png'; ?>" alt="turzno" />
            <div class="overlay">
                <h3 class="sponsorName">
                    Agencja wizerunkowa Skylo
                </h3>
            </div>
        </div>
        <div class="sponsorzySpoleczniItem">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skylo.png'; ?>" alt="turzno" />
            <div class="overlay">
                <h3 class="sponsorName">
                    Agencja wizerunkowa Skylo
                </h3>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>