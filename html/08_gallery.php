<?php
include('../html/html-components/start.php');
?>

<?php
include('../html/html-components/header.php');
?>

<main class="main">
    <!-- G-INTRO -->

    <section class="g-intro">
        <div class="container">
            <div class="g-intro__inner">
                <h1 class="g-intro__title">Проект квартиры в ЖК "Арман"</h1>
                <p class="g-intro__text">Дизайн интерьера был выполнен в эклектичном стиле. На разработку проекта ушел 1 месяц , авторский надзор за проектом составлял период в 3 месяца. Основой концепции создания проекта было желание учесть множество таких факторов, как проживание в одной квартире членов семьи в 3 поколениях с самыми разными и противоречивыми пожеланиями. Проект был сдан "под ключ" - с полным подбором всех необходимых материалов, мебели и декора. Площадь проектируемого объекта - 230 кв.м.</p>
                <div class="g-intro__links">
                    <a class="g-intro__link" href="../html/01_main.php">Главная/</a>
                    <a class="g-intro__link" href="../html/02_repair.php">Ремонт/</a>
                    <a class="g-intro__link g-intro__link-active" href="#">Галерея</a>
                </div>
            </div>
        </div>
    </section>

    <!-- G-PROJECTS -->

    <section class="g-projects">
        <div class="container">
            <div class="g-projects__inner">
                <h2 class="g-projects__title">Галлерея проекта</h2>
                <div class="g-projects__devider"></div>
                <div class="g-projects__grid">
                    <?php
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    include('../html/html-components/project-card-gallery.php');
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    include('../html/html-components/contacts.php');
    ?>
</main>

<?php
include('../html/html-components/footer.php');
?>