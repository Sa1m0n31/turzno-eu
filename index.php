<?php
get_header();
?>
<!-- MoveUpBtn -->
<button class="moveUpBtn" onclick="handleMenu(9)">
    ^
</button>

<!-- LANDING -->
<main class="landing">
    <span class="progressBar">
        <button class="sliderBtn sliderBtnActive" id="sliderBtn1" onclick="goTo(0)"></button>
        <button class="sliderBtn" id="sliderBtn2" onclick="goTo(1)"></button>
        <button class="sliderBtn" id="sliderBtn3" onclick="goTo(2)"></button>
        <button class="sliderBtn" id="sliderBtn4" onclick="goTo(3)"></button>
        <button class="sliderBtn" id="sliderBtn5" onclick="goTo(4)"></button>
    </span>

    <span class="line big left"></span>
    <span class="line big right"></span>
    <span class="line small left smallLeft"></span>
    <span class="line small right smallRight"></span>

    <div class="siemaContainer">
        <div class="landingBackgroundWrappe">
            <img class="landingBackgroun" id="slider1" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider1.jpg'; ?>" alt="turzno" />
            <h1 class="landingTextMain">
                Zespół Dworca Kolejowego<br/>
                w Turznie z XIX wieku
            </h1>

            <p class="landingTextMinor">
                W jego skład wchodzą, wpisane do ewidencji zabytków powiatu toruńskiego, następujące obiekty: stacja kolejowa, poczta kolejowa, budynek pomocniczy, budynek spedycji, nastawnia kolejowa i cztery „domy kolejarza”. Opodal zespołu dworca kolejowego na Smaruju w Turznie znajduje się aleja dębowo-lipowa z zewidencjonowanymi 33 drzewami o rozmiarach pomnikowych według ustawy, które winny być jako wyjątkowa, jedyna w swoim rodzaju, przepiękna enklawa przyrody o rodowodzie historycznym i kulturowym uznane przez Radę Gminy Łysomice za Pomnik Przyrody. W sierpniu 2020 roku, staraniem dr Katarzyny Pawłowskiej, prezes Komitetu - rozpoczęta została procedura ustanowienia w/w Alei Dębowo-Lipowej im. Felicji Gajewskiej w Turznie zabytkiem ze stosownym wpisem do ewidencji zabytków powiatu lipnowskiego
            </p>
        </div>
        <div class="landingBackgroundWrappe">
            <img class="landingBackgroun" id="slider4" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider4.jpg'; ?>" alt="turzno" />
            <h1 class="landingTextMain">
                Karawaka w Turznie - Krzyż Choleryczny<br/>
                z 1831 roku
            </h1>

            <p class="landingTextMinor">
                Turznieńska Karawaka w 2021 roku liczy już 190 lat. Znajduje się na razie jedynie w ewidencji zabytków powiatu toruńskiego, jednak kontrowersje związane z tym, kto i w jaki sposób ma się zająć jej odnowieniem sprawiły, że Komitet podjął działania zmierzające do tego, by obiekt ten wpisano jak najszybciej do rejestru zabytków, co uruchomi szereg dalszych działań konserwatorskich przez odpowiednie organy instytucji do tego powołanych, przy wsparciu społecznym sponsorów, koordynowanym przez Komitet. Przypomnijmy, że KARAWAKA, a więc - krzyż choleryczny, krzyż morowy, pochodził pierwotnie z okresu XVI-XVII wieku z miasta Caravaca w Hiszpanii. W czasie trwania zaraz rozprzestrzenił się na Wschód. Był bardzo popularny w Polsce pod koniec XVIII, w XIX i na początku XX wieku. Dlatego został wystawiony w 1831 roku w Turznie na ziemi chełmińskiej, ale znany był też na niedalekiej ziemi dobrzyńskiej. Turznieńska karawaka należy do bardziej solidnie wykonanych z metalu, natomiast częściej stawiano karawaki drewniane, które szybciej ulegały zniszczeniu i zapomnieniu. Jednak i nasza karawaka turznieńska wymaga obecnie należytej konserwacji i opieki, gdyż ząb czasu i na niej odcisnął po 190 latach swoje piętno.
            </p>
        </div>

        <div class="landingBackgroundWrappe">
            <img class="landingBackgroun" id="slider5" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider5.jpg'; ?>" alt="turzno" />
            <h1 class="landingTextMain">
                Wieża zegarowa z domem oddzwiernego<br/>
                z początku XX wieku
            </h1>

            <p class="landingTextMinor">
                Wieża zegarowa jest chlubną pozostałością po zabudowaniach majątku w Turznie, którego ostatnimi właścicielami byli Władysław i Felicja Gajewscy. Wieża została uratowana akcją zbierania funduszy na jej odnowienie przez Komitet społeczny powołany przez Marka Pawłowskiego – miejscowego historyka i regionalisty, który wraz z uczniami zainicjował akcję zbierania datków na jej odnowienie już około ćwierć wieku temu. Następnie na wieży zawisł zegar oraz z czasem popłynęły i do dziś płyną nuty utworów Fryderyka Chopina, niczym kuranty – co jest osobliwością jeśli chodzi o wieś w skali naszego kraju
            </p>
        </div>
        <div class="landingBackgroundWrappe">
            <img class="landingBackgroun" id="slider3" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider3.jpg'; ?>" alt="turzno" />
            <h1 class="landingTextMain">
                Zespół Pałacowo-Parkowy w Turznie<br/>
                z XIX wieku
            </h1>

            <p class="landingTextMinor">
                Zespół płacowo-parkowy w Turznie została zbudowany w I połowie XIX wieku (główny pałac) i na początku XX wieku (prawe skrzydło) na miejscu dawnego dworu. Stary dwór pochodził z okresu, gdy właścicielami była rodzina Zboińskich. Dwór ten zachował się jeszcze na archiwalnej fotografii z 1911 roku. Pierwszy z pałaców wybudowano obok starego dworu w I połowie XIX wieku. Fundatorem pałacu był Augustyn Bartolomeusz Działowski,
                który zlecił zaprojektowanie obiektu znanemu warszawskiemu architektowi Henrykowi Marconiemu około roku 1838. Budowę pałacu zakończono w roku 1860. W 1926 roku rodzina Gajewskich dobudowała nowe skrzydło pałacowe od północno-wschodniej strony. Dla Augustyna Działowskiego Henryk Marconi zaprojektował w Turznie oprócz pałacu, także park, bramę wjazdową z domkiem dozorcy, altanę w ogrodzie, dom włościański i kuźnię. Obecnie obiekt ten to 4-gwiazdkowy hotel i centrum konferencyjne Pałac Romantyczny, będący w posiadaniu Aleksandry i Rafała Predenkiewiczów, którzy park udostępniają dla wszystkich zwiedzających, a w pałacu podejmują gości z całego świata.
            </p>

        </div>
        <div class="landingBackgroundWrappe">
            <img class="landingBackgroun" id="slider2" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider2.png'; ?>" alt="turzno" />
            <h1 class="landingTextMain">
                Gapa - jeden z przysiółków<br/>Turzna
            </h1>

            <p class="landingTextMinor">
                W tym rejonie Turzna znajdują się dwie z miejscowych ponad stuletnich kapliczek – obiektów kultu religijnego, które zostały ufundowane w różnych ważnych dla tutejszych mieszkańców przed laty intencjach. Wszystkie te figury i kapliczki wymagają odpowiedniej rewitalizacji oraz promocji, bowiem nie wszyscy z tutejszych wiedzą o ich istnieniu, a o historii z nimi związanej można przeczytać już jedynie w książkach Marka Pawłowskiego, któremu udało się spisać relacje najstarszych mieszkańców pamietających ich powstanie lub powtarzających przekazy swoich przodków. Czas, aby te informacje ożyły na nowo wśród nas miejscowych i stały się ciekawostką przyciągającą do naszego pięknego Turzna turystów w przyszłości. Taki cel stawia przed sobą Komitet.
            </p>
        </div>
    </div>

    <!-- LANIND MOBILE -->
    <img class="landingBackgroundMobile" id="slider-mobile1" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider-mobile1.jpg'; ?>" alt="turzno-landing" />
    <img class="landingBackgroundMobile" id="slider-mobile2" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider-mobile2.jpg'; ?>" alt="turzno-landing" />
    <img class="landingBackgroundMobile" id="slider-mobile3" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider-mobile3.jpg'; ?>" alt="turzno-landing" />
    <img class="landingBackgroundMobile" id="slider-mobile4" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider-mobile4.jpg'; ?>" alt="turzno-landing" />
    <img class="landingBackgroundMobile" id="slider-mobile5" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/slider-mobile5.jpg'; ?>" alt="turzno-landing" />
