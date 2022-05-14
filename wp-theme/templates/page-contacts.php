<?php
/*
Template Name: Kontakt
*/
?>

<?php
    get_header();
?>

<div class="contacts">
    <div class="container">
        <div class="contacts__block">
            <div class="contacts__left">
                <h1 class="contacts__title">KONTAKT</h1>
                <div class="contacts__info">
                    Dane kontaktowe:
                    <br><br>
                    Pogotowie Higieniczne
                    <address>
                        <?php the_field('address', 20); ?>
                    </address>
                    <a href="mailto:<?php the_field('email', 20); ?>">
                        <?php the_field('email', 20); ?>
                    </a> <br>
                    <a href="tel:<?php the_field('phone-number', 20); ?>">
                        <?php the_field('phone-number', 20); ?>
                    </a>
                    <br><br>
                    Godziny otwarcia: <br>
                    <?php the_field('opening_hours', 20); ?>                       
                </div>
            </div>
            <div class="contacts__img">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/contscts.jpg" alt="contacts">
            </div>
        </div>

        <h2 class="contacts__subtitle">Formularz kontaktowy</h2>

        <form action="#" class="contacts__form">
            <input required id="email" type="email" name="email" placeholder="Email">
            <input  id="name" type="text" name="name" placeholder="Imię">
            <input  id="phone" type="text" name="phone" placeholder="Numer telefonu">
            <input  id="subject" type="text" name="subject" placeholder="Temat">
            <textarea id="textarea" name="textarea" placeholder="Treść wiadomości"></textarea>
            <button class="form__btn">Wyślij</button>
        </form>
    </div>
</div>

<?php
    get_footer();
?>