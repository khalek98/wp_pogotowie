<?php
    get_header();
?>

<!-- First Page -->
    <div class="main">
        <div class="container">
            <section class="main-first">
                <div class="main-first__img">
                    <img src="<?php the_field('first_img', 22); ?>" alt="main img">
                </div>
                <div class="main-first__about">
                    <h1 class="main-first__about-title">POGOTOWIE HIGIENICZNE</h1>
                    <h3 class="main-first__about-descr">
                        to profesjonalna firma zajmująca się skutecznym i trwałym zwalczaniem karaluchów, mrówek, prusaków, komarów, os, pluskiew, kun, szczurów, myszy.
                    </h3>
                </div>
                <div class="main-first__info">
                    Prowadzimy prace dezynfekcyjne pomieszczeń, sprzątanie po zmarłych. Od niedawna wykonujemy również dezynfekcję pomieszczeń od wirusów SARS-COV 2. Ponadto Specjalizujemy się również w profesjonalnym praniu tapicerki meblowej i samochodowej, fotelików samochodowych, wózków dziecięcych, dywanów i wykładzin.
                </div>
            </section>
        
            <section class="main-second">
                <div class="main-second__wrapper">
                    <div class="main-second__left">
                        <h2 class="main-second__title">
                            Usługi wykonujemy stacjonarnie w domu klienta na terenie Warszawy i okolic
                        </h2>
                        <div class="main-second__items">
                            <div class="main-second__item">
                                <div class="main-second__icon">
                                    <img src="<?php echo bloginfo("template_url"); ?>/assets/icons/main/shield.svg" alt="shield">
                                </div>
                                <h3 class="main-second__descr">Zapewniamy konkurencyjne ceny w branży, jesteśmy firmą rzetelną, terminową i godną zaufania</h3>
                            </div>
                            <div class="main-second__item">
                                <div class="main-second__icon">
                                    <img src="<?php echo bloginfo("template_url"); ?>/assets/icons/main/sofa.svg" alt="sofa">
                                </div>
                                <h3 class="main-second__descr">Przestrzegamy zasad Dobrych Praktyk Produkcyjnych i Higienicznych (GMP, GHP) oraz HACCP</h3>
                            </div>
                            <div class="main-second__item">
                                <div class="main-second__icon">
                                    <img src="<?php echo bloginfo("template_url"); ?>/assets/icons/main/check_mark.svg" alt="check mark">
                                </div>
                                <h3 class="main-second__descr">Dokładamy wszelkich starań aby nasi klienci byli zadowoleni z dostarczonych usług.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="main-second__img">
                        <img src="<?php the_field('second_img', 22); ?>" alt="second img">
                    </div>
                </div>
            </section>
        </div>
    </div>

<?php
    get_footer();
?>