</main>

<!-- AKTUALNOSCI -->
<section class="aktualnosci">
    <span id="aktualnosci"></span>
    <h2 class="sectionTitle">
        Aktualności
    </h2>
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

                        <img class="aktualnosciImg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="thumbnail" />

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
        <p class="turznoParagraphText">
            Turzno jest miejscowością o niezwykle bogatej historii. W roku 1996 doczekało się opracowania monograficznego, które wyszło spod pióra regionalisty, historyka i pasjonata kultury i tradycji ziemi chełmińskiej i dobrzyńskiej Marka Pawłowskiego pt. Turzno. Dzieje wsi i zespołu pałacowo-parkowego.1 W 2004 roku, w pierwszym wydaniu monografii gminy Łysomice tego samego autora pt. Gmina Łysomice – od pradziejów do współczesności2, zamieszczone zostały nowe fakty i zdjęcia związane z Turznem i tutejszym zespołem pałacowo-parkowym. Na przestrzeni wieków w naszej miejscowości bywało wiele osób o ważnym znaczeniu historycznym nie tylko dla Turzna, ale i regionu, a nawet Polski. Przybywały tu znani i zasłużeni na przestrzeni dziejów w Europie i na świecie.
        </p>
        <p class="turznoParagraphText">
            Tylko nieliczne miejscowości w Polce mogą poszczycić się choćby chwilowym pobytem najwybitniejszego kompozytora i pianisty światowej sławy, a przy tym na wskroś Polaka – Fryderyka Chopina. W 2010 roku, w 200-lecie tego urodzin Chopina, przed pałacem w Turznie wzniesiono jego popiersie. Zostało ono ufundowane przez obecnych właścicieli zespołu pałacowo-parkowego Aleksandrę i Rafała Predenkiewicz. W obiekcie funkcjonuje czterogwiazdkowy hotel noszący nazwę Pałac Romantyczny, otoczony parkiem w stylu angielskim.
        </p>
        <p class="turznoParagraphText">
        Znawcą najbardziej oddanym sercem i poświęcającym się badaniom nad stanem zachowanych archiwaliów dotyczących Turzna, jest miejscowy pasjonat - regionalista Marek Pawłowski, mieszkaniec Smaruja w Turznie, nauczający historii w Szkole Podstawowej, noszącej imię Fryderyka Chopina, o co osobiście usilnie zabiegał. Oto obszerny, a zarazem niezwykle ważny cytat z wydanej pod auspicjami Urzędu Gminy Łysomice w 2014 roku monografii autorstwa Marka Pawłowskiego pt. Gmina Łysomice – historia, kultura, tradycja3, jaki nawiązuje do wątku chopinowskiego w naszej miejscowości oraz innych faktów związanych z miejscowymi antenatami na przestrzeni dziejów:
        </p>
        <!-- START WYROZNIENIA -->
        <p class="turznoParagraphText turznoQuote">
        „Turzno miało to szczęście, że dwukrotnie gościło (w 1825 i 1827roku) kilkudniowym pobytem sławnego rodaka. Ponadto w Lipniczkach oraz w Papowie Toruńskim znajdziemy właścicieli, zdarzenia związane z osobą kompozytora. O ile wiele faktów z krótkiego
        </p>
        <p class="turznoParagraphText turznoQuote">
        stosunkowo życia artysty jest niejasnych, jak chociażby dokładna data urodzenia, o tyle kilkudniowe pobyty w Turznie Fryderyka, najlepiej poświadcza jego epistolografia. Podczas słynnych wakacji w Szafarni, 14-letni Chopin odbył klika dalszych wycieczek. Jedną z nich był wyjazd za granicę Królestwa Kongresowego do Turzna, o którym pisał Fryderyk z Szafarni 26 sierpnia 1825 roku do rodziców: „Jutro rano jedziemy do Turzna i nie mamy wrócić aż dopiero w środę.”4 Mimo, że Turzno było wówczas pod zaborem pruskim, majątek, do którego przybył powozem młody kompozytor, był typowym polskim dworem, ostoją patriotyzmu. Znajdowała się tutaj bogata kolekcja dzieł sztuki i doskonale wyposażona biblioteka. Gospodarzem po staropolsku przyjmującym gości z Warszawy był Augustyn Bartolomeusz Działowski herbu Prawdzic (ur 24 sierpnia 1772 roku, zm. 4 grudnia 1826 roku) wraz z żoną Katarzyną z Jeżewskich, synem Ksawerym oraz dwiema córkami Julianną i Józefą. W turznieńskim dworze, którego wizerunek zachował się jedynie na zdjęciu w Tygodniku Ilustrowanym z roku 1911, był najprawdopodobniej klawesyn, a może fortepian, na którym z pewnością grał artysta. Ksawery Działowski kształcił się w Liceum Warszawskim, gdzie języka francuskiego uczył Mikołaj Chopin. Najprawdopodobniej przez Samuela Bogumiła Lindego, rektora Liceum Warszawskiego, rodzinę Skarbków, Dziewanowskich czy Zboińskich zawiązały się stosunki Chopinów z Działowskimi. Atmosfera domu była głęboko polska i patriotyczna, niewątpliwie odpowiadająca psychice młodziutkiego gościa z Warszawy, skoro po dwóch latach Chopin odwiedził Działowskich w Turznie po raz drugi w drodze do Gdańska. Zachowała się wzmianka zapisana ręką Fryderyka Chopina o kolejnym pobycie w Turznie. Tę wizytę wiąże się z planami wyjazdowymi kompozytora, sprecyzowanymi w korespondencji do rodziców z dnia 6 lipca 1827 roku, pisanej w Kowalewie pod Płockiem: „Gdy wyjeżdżamy do Płocka, szaleństwem by było, gdybym z mej strony nie miał o tym donieść. Dziś więc w Płocku, jutro w Rościszewie, pojutrze w Kikole, parę dni w Turznie, parę dni w Kozłowie i moment w Gdańsku, i na powrót.”
        </p>
        <p class="turznoParagraphText turznoQuote">
        W tym czasie Fryderyk przestał już być uczniem Liceum Warszawskiego, które ukończył i miał za sobą pierwszy rok studiów w Szkole Głównej Muzyki. Mógł się poza tym poszczycić pierwszymi sukcesami muzycznymi w stolicy Królestwa Kongresowego. Był więc gościem, jak wolno sądzić , po raz drugi serdecznie witanym przez mieszkańców turznieńskiego dworu. Radość powtórnego spotkania nie była jednak pełna z dwóch powodów. Fryderyk głęboko przeżywał śmierć swojej najmłodszej siostry Emilki, która zmarła 10 kwietnia 1827
        </p>
        <p class="turznoParagraphText turznoQuote">
        roku, rodzina Działowskich była okryta żałobą po utracie głowy rodziny Augustyna Działowskiego, który zmarł 4 grudnia 1826 roku.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Istniały bliższe i długotrwałe kontakty Działowskich w szczególności Ksawerego Działowskiego nie tylko z Fryderykiem, ale także z jego rodziną. Świadczy o tym list z Warszawy siostry kompozytora, Ludwiki Jędrzejewiczowej do Paryża dla Fryderyka z dnia 9 lutego 1835 roku, w którym wśród różnych wiadomości o znajomych brata zamieszczono następujące zdanie: „Pytał o Ciebie Działo, zawsze przyjemny, o podobnych ludzi u nas tu nie trudno.” Chodziło zapewne o Ksawerego Działowskiego. W drodze powrotnej z Gdańska Fryderyk zatrzymał się dla odpoczynku, jak należy się domyślać u tych samych przyjaznych rodzin, jak w drodze do Gdańska, to znaczy u Zboińskich w Kozłowie, Działowskich w Turznie, Zboińskich w Kikole. Podróże Fryderyka Chopina po Pomorzu nie byłyby możliwe bez oparcia w pomorskich dworach ziemiańskich: Zboińskich, Działowskich, Sierakowskich i innych. Tym bardziej w sytuacji niezamożnej rodziny Chopinów oraz w ówczesnych warunkach komunikacyjnych, kiedy jedynym lądowym środkiem podróżowania były powozy i konie.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Bezpośrednio sąsiadujące z Turznem Lipniczki mają dzieje związane z „szarą godziną” wybitnego Polaka czyli zaręczynami Fryderyka z Marią Wodzińską. Hrabiemu Wincentemu Wodzińskiemu i jego rodzinie warto poświęcić więcej miejsca, chociaż ten właściciel Lipniczek władał nimi tylko w latach 1844-1847. Żoną jego była Teresa Wodzińska, córka posła Jana Pawła Wodzińskiego i Barbary z Mirakowskich. Państwo Wincenty i Teresa Wodzińscy doczekali się potomstwa – Antoniego (ur. 1812), Feliksa (ur.1816), Kazimierza (ur.1818), Marii (ur. 1819), Józefy (ur. 1824) i Teresy (ur. 1931).5 Rodzina Wodzińskich posiadała oprócz dużych kapitałów kompleks dóbr ziemskich, jak przystało na kujawski magnacki ród. Po powstaniu listopadowym, któremu sprzyjała cała rodzina, a Antoni i Feliks brali czynny udział w walkach powstańczych, Wodzińscy udali się na emigrację do Berlina, Drezna i w 1833 roku do Genewy.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Najbardziej jednak interesującą osobą z tej rodziny była Maria Wodzińska (1819-1896) „Muza Słowackiego i Chopina”. Spotkania z dwoma genialnymi artystami przysporzyły Marii sławy. Wspomnienia ze wspólnej z Wodzińskimi (Marią) wyprawy w Alpy berneńskie, Słowacki później wplótł w strofy poematu W Szwajcarii – arcydzieła miłosnej poezji polskiej. W 1835 roku podczas podróży, w Dreźnie spotkała się rodzina Wodzińskich z Fryderykiem Chopinem. W Marienbadzie w tym samym roku Wodzińscy spędzili wspólne wakacje z Chopinem. W przeddzień rozstania, 9 września 1836 roku Fryderyk Chopin oświadczył się
        </p>
        <p class="turznoParagraphText turznoQuote">
        Marii Wodzińskiej. Do ślubu jednak nie doszło, jak się przypuszcza, ze względu na gwałtowny sprzeciw Wincentego Wodzińskiego (późniejszego właściciela Lipniczek). Nie życzył on sobie związku swojej córki z „fortepianistą”, a także z uwagi na jego pochodzenie, coraz głośniejszy romans kompozytora z pisarką Georg Sand czy wreszcie ze względu na stan zdrowia Chopina. W późniejszej korespondencji Chopina z Wodzińskimi pojawia się jedynie zwrot „szara godzina”, przypominający popołudniowe zaręczyny Fryderyka i Marii w Dreźnie. Korespondencja Wodzińskich i Chopina zaginęła w 1939 roku w Warszawie. Zawierała ona listy Fryderyka do Marii, jej matki i braci. Zachowało się jedynie zdjęcie pakietu tych listów, związanych różową wstążką i podpisanych przez Chopina „Moja bieda”. Utworami Fryderyka Chopina dedykowanymi Marii Wodzińskiej były: Walc Asdur op. 69/1 i pieśń do słów S. Witwickiego Pierścień – Es-dur op. 74/14.
        </p>
        <p class="turznoParagraphText turznoQuote">
        24 lipca 1841 roku w kościele parafialnym w Służewie zawarty został ślub Marii Wodzińskiej z Józefem Skarbkiem. Hrabia Józef Skarbek urodzony w 1822 roku był synem Fryderyka, ministra Księstwa Warszawskiego, pisarza i pamiętnikarza, ojca chrzestnego Chopina. Zięć zapewne nakłonił Wincentego Wodzińskiego do kupna w 1844 roku majątku w Lipniczkach. W 1845 roku Maria Skarbek z domu Wodzińska spotkała i zakochała się w dzierżawcy jednego z majątków jej męża, Władysławie Orpiszewskim. W tym samym roku Maria wstąpiła do klasztoru wizytek w Warszawie. Włocławski sąd biskupi w 1847 roku wydał wyrok uznający małżeństwo Marii i Józefa Skarbków za unieważnione. Tegoż roku Wincenty Wodziński sprzedał Lipniczki Wilhelmowi Piotrowi Naumanowi.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Rodzina Wodzińskich musiała być jednak bardzo związana z tym terenem, skoro w 1846 roku, gdy zmarł najstarszy syn Antoni, zdecydowano się go pochować na cmentarzu przykościelnym w Papowie Toruńskim. Podczas przebudowy kościoła niektóre nagrobki, w tym także Antoniego Wodzińskiego, wmurowano w dobudowane prezbiterium. Na tablicy widnieje napis: Antoni Wodzińśki, syn Wincentego i Teresy, oficer Woysk Polskich i Hiszpańskich ur. 29 XII 1812 r. zm. 8 XI 1846 r.6
        </p>
        <p class="turznoParagraphText turznoQuote">
        26 października 1848 roku w kościele w Kłóbce odbył się ślub Marii i Władysława Orpiszewskiego. Choroba męża była przyczyną wyjazdu do Włoch, gdzie w 1881 roku Władysław zmarł. Po powrocie do kraju Maria Wodzińska primo voto Skarbkowa, sekundo voto Orpiszewska zamieszkała w Kłóbce, gdzie zmarła 7 września 1896 roku.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Młodzieńcze peregrynacje Fryderyka Chopina po Pomorzu przyczyniły się do tego, że Turzno, jak i chyba wszystkie miejsca, gdzie był kompozytor to zakątki naznaczone i
        </p>
        <p class="turznoParagraphText turznoQuote">
        wyjątkowe. Stan takich miejsc, pielęgnowanie pamięci, kultywowanie tradycji chopinowskich, świadczą o ludzkiej wrażliwości oraz stosunku do życia i twórczości wielkiego Polaka. Turzno jako chyba jedyna wioska w naszym kraju posiada w samym centrum zachowaną wieżę zegarową projektowaną przez Henryka Marconiego, a ufundowaną przez Działowskich, gdzie czas odmierzają w południe kuranty z melodią słynnego kompozytora. W roku 2010 w kompleksie pałacowo-parkowym w Turznie, gdzie niegdyś przebywał genialny Polak, odbyło się uroczyste odsłonięcie pomnika Fryderyka Chopina, upamiętniające dwukrotny jego tutaj pobyt. Nowy właściciel kompleksu pałacowo-parkowego, który ufundował popiersie z brązu Fryderyka Chopina, pan Rafał Predenkiewicz wraz z władzami województwa, powiatu, gminy, biskupa Andrzeja Suskiego oraz mieszkańcami uczcili 200 rocznicę urodzin kompozytora w magicznym miejscu, gdzie bywał Fryderyk Chopin.7
        </p>
        <p class="turznoParagraphText turznoQuote">
        Ostatnią właścicielką dóbr turznieńskich była Felicja z Mielżyńskich Gajewska, która całe swoje życie poświęciła na działania związane z odzyskaniem przez Polskę niepodległości. Swoją działalność w Toruniu zaznaczyła od ścisłych związków z Towarzystwem Naukowym w którym udzielała się w miarę możliwości oraz wspierając finansowo tę placówkę kultury polskiej. Współpracowała i wspomagała materialnie Towarzystwo Śpiewu „Lutnia” w Toruniu. Aktywnie udzielała się w Komitecie Niesienia Pomocy Ofiarom Wojny w Królestwie Polskim. Od 1915 roku była członkinią Towarzystwa św. Wincentego a Paulo w Toruniu zajmującego się działalnością charytatywną. Współpracowała z Toruńską Opieką nad bezdomnymi. Pełniła funkcję wice prezesa Towarzystwa Ziemianek Polskich na Pomorzu. Była współzałożycielką w 1920 roku Domu Dziecka w Lubiczu oraz organizatorką koła Pomorskiego Towarzystwa Opieki nad Dzieckiem. Felicja Gajewska czynnie uczestniczyła w powitaniu wojsk gen. J. Hallera w Toruniu i przekazała 29 tys. marek bezzwrotnej pożyczki komitetowi powitalnemu. Została odznaczona Medalem Niepodległości.8
        </p>
        <p class="turznoParagraphText turznoQuote">
        Felicja z Mielżyńskich Gajewska pochodziła z hrabiowskiego znakomitego, wielkopolskiego rodu Mielżyńskich okazującego się herbem Nowina. Wyszła za mąż za właściciela majątku w Turznie Władysława Gajewskiego szlacheckiego herbu Ostoja (ur. 27.VI.1867 r. – zm. 19. IX.1925 r.) z którym miała dwoje dzieci. Córkę Ludwikę ur.21 marca 1897 r. oraz syna Rafała ur.19 lipca 1905 roku. Felicja Gajewska popełniła mezalians i nie mogła zarówno ona jak i jej dzieci używać tytułu hrabiowskiego, chociaż pod koniec życia po
        </p>
        <p class="turznoParagraphText turznoQuote">
        śmierci męża, za zasługi, prestiż i z grzeczności współpracownicy gloryfikowali jej rodzime pochodzenie.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Władysław Gajewski dziedzic Turzna w latach 1892-1925 także wywodził swoje rodowe korzenie z Wielkopolski. Cała ówczesna elita polskiego ziemiaństwa z okolic Torunia wzorowała się na działalności Polaków w Wielkopolsce stąd takie powiązania regionalne. W 1914 roku z inicjatywy Felicji Gajewskiej zostało opracowane drzewo genealogiczne Gajewskich herbu Ostoja. Artysta i genealog z Krakowa W. Winkler na zlecenie Felicji oraz po dostarczeniu przez nią danych genealogicznych stworzył drzewo rodu pokaźnych rozmiarów(ok.1m x 2m), które przetrwało do dzisiaj i jest w posiadaniu Muzeum Okręgowego w Toruniu.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Od kiedy Felicja została małżonką Władysława Gajewskiego wciągnięta była automatycznie w działalność na rzecz Towarzystwa Naukowego w Toruniu z którym ścisłe związki miała cała rodzina. Gajewscy wspierali finansowo Towarzystwo Naukowe w Toruniu, przyczyniając się również znacznie do nabycia gmachu „Muzeum”.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Gajewscy w tym szczególnie Felicja, wspomagała również materialnie Towarzystwo Śpiewu „Lutnia” w Toruniu. „Lutnia” przygotowywała różnego rodzaju imprezy kulturalne, odbywające się głównie w Sali Parku Wiktorii (okolice obecnej ulicy Grudziądzkiej i Legionów). Dochody z tych imprez przekazywano Komitetowi Niesienia Pomocy Ofiarom Wojny w Królestwie Polskim.
        </p>
    </div>
    <div class="right">
        <p class="turznoParagraphText turznoQuote marginTop50">
        W Toruniu już na początku 1915 roku odżywać zaczęła działalność polska, do której nawoływała miejscowa prasa. Charakterystyczna dla tego okresu rozwoju stała się od samego początku ofiarna działalność kobiet, wśród których szybko pojawiła się kadra energicznych i patriotycznie bardzo dojrzałych działaczek wywodzących się głównie z kół miejscowej i okolicznej inteligencji. Samodzielna akcja toruńska w tej dziedzinie zorganizowana została już w maju 1915 roku i znalazła swój wymiar w apelu zarządu Towarzystwa św. Wincentego a Paulo znanego w Toruniu od dawna ze swej działalności charytatywnej. Osoby, które kierowały całą akcją, odezwa wymieniała Wandę Szumanówną oraz Wandę Swinarską, obie należące do znanych w Toruniu rodzin polskich lekarzy. Ze strony okolicznego ziemiaństwa polskiego aktywnie współpracowały z nimi hr. Maria Potocka z Piątkowa z domu Gajewska oraz jej bratowa Felicja Gajewska z Turzna.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Wkrótce akcja ta wzorem poznańskiej organizacji przybrała nazwę Opieki nad Bezdomnymi, która później stała się ekspozyturą poznańskiego komitetu Niesienia Pomocy Ofiarom wojny w królestwie Polskim. W styczniu 1916 roku „Gazeta Toruńska” zamieściła szczegółowe
        </p>
        <p class="turznoParagraphText turznoQuote">
        Sprawozdanie komitetu Toruńskiego Opieki nad Bezdomnymi ze zbiórki i wysyłki bielizny, odzieży, pościeli i obuwia do różnych miast byłego zaboru rosyjskiego zniszczonych w wyniku działań wojennych, między innymi do Aleksandrowa Kujawskiego, Ciechocinka, Nieszawy i Włocławka a także dalej położonych Płocka Ciechanowa, Płońska, Chorzel, Przasnysza, Sierpca. Gazeta podała, że ogółem wysłano do wymienionych miejscowości 25.000 sztuk odzieży stanowiącej zaopatrzenie dla 6.080 osób, w tym 2.780 dorosłych i 3.300 dzieci.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Kiedy na początku lipca 1917 roku Poznańska Rada Narodowa – główna organizacja pretendująca w tym czasie do przewodzenia całemu polskiemu ruchowi organizacyjnemu w zaborze pruskim, wystąpiła z apelem powszechnego obchodzenia święta setnej rocznicy śmierci Tadeusza Kościuszki, w Toruniu również przygotowano specjalną uroczystość na tę okazję. Główne obchody odbyły się 11 października 1917 roku w Sali Parku Wiktorii. W programie były deklamacje oraz śpiewy o treści patriotycznej. Największe jednak wrażenie na licznie zgromadzonej publiczności wywarł żywy obraz zatytułowany „Kościuszko pod Racławicami” według obrazu Jana Matejki. W roli Tadeusz Kościuszki wystąpił Władysław Gajewski, właściciel podtoruńskiego majątku w Turznie. Przy wykonaniu scenografii w której umieszczono żywego i wypchanego konia brała czynny udział Felicja Gajewska. Występy, które zaprezentowano w Sali Parku Wiktoria, powtórzono w pałacu w Turznie. Za ten występ władze pruskie ukarały właścicieli majątku w Turznie ograniczeniem przydziałów żywności oraz szczególnie reglamentowanej nafty.
        </p>
        <p class="turznoParagraphText turznoQuote">
        W pracę społeczno-narodową zaangażowana była Felicja Gajewska, która w latach 1911-1921 pełniła funkcję wice prezesa Towarzystwa Ziemianek Polskich na Pomorzu a razem z mężem zasilała również fundusz pomocy dla ofiar wojny.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Za uzyskane fundusze ze zbiórek oraz imprez organizatorki zakupywały materiały, włóczki i najczęściej samodzielnie, wieczorami na zebraniach w wybranych dworach i pałacach dziergały czapki, rękawiczki, szaliki i ubranka dla dzieci polskich z Królestwa Polskiego gdzie trwała wojna.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Z początkiem lipca 1916 roku akcja zbiórki dla bezdomnych zyskała w Toruniu szczególny, bardzo znaczący element reklamowy, ukierunkowany zwłaszcza na pomoc dla dzieci i sierot. Był nim miesięcznik „Żebraczek Bezdomnych”, wydawany do roku 1918 przez Helenę Piskorską. Z tym pisemkiem współpracował Oswald Potocki, podpisując się inicjałami O.P.P. oraz Felicja z Mielżyńskich Gajewska, żona Władysława ukrywająca się pod pseudonimem „Inka”. Pani Gajewska drukowała tam niewielkie opowiadania o treści religijno-patriotycznej,
        </p>
        <p class="turznoParagraphText turznoQuote">
        przeznaczone głównie dla dzieci. Oprócz opowiadań, artykułów, redakcja systematycznie zamieszczała zestawienia otrzymanych składek, które zasilały utworzone w maju 1918 roku Towarzystwo Opieki nad Dziećmi na Prusy Królewski z siedzibą w Toruniu. Celem tego Towarzystwa, wzorowanego na analogicznym w Poznaniu, stała się opieka nad sierotami i dziećmi zaniedbanymi, organizowanie ochronek i przytułków i w związku z tym szkolenie kadry ochroniarek. Organizowano również wykłady popularne i spotkania poświęcone sprawom zdrowia i higieny.
        </p>
        <p class="turznoParagraphText turznoQuote">
        W październiku 1920 roku wspólnymi siłami i przy wsparciu ks. Henryka Szumana, jego szwagierki Wandy Szumanowej, Heleny Piskorskiej, Heleny Steinbornowej i Felicji Gajewskiej w Lubiczu powstał Dom Dziecka oraz zorganizowano koło Pomorskiego Towarzystwa Opieki nad Dzieckiem.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Proklamacja niepodległego państwa polskiego w listopadzie 1918 roku nie znaczyła jeszcze dla Pomorza odzyskania wolności. Dopiero w 1920 roku przy olbrzymim entuzjazmie miejscowych Polaków Pomorze przyłączono do Rzeczpospolitej. Był to już okres najbardziej intensywnych przygotowań do uroczystego przyjęcia wojsk polskich pod dowództwem gen. Józefa Hallera. Ludność polska przystąpiła do dekoracji ulic i domów, budowania bram triumfalnych przybranych girlandami z gałązek drzew iglastych i polskimi emblematami narodowymi. Organizacją uroczystości w Toruniu, określanej mianem Święta Narodowego, z ramienia Polskiej Rady Ludowej, kierował specjalny Komitet. Dysponował on całym sztabem ludzi podzielonych na sekcje: organizacyjną, finansową, budowlaną, zieleni oraz sztandarów i odznak. Wypożyczenie, zakup, i przewóz drewna, jak również roboty ciesielskie wymagały wysokich nakładów. Zakupiono też znaczne ilości farb oraz materiałów na chorągwie i sztandary dla wszystkich publicznych i rządowych gmachów, jak ratusz, sądy, szkoły, dworce, koszary i wojskowe kwatery przygotowane dla wkraczających hallerczyków. Chciano mimo panującego ubóstwa godnie przywitać tak długo oczekiwaną Polskę w postaci wojska gen. Józefa Hallera.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Jak się później okazało, Komitet wydatkował blisko 91 000 marek, z czego 16 657 uzyskano z dobrowolnych składek stowarzyszeń, cechów i osób prywatnych, zaś 27 480 marek ze sprzedaży narodowych odznak i chorągwi. Resztę wyłożył sam Komitet, który uzyskał bezzwrotną pożyczkę w sumie 29 000 marek od właścicielki podtoruńskiego majątku w Turznie Felicji z Mielżyńskich Gajewskiej.
        </p>
        <p class="turznoParagraphText turznoQuote">
        W momencie przejmowania przez polską administrację wyzwolonych terenów, Władysław Gajewski, właściciel Turzna, dekretem z 15 marca 1921 roku powołany został przez
        </p>
        <p class="turznoParagraphText turznoQuote">
        Wojewodę pomorskiego, dr Stefana Łaszewskiego, na członka Tymczasowej Rady Powiatowej w Toruniu, której pierwsze posiedzenie odbyło się 13 kwietnia 1921 roku.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Władysław Gajewski zmarł nagle podczas spaceru z dziećmi w swoim majątku 19 września 1925 roku, przeżywszy 58 lat. W miejscu śmierci męża Felicja Gajewska kazała postawić kapliczkę, która przetrwała do dzisiaj, nieopodal parku pałacowego. Z nekrologu zamieszczonego w „Słowie Pomorskim” w dniu 24 września 1925 roku można się dowiedzieć, że zmarły był członkiem Rady Nadzorczej Cukrowni Chełmża.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Po śmierci Władysława Gajewskiego, właścicielką dóbr w Turznie była od 1926 roku Felicja z hr. Mielżyńskich Gajewska. Z jej inicjatywy ukończono budowę skrzydła pałacu od strony północno-wschodniej. Sytuacja gospodarcza kraju lat 30-tych, parcelacja majątku, spowodowały kłopoty finansowe zadłużonego majątku
        </p>
        <p class="turznoParagraphText turznoQuote">
        Córka Felicji Gajewskiej, Ludwika ( Inka) ur. 21 marca 1897r. wraz z mężem pułkownikiem Stefanem Tadeuszem Iwanowskim, synem Edwarda i Natalii z Neberszerów, odziedziczyła Piątkowo po zmarłej bezpotomnie w 1927 r. ciotce Marii Oswaldowej Potockiej. Pułkownik Stefan Tadeusz Iwanowski był zastępcą Szefa Sztabu Frontu Pomorskiego. Ludwika nazywana wśród znajomych Inką uzyskała maturę w Anglii w Brighton. Studia artystyczne ukończyła w Oksfordzie w 1917 roku. Po powrocie do Turzna w latach 1918-1920 uczyła bezpłatnie języka polskiego za co władze pruskie nakładały na nią grzywny i dwukrotnie aresztowały. Wraz z matką publikowała w „Żebraczku Bezdomnych” artykuły i opowiadania dla dzieci i młodzieży. Wydała własną powieść pt. „Kierdej”, która w 1929 roku doczekała się powtórnych wydań. W czasie II wojny światowej aresztowana przez Gestapo za działalność konspiracyjną i po krwawym śledztwie w Grudziądzu osadzono ją w Lager Stutthof II, w którym przebywała od marca 1942 do wyzwolenia w styczniu 1945 roku.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Iwanowscy mieli jedyną córkę Felicytę, ur. 1 maja 1921 roku, po mężu Strojny, więźniarkę Oświęcimia i Ravensbruck, zmarło kilka lat temu w USA.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Ludwika Gajewska zmarła 11 czerwca 1950 roku w wieku 53 lat. Pochowana została w rodzinnym grobowcu w podziemiach kościoła w Wielkołące koło Kowalewa Pomorskiego.
        </p>
        <p class="turznoParagraphText turznoQuote">
        Syn Władysława i Felicji, Rafał Gajewski, ur. 19 lipca 1905r. w Turznie, w okresie międzywojennym studiował na belgijskim uniwersytecie w Louvain. Po powrocie do Polski zarządzał majątkiem w Wielkołące. W 1945 roku 13 lutego Rafał Gajewski ożenił się z Anielą Szenic z którą miał jedynego syna. Łukasz Maria Gajewski ur. 2.VII.1946r. ożenił się z Elżbietą Suchocką, siostrą premier Hanny Suchockiej. Elżbieta Suchocka ur.
        </p>
        <p class="turznoParagraphText turznoQuote">
        21.V.1949r.,pochodzi z Pleszewa i jest córką Józefa i Wandy z Bączkowskich. Łukasz Gajewski jest ostatnim po mieczu z rodu Gajewskich z linii turznieńskiej.
        </p>
        <p class="turznoParagraphText turznoQuote">
        12 marca 1939 roku zmarła po ciężkiej chorobie w Zakładzie Św. Elżbiety w Poznaniu Felicja z Mielżyńskich Gajewska. W jej nekrologu zamieszczonym w „Gazecie Pomorskiej” z 16 marca 1939 roku można odczytać m.in.: odznaczona Medalem Niepodległości właścicielka Dóbr Turznieńskich przeżywszy 61 lat… Pochowana została w grobowcu rodzinnym w Wielkołące. Oszczędzone jej było oglądanie niszczenia majątku Turzno we wrześniu 1939 r. przez hitlerowców.9”
        </p>
        <p class="turznoParagraphText turznoQuote">
        Jak pisze Marek Pawłowski w monografii gminy Łysomice z roku 2014, w rozdziale poświęconym swojej ukochanej miejscowości Turzno… „Przemierzając tereny gminy Łysomice wzdłuż i wszerz, a potem układając w pamięci jej najcharakterystyczniejsze krajobrazy – nie sposób pominąć kapliczek przydrożnych tkwiących w otoku przyrody jak drogie kamienie w pięknej oprawie.”
        </p>
        <p class="turznoParagraphText">
        I kontynuuje:
        </p>
        <p class="turznoParagraphText turznoQuote">
        „W czasie II wojny światowej większość kapliczek przez hitlerowców była zniszczona lub oszpecona. Kapliczki i krzyże po wojnie odrodziły się jak perły naszego polskiego krajobrazu o zróżnicowanym pięknie i guście, świadczą też kiedy powstały. Przykładem naszej historii są także spawane krzyże z ubogiego PRL-u ogrodzone płotkiem z ewangelickiego cmentarza. W niektórych zakątkach naszej gminy architektura kapliczek wynika z tradycji przybyłych tu osiedleńców z kieleckiego czy centralnej Polski. W samym Turznie jest kilka kapliczek o ciekawej historii i niektóre doczekały się wcześniej opisów. Figura Matki Bożej na kolumnie została ufundowana w 1920 r. przez Władysława Gajewskiego właściwie jako ogrodowe sacrum i zwrócona była pierwotnie w stronę parku z racji także innych niegdyś dróg komunikacyjnych. Niemcy kapliczkę przewrócili i kolumna spoczywała w bagnie na miejscu a figura Matki Bożej przechowywana była w Turznie u rodziny Kiebałów. W latach 70–tych z inicjatywy Kazimierza Lisewskiego przy pomocy Witolda Kołtuna kolumnę ponownie ustawiono, a na niej umieszczono figurę Bożej Matki z odnowioną koroną przez Eugeniusza Olszewskiego. Kapliczkę poświęcił ks. Edward Cerowski przed sierpniowym świętem parafii. Obecnie odnowiona przez firmę Arpol figura zyskała na wyglądzie wraz z dodanym łacińskim mottem „ORA PRO NOBIS” – MÓDL SIĘ ZA NAMI.”
        </p>
        <!-- KONIEC ZAZNACZENIA -->


        <p class="turznoParagraphText">
        Z kolejnych monografii Marka Pawłowskiego można dowiedzieć się wciąż nowych faktów o historii zabytkowych obiektów, które mają sto lat i więcej… - tak jak obchodząca w obecnym 2021 roku 190-letnia KARAWAKA, czyli KRZYŻ CHOLERYCZNY z 1831 roku, upamiętniający w centrum naszej wsi ustąpienie zarazy początku XIX wieku – cholery, podobnej do tej, która obecnie zbiera niechlubne żniwo w postaci ofiar ludzkich i nosi nazwę KORONAWIRUS lub COVID-19. Owych zabytkowych obiektów w Turznie zarówno jeśli chodzi o budowle jak i o przyrodę jest w Turznie aż 13. Stopniowo będziemy Państwu odkrywać ich jedyną w swoim rodzaju genezę powstania, istnienia oraz przypominać o konieczności odpowiedniego zadbania o ich stan, który prawem zachowania szacunku do dziedzictwa narodowego im się należy ze wszech miar. Działania naszego Komitetu są zorientowane jednak nie tylko na oczywisty cel rewitalizacji tychże obiektów, ale także na odpowiednią ich promocję w małej i dużej skali.
        </p>
        <p class="turznoParagraphText">
        Na koniec warto wspomnieć, że równo 100 lat temu - w roku 1921 powstała w Turznie Straż Ogniowa. Jej pierwszym komendantem był Tadeusz Krzyżanowski - z zawodu ślusarz. W tym roku wypada nam więc ten fakt świętować.
        </p>
        <p class="turznoParagraphText">
        Zapraszamy do lektury naszych artykułów oraz wsparcia akcji zbiórki publicznej środków finansowych na rzecz rewitalizacji i promocji naszej Małej Ojczyzny, jaką jest dla 1129 obecnie mieszkańców naszej miejscowości Turzno.
        </p>
        <p class="turznoParagraphText">
        Bądźmy wspólnie darczyńcami wspierającymi liczne akcje rewitalizacji i promocji oraz ambasadorami naszej miejscowości na zewnątrz. Niech wieść o unikalności piękna naszego Turzna niesie się w świat! Sławmy nasze miejsce na ziemi tak, jak czyniła to patriotka i filantropka Felicja Gajewska, która patronuje naszym działaniom w sposób symboliczny. Bądźmy godnymi następcami polskiej spuścizny historycznej i oddania jej hołdu, jaki wraz z odzyskaniem niepodległości przez Polskę, winniśmy ofiarować swojej Ojczyźnie na swój sposób każdego dnia. Postarajmy się wspólnie, aby te słowa nie były tylko słowami, lecz obróćmy je w pozytywny czyn!
        </p>

        <p class="turznoParagraphText turznoParagraphPodpis">
            <b>DR KATARZYNA PAWŁOWSKA</b> - Prezes Komitetu ds. rewitalizacji i promocji Alei Dębowo-Lipowej im. Felicji Gajewskiej na Smaruju w Turznie oraz innych zabytków turznieńskich<br/>
            TURZNO 7 01 2020 r.
        </p>
    </div>
