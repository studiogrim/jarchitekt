<?php
$BODY_CLASS = "p-projekty t-default";
$CURRENT_PAGE = "projekty";

$TITLE = "Projekty";

include "./components/header.php";
?>

<main>
    <section>
        <div class="container">
            <div class="row no-gutters o-masonry">
                <div class="col-sm-6 col-lg-4 u-d-b grid-item">
                    <a class="m-tile no-grid" href="<?=$root?>projekt/byt-chodov">
                        <img src="<?=$img?>projekty/hp/obyvaci-pokoj.jpg" class="color" />
                        <img src="<?=$img?>projekty/hp/obyvaci-pokoj-bw.jpg" />
                        <div class="title">Byt Chodov</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 u-d-b grid-item">
                    <a class="m-tile no-grid" href="<?=$root?>projekt/herni-stena-housenka">
                        <img src="<?=$img?>projekty/hp/housenka.jpg" class="color" />
                        <img src="<?=$img?>projekty/hp/housenka-bw.jpg" />
                        <div class="title">Herní stěna Housenka</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 u-d-b grid-item">
                    <a class="m-tile no-grid" href="<?=$root?>projekt/rodinny-dum-s-vinarstvim">
                        <img src="<?=$img?>projekty/hp/vinarstvi.jpg" class="color" />
                        <img src="<?=$img?>projekty/hp/vinarstvi-bw.jpg" />
                        <div class="title">Rodinný dům s vinařstvím</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 u-d-b grid-item">
                    <a class="m-tile no-grid tile-03" href="<?=$root?>projekt/zasedaci-mistnost">
                        <img src="<?=$img?>projekty/hp/fenix.jpg" class="color" />
                        <img src="<?=$img?>projekty/hp/fenix-bw.jpg" />
                        <div class="title">Zasedací místnost</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 u-d-b grid-item">
                    <a class="m-tile no-grid" href="<?=$root?>projekt/materska-skola-trida-hribci">
                        <img src="<?=$img?>projekty/hp/skolka.jpg" class="color" />
                        <img src="<?=$img?>projekty/hp/skolka-bw.jpg" />
                        <div class="title">Mateřská škola třída Hříbci</div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 u-d-b grid-item">
                    <a class="m-tile no-grid" href="<?=$root?>projekt/areal-pro-poutniky">
                        <img src="<?=$img?>projekty/hp/projekt06.jpg" class="color" />
                        <img src="<?=$img?>projekty/hp/projekt06-bw.jpg" />
                        <div class="title">Areál pro poutníky</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include "./components/footer.php";
?>
