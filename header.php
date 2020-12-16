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
<header class="header">
    <h1 class="logo">
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
        </ul>
    </menu>
</header>