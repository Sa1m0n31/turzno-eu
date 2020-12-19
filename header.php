<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body>
<div class="container">

<!-- HEADER -->
<?php
if(is_front_page()) {
    ?>
    <header class="header headerFront">
        <h1 class="logo" onclick="handleMenu(8)">
            Lorem ipsum<br/>
            Dolor sit amet
            <span class="gold">Strona internetowa</span>
        </h1>

        <menu class="mainMenu">
            <ul>
                <li onclick="handleMenu(1)">Aktualności</li>
                <li onclick="handleMenu(2)">Turzno</li>
                <li onclick="handleMenu(3)">Deklaracja</li>
                <li onclick="handleMenu(4)">Galeria</li>
                <li onclick="handleMenu(5)">Komitet honorowy</li>
                <li onclick="handleMenu(6)">Sponsorzy społeczni</li>
                <li onclick="handleMenu(7)">Kontakt</li>
                <li><a href="/public_html/kurier-turzenski">Kurier Turzeński</a></li>
            </ul>
        </menu>
    </header>
    <header class="mobileHeader">
        <div class="hamburgerMenu" onclick="openMenu()">
            <span class="hamburgerLine"></span>
            <span class="hamburgerLine"></span>
            <span class="hamburgerLine"></span>
        </div>
        <menu class="mobileMenu" id="menu">
            <button class="exit" onclick="closeMenu()">
                x
            </button>
            <ul>
                <li onclick="handleMenu(1)">Aktualności</li>
                <li onclick="handleMenu(2)">Turzno</li>
                <li onclick="handleMenu(3)">Deklaracja</li>
                <li onclick="handleMenu(4)">Galeria</li>
                <li onclick="handleMenu(5)">Komitet honorowy</li>
                <li onclick="handleMenu(6)">Sponsorzy społeczni</li>
                <li onclick="handleMenu(7)">Kontakt</li>
                <li><a href="/public_html/kurier-turzenski">Kurier Turzeński</a></li>
            </ul>
        </menu>
    </header>

    <?php
}
else {
    ?>

    <header class="header headerPage">
        <h1 class="logo">
            <a href="/public_html">
                Lorem ipsum<br/>
                Dolor sit amet
                <span class="gold">Strona internetowa</span>
            </a>
        </h1>

        <menu class="mainMenu desktopOnly">
            <ul>
                <li><a href="/public_html/#aktualnosci">Aktualności</a></li>
                <li><a href="/public_html/#turzno">Turzno</a></li>
                <li><a href="/public_html/#deklaracja">Deklaracja</a></li>
                <li><a href="/public_html/#galeria">Galeria</a></li>
                <li><a href="/public_html/#komitetHonorowy">Komitet honorowy</a></li>
                <li><a href="/public_html/#sponsorzySpoleczni">Sponsorzy społeczni</a></li>
                <li><a href="/public_html/#kontakt">Kontakt</a></li>
                <li><a href="/public_html/kurier-turzenski">Kurier Turzeński</a></li>
            </ul>
        </menu>
    </header>

    <?php
}
?>