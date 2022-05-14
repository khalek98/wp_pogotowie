<?php
/*
Template Name: About-Us
*/
?>

<?php
    get_header();
?>

<div class="about">
    <div class="container">
        <div class="about__block">
            <div class="about__left">
                <h1 class="about__title">O NAS</h1>
                <div class="about__descr">
                    <h2 class="about__subtitle">
                        POGOTOWIE HIGIENICZNE
                    </h2>
                    <div class="about__text">
                        To dynamicznie rozwijająca się firma, świadcząca kompleksowo usługi higieniczne na terenie Warszawy i okolic. Posiadamy kilkuletnie doświadczenie w  dezynsekcji, dezynfekcji, deratyzacji, sprzątaniu po zgonach, ozonowaniu pomieszczeń, czyszczeniu tapicerek, dywanów. Doświadczenie zdobywaliśmy na terenie Polski i Wielkiej Brytanii. Nasze kwalifikacje są potwierdzone certyfikatami oraz licznymi opiniami zadowolonych Klientów.
                    </div>
                </div>
            </div>
            <div class="about__img">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/aboutus.jpg" alt="o nas">
            </div>
        </div>

        <div class="about-info">
            <div class="about-info__block">
                <div class="about-info__icon"></div>
                <div class="about-info__descr">
                    Do każdego zlecenia podchodzimy profesjonalnie, spełniając przy tym indywidualne oczekiwania klientów. Stosujemy najwyższej jakości sprzęt oraz dobieramy odpowiednie technologie umożliwiające wykonanie usługi na najwyższym poziomie.
                </div>
            </div>
            <div class="about-info__block">
                <div class="about-info__icon"></div>
                <div class="about-info__descr">
                    Jesteśmy terminowi, rzetelni, elastyczni. Wykonujemy usługi nie zakłócając działalności Klienta. Pozwala to szybko rozwijać nam ofertę oraz realizować coraz bardziej skomplikowane zlecenia.
                </div>
            </div>
        </div>

        <div class="about__contactUs">
            Zapraszamy do kontaktu! W razie jakichkolwiek pytań – z przyjemnością na wszystkie odpowiemy!
        </div>
    </div>
</div>

<?php
    get_footer();
?>