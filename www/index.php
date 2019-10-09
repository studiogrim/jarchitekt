<?php
$BODY_CLASS = "p-hp t-hp v2";
$CURRENT_PAGE = "hp";
include "./components/header.php";
?>

<main role="main">
    <section class="s-wall">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="o-wall">
                        <div class="wall-item item-p1">
                            <a class="m-tile hp-p1" href="<?=$root?>projekt/byt-chodov">
                                <div class="hover"></div>
                                <div class="title">Byt Chodov</div>
                            </a>
                        </div>
                        <div class="wall-item item-p2">
                            <a class="m-tile hp-p2" href="<?=$root?>projekt/herni-stena-housenka">
                                <div class="hover"></div>
                                <div class="title">Herní stěna Housenka</div>
                            </a>
                        </div>
                        <div class="wall-item item-p3">
                            <a class="m-tile hp-p3 bottom" href="<?=$root?>projekt/zasedaci-mistnost">
                                <div class="hover"></div>
                                <div class="title">Zasedací místnost</div>
                            </a>
                        </div>
                        <div class="wall-item item-logo">
                            <img src="<?=$img?>logo.svg" alt="JArchitekt logo" />
                        </div>
                        <div class="wall-item item-p4">
                            <a class="m-tile hp-p4" href="<?=$root?>projekt/areal-pro-poutniky">
                                <div class="hover"></div>
                                <div class="title">Areál pro poutníky</div>
                            </a>
                        </div>
                        <div class="wall-item item-p5">
                            <a class="m-tile hp-p5 bottom" href="<?=$root?>projekt/materska-skola-trida-hribci">
                                <div class="hover"></div>
                                <div class="title">Mateřská škola třída Hříbci</div>
                            </a>
                        </div>
                        <div class="wall-item item-p6">
                            <a class="m-tile hp-p6" href="<?=$root?>projekt/rodinny-dum-s-vinarstvim">
                                <div class="hover"></div>
                                <div class="title">Rodinný dům s vinařstvím</div>
                            </a>
                        </div>
                        <div class="wall-item item-more">
                            <a class="a-link fancy u-d-n" href="<?=$root?>projekty"><span class="u-d-n u-d-lg-i">zobrazit </span>další projekty</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include "./components/footer.php";
?>