</section>

<!-- DEKLARACJA -->
<section class="deklaracja">
    <span id="deklaracja"></span>
    <h2 class="sectionTitle">
        Deklaracja
    </h2>
    <h3 class="deklaracjaTitle">
        Deklaracja Komitetu ds. Rewitalizacji i Promocji Alei Dębowo-Lipowej im. Felicji Galewskiej na Smaruju w Turznie oraz innych zabytów turznieńskich
    </h3>
    <div class="deklaracjaContainer">
       <div class="deklaracjaLeft">
           <p class="deklaracjaP">
            Komitet społeczny noszący nazwę: Komitet ds. rewitalizacji i promocji Alei Dębowo-Lipowej im. Felicji Gajewskiej na Smaruju w Turznie oraz innych zabytków turznieńskich za teren swojego działania ustanowił wieś Turzno.
           </p>
           <p class="deklaracjaP">
            Celem działalności Komitetu jest uświadomienie szerokiemu ogółowi społeczeństwa potrzeby i znaczenia ochrony przyrody oraz zabytków w Turznie. Szczególną wagę Komitet przykłada do otoczenia należytą opieką Alei Dębowo-Lipowej im. Felicji Gajewskiej na Smaruju w Turznie oraz innych zabytków turznieńskich. Komitet zmierza do tego, aby teren ten, obejmujący m.in. 33 drzewa o rozmiarach pomników przyrody według ustawy, został uznany przez Radę Gminy Łysomice za pomnik przyrody.
           </p>
           <p class="deklaracjaP">
            Ponadto na terenie miejscowości znajduje się 13 obiektów, które ze względu na datę powstania oraz bogatą historię i zakorzenienie w kulturze wsi, zasługują na otoczenie ich należytą ochroną.
           </p>
           <p class="deklaracjaP">
            Zarówno Aleja jak i pozostałe obiekty zabytkowe w Turznie potrzebują odpowiedniego nagłośnienia promocyjnego o ich unikalności i wyjątkowości. Dlatego Komitet deklaruje podejmowanie wszelkimi dostępnymi środkami działań i realizowanie przedsięwzięć, zmierzających do skutecznej rewitalizacji w/w obiektów oraz promowanie ich w skali miejscowości Turzno, gminy, regionu, województwa kujawsko-pomorskiego, Polski, Europy i świata.
           </p>
       </div>
        <div class="deklaracjaRight">
            <p class="deklaracjaP">
                Komitet realizuje swój cel w szczególności poprzez:
                <br/><br/>
                1. Pobudzenie najszerszej pojętej inicjatywy społecznej i działanie w interesie ochrony przyrody i zabytków znajdujących się na terenie wsi Turzno.
                <br/>
                2. Otaczanie bezpośrednią opieką w/w zbytków oraz realizowanie bądź inicjowanie wykonania prac konserwatorskich w uzgodnieniu ich z Wojewódzkim Konserwatorem Zabytków w Toruniu oraz prawnymi właścicielami gruntów i zabudowań, na których te obiekty się znajdują.
                <br/>
                3. Informowanie społeczeństwa o stanie w/w obiektów zabytkowych, a także o podjętych przez Komitet działaniach zmierzających do ich zabezpieczenia, zrewitalizowania oraz promowania ich wartości historycznej i kulturowej.
                <br/>
                4. Współpracę z instytucjami naukowymi, kulturalnymi i kościelnymi.
                <br/>
                5. Współpracę z odpowiednimi instytucjami i stowarzyszeniami polskimi, a także zagranicznymi.
                <br/>
                6. Prowadzenie komunikacji w Social Mediach.
                <br/>
                7. Organizację cyklicznych imprez zrzeszających historyków oraz twórców kultury i sztuki, pobudzających do tworzenia pozytywnej aury wokół lokalnych przyrodniczych i zabytkowych dóbr dziedzictwa narodowego w Turznie o znaczeniu uniwersalnym także w skali globalnej.
                <br/>
                8. Wydawanie publikacji promujących miejscowość w sposób merytoryczny, a zarazem artystyczny
            </p>
            <p class="deklaracjaP">
                Najwyższą władzą Komitetu jest Prezes Komitetu dr Katarzyna Pawłowska. Prezes oraz członkowie pełnią swoje funkcje honorowo. Członkowie dzielą się na: zwyczajnych, wspierających i honorowych. Akt założycielski Komitetu, w dniu 6 października 2020 roku w Turznie - został podpisany przez Katarzynę Pawłowską, Bogusławę Grzelak i Monikę Ralcewicz-Ciaiolo.
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

