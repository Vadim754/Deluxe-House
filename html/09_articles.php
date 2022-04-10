<?php
include('../html/html-components/start.php')
?>

<?php
include('../html/html-components/header.php')
?>
<main class="main">
    <!-- AR-INTRO -->

    <section class="ar-intro">
        <div class="container">
            <div class="ar-intro__inner">
                <p class="ar-intro__text">Давайте мы поможем разобраться в огромном разнообразии стилей в оформлении интерьеров. Мы расскажем об эклектичных стилях, которые часто граничат между двумя или даже несколькими стилями, порою даже между противоположными!</p>
                <div class="ar-intro__links">
                    <a class="ar-intro__link" href="../html/01_main.php">Главная/</a>
                    <a class="ar-intro__link ar-intro__link-active" href="#">Статьи</a>
                </div>
            </div>
        </div>
    </section>

    <!-- AR-ARTICLES -->
    
    <section class="ar-articles">
        <div class="container">
            <div class="ar-articles__inner">
                <div class="ar-articles__grid">
                    <?php
                    include('../html/html-components/article-component.php');
                    include('../html/html-components/article-component.php');
                    include('../html/html-components/article-component.php');
                    include('../html/html-components/article-component.php');
                    include('../html/html-components/article-component.php');
                    include('../html/html-components/article-component.php');
                    include('../html/html-components/article-component.php');
                    include('../html/html-components/article-component.php');
                    include('../html/html-components/article-component.php');
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    include('../html/html-components/contacts.php')
    ?>
</main>
<?php
include('../html/html-components/footer.php')
?>

<?php
include('../html/html-components/close-base.php')
?>