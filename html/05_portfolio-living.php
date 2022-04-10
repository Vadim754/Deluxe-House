<?php
include('./html-components/start.php');
?>

<?php
include('./html-components/header.php');
?>

<main class="main">
    <!-- PL-INTRO -->

    <section class="pl-intro">
        <div class="container">
            <div class="pl-intro__inner">
                <p class="pl-intro__text">Дизайн-студия DELUXE HOUSE предлагает услуги по созданию уникального интерьера Вашей квартиры, дома или коттеджа. Мы предоставляем услуги профессиональных дизайнеров для реализации проектов любой сложности и работаем со всеми направлениями в области дизайна интерьера. Обратившись к нам, Вы точно получите незабываемое удовольствие, продумывая все детали и планируя собственную квартиру или дом. Под руководством профессионалов , имеющих большой опыт в создании интерьеров жилых и общественных помещений Вы можете быть уверены, что результат Вас порадует</p>
                <div class="pl-intro__links">
                    <a class="pl-intro__link" href="../html/01_main.php">Главная/</a>
                    <a class="pl-intro__link" href="#">Портфолио/</a>
                    <a class="pl-intro__link pl-intro__link-active" href="#">Жилые помещения</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PL-WORKS -->

    <section class="pl-works">
        <div class="container">
            <div class="pl-works__inner">
                <h2 class="pl-works__title">Наши работы по дизайну интерьера квартир и домов</h2>
                <div class="pl-works__devider"></div>
                <div class="pl-works__grid">
                <?php
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                    include('./html-components/project-card.php');
                ?>
                </div>
                <div class="pl-works__button">
                    <a class="pl-works__link" href="../html/06_portfolio-commerce.php">
                        <button class="pl-works__btn" type="button">Коммерческие помещения</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
    include('../html/html-components/form.php');
    ?>

    <?php
    include('../html/html-components/contacts.php');
    ?>
</main>




<?php
include('./html-components/footer.php');
?>



<?php
include('./html-components/close-base.php');
?>