<!--                <h3 class="galeriaTitle">-->
<!--                    --><?php //echo the_title(); ?>
<!--                </h3>-->
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

        <iframe src="https://www.youtube.com/embed/4n3wsqG7CJU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe src="https://www.youtube.com/embed/0oHOXjHnoHE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe src="https://www.youtube.com/embed/N8d-7Em0z74" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<!-- TIKTOK -->
<!--<section class="tiktokSection">-->
<!--    <h2 class="sectionTitle">-->
<!--        Jesteśmy też na TikToku!-->
<!--    </h2>-->
<!--    <div class="tiktokContainer">-->
<!--        --><?php
//            include 'page-tiktok.php';
//        ?>
<!--    </div>-->
<!--</section>-->

<!-- INSTAGRAM -->
    <section class="tiktokSection">
        <h2 class="sectionTitle">
            Jesteśmy też na Instagramie!
        </h2>
        <div class="tiktokContainer instagramContainer">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CFEpXphpthz/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CFEpXphpthz/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Wyświetl ten post na Instagramie.</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CFEpXphpthz/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Post udostępniony przez Katarzyna Pawłowska (@vintistyle)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CFEplSipDWT/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CFEplSipDWT/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Wyświetl ten post na Instagramie.</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CFEplSipDWT/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Post udostępniony przez Katarzyna Pawłowska (@vintistyle)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CFEq9yiJwGi/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CFEq9yiJwGi/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Wyświetl ten post na Instagramie.</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CFEq9yiJwGi/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Post udostępniony przez Katarzyna Pawłowska (@vintistyle)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CFErlvgpjza/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CFErlvgpjza/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Wyświetl ten post na Instagramie.</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CFErlvgpjza/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Post udostępniony przez Katarzyna Pawłowska (@vintistyle)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CFEscEWpNMw/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CFEscEWpNMw/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Wyświetl ten post na Instagramie.</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CFEscEWpNMw/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Post udostępniony przez Katarzyna Pawłowska (@vintistyle)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CFEs4S4pyFz/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CFEs4S4pyFz/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Wyświetl ten post na Instagramie.</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CFEs4S4pyFz/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Post udostępniony przez Katarzyna Pawłowska (@vintistyle)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
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
        <b>Komitet ds. Rewitalizacji i Promocji Alei Dębowo-Lipowej im. Felicji Gajewskiej na Smaruju w Turznie oraz Innych Zabytków Turznieńskich</b> ma zaszczyt mieć w swoim gronie CZŁONKÓW HONOROWYCH. Są to osoby, które wnoszą szczególny wkład do prac na rzecz rewitalizacji i promocji naszego lokalnego - przyrodniczego i zabytkowego dziedzictwa narodowego o znaczeniu uniwersalnym. Rola członków honorowych wykracza daleko poza granice finansowe, czasowe oraz merytoryczne. Członkowie honorowi to swoiści AMBASADORZY naszej przepięknej miejscowości o przebogatej historii, kulturze i tradycji, jaką jest TURZNO. Możemy się poszczycić również dwiema, jedynymi w swoim rodzaju enklawami przyrody – parkiem w stylu angielskim przy Pałacu Romantycznym oraz Aleją Dębowo-Lipową im. Felicji Gajewskiej na Smaruju
    </p>
    <div class="komitetHonorowyContainer">
        <?php

        $komitetQuery = new WP_Query(array(
                'post_type' => 'komitet_honorowy'
        ));

        if($komitetQuery->have_posts()) {
            while($komitetQuery->have_posts()) {
                $komitetQuery->the_post(); ?>

                <div class="komitetHonorowyItem">
                    <h3 class="name">
                        <?php echo get_field('imie_i_nazwisko'); ?>
                    </h3>
                    <p class="description">
                        <?php echo get_field('opis'); ?>
                    </p>
                </div>

                    <?php
            }
        }
        ?>
    </div>
