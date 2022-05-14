<?php
/*
Template Name: Kwalifikacje
*/
?>

<?php
    get_header();
?>

<section class="qual">
    <div class="container">
        <div class="qual__block">
            <div class="qual__img">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/qualifications/qualifications.jpg" alt="qualifications">
            </div>
            <div class="qual__info">
                <h1 class="qual__title">
                    POGOTOWIE HIGIENICZNE 
                </h1>
                <div class="qual__descr">
                    Stale dokształcamy się i przechodzimy regularne szkolenia zewnętrzne aby zapewnić Państwu pełen profesjonalizm 
                    i fachową obsługę.
                    <br><br>
                    Uzyskane przez nas certyfikaty są potwierdzeniem naszych kompetencji w dziedzinie wszystkich świadczonych 
                    przez nas usług.
                </div>
            </div>
        </div>

        <div class="sertificate">
            <div class="sertificate__wrapper">
                <div class="sertificate__angle sertificate__angle_left"></div>
                <div class="sertificate__angle sertificate__angle_right"></div>
                <div class="sertificate__items">

                    <?php
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'sertificates',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                                <div class="sertificate__img">
                                    <img src="<?php the_field('slider_sertificate'); ?>" alt="sertificate">
                                </div>
                            <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                    <!-- <div class="sertificate__img">
                        <img src="<?php echo bloginfo("template_url"); ?>/assets/img/qualifications/sertificate.jpg" alt="sertificate">
                    </div>
                    <div class="sertificate__img">
                        <img src="<?php echo bloginfo("template_url"); ?>/assets/img/qualifications/sertificate.jpg" alt="sertificate">
                    </div>
                    <div class="sertificate__img">
                        <img src="<?php echo bloginfo("template_url"); ?>/assets/img/qualifications/sertificate.jpg" alt="sertificate">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>