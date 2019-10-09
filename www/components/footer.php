<footer>
    <div class="o-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="footer-top">
                        <a href="https://www.facebook.com/Jel%C3%ADnkov%C3%A1-Architekt-379877352809160/" target="_blank" class="a-link social"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <?php if($CURRENT_PAGE != "hp"){ ?>
                <div class="col-12">
                    <div class="footer-bottom">
                        <div class="copyright">
                            Copyright © <?=date("Y")?> Jelínková – Architekt, Všechna práva vyhrazena.
                        </div>
                        <div class="other-info">
                            Vlastníkem a provozovatelem internetových stránek jelinkova-architekt.cz je Ing. arch. Zdeňka Jelínková, IČ: 04158105.<br>
                            Vyrobilo <a href="http://studiogrim.cz" target="_blank">grim digital studio</a>.
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</footer>

<script src="<?=$js?>jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="<?=$js?>masonry.min.js" type="text/javascript"></script>
<script src="<?=$js?>simple-lightbox.min.js" type="text/javascript"></script>
<script src="<?=$js?>main.min.js?v=<?php echo ($DEV == false ? $version : date("U")); ?>" type="text/javascript"></script>
</body>
</html>