</section>

<!-- SPONSORZY SPOLECZNI -->
<section class="sponsorzySpoleczni">
    <span id="sponsorzySpoleczni"></span>
    <h2 class="sectionTitle">
        Sponsorzy społeczni
    </h2>
    <p class="sectionIntro">
        <b>Komitet ds. Rewitalizacji i Promocji Alei Dębowo-Lipowej im. Felicji Gajewskiej na Smaruju w Turznie oraz Innych Zabytków Turznieńskich</b> ma zaszczyt podziękować za okazane wsparcie finansowe następującym <b>Sponsorom Społecznym</b>, bez których dobrego serca i otwartego portfela nasze szlachetne inwestycje nie mogłyby być z powodzeniem zrealizowane. Dziękujemy serdecznie! </p>
    <div class="sponsorzySpoleczniContainer">
        <?php

        $sponsorzyQuery = new WP_Query(array(
           'post_type' => 'sponsorzy_spoleczni',
            'posts_per_page' => 9
        ));

        if($sponsorzyQuery->have_posts()) {
            while($sponsorzyQuery->have_posts()) {
                $sponsorzyQuery->the_post(); ?>
                <div class="sponsorzySpoleczniItem">
                    <a class="sponsorzyLink" href="<?php echo get_field("link_do_strony_sponsora"); ?>" target="_blank" rel="noreferrer"></a>
                    <img src="<?php echo get_field('logo_sponsora'); ?>" alt="turzno-logo-sponsora" />
                    <div class="overlay">
                        <h3 class="sponsorName">
                            <?php echo get_field("nazwa_sponsora"); ?>
                        </h3>
                    </div>
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