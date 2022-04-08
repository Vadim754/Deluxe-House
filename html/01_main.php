<?php

include('./html-components/start.php');
?>

<!-- CONTENT -->

<!-- HEADER -->

<?php
include('./html-components/header.php');
?>

<main class="main">

    <!-- INTRO -->

    <section class="intro">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title">Роскошный дизайн <br> интерьера в Нур-Султане</h1>
                <p class="intro__subtitle">Мы создаем уникальные проекты любой сложности <br> на высоком уровне качества!</p>
                <a class="intro__btn-link" href="#">
                    <button class="intro__btn" type="button">Расчет стоимости</button>
                </a>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->

    <section class="project">
        <div class="container">
            <div class="project__inner">
                <h2 class="project__title">Наши проекты</h2>
                <div class="project__devider"></div>
                <div class="project__grid-container">

                    <!-- CARD -->

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

                <a class="project__btn-link" href="#">
                    <button class="project__btn" type="button">Жилые помещения</button>
                </a>

                <a class="project__btn-link" href="#">
                    <button class="project__btn" type="button">Коммерческие помещения</button>
                </a>
            </div>
    </section>

    <!-- ABOUT US -->

    <section class="our">
        <div class="container">
            <div class="our__inner">
                <h2 class="our__title">Лучшие решения, актуальный <br> дизайн, непревзойденное качество <br> — все это о нашей студии</h2>
                <div class="our__devider"></div>
                <div class="our__container">
                    <div class="our__image">
                        <img class="our__img" src="../images/image1-min.png" alt="image">
                    </div>
                    <div class="our__content">
                        <p class="our__description">С 2011 года было нами было разработано уже множество успешных проектов. Мы проектируем подробные проекты дизайна интерьеров помещений любой сложности и не боимся сложных задач.
                            Дизайн-проект может включать в себя перепланировку, рабочие чертежи, 3D-визуализацию, а также дополнителнительные услуги: авторский надзор, подбор материалов, смету и другое на Ваше личное усмотрение.</p>
                        <p class="our__description">Мы работаем с помещениями любого типа и назначения: квартиры, коттедж, загородный дом, кафе или ресторан, офис, гостиница или бизнес-центр, бутик и многое другое.</p>
                        <p class="our__description">Мы не упустим ни один квадратный сантиметр, учтем все Ваши пожелания, добавим свои свежие идеи, познакомим с секретами интерьерных решений, скоординируем в ремонте и поможем создать в Вашем помещении утонченную роскошь!</p>
                        <div class="our__info">
                            <div class="our__info-block">
                                <span class="our__more">Более</span>
                                <span class="our__num">10</span>
                                <span class="our__skill">лет на <br> рынке</span>
                            </div>

                            <div class="our__info-block">
                                <span class="our__more">Более</span>
                                <span class="our__num">200</span>
                                <span class="our__skill">Успешных <br> проектов</span>
                            </div>

                            <div class="our__info-block">
                                <span class="our__more">Более</span>
                                <span class="our__num">300</span>
                                <span class="our__skill">Положительных <br> отзывов</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our__buttons">
                    <button class="our__btn" type="button">О нас</button>
                    <button class="our__btn" type="button">Наши услуги</button>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT WE DO -->

    <section class="do">
        <div class="container">
            <div class="do__inner">
                <div class="do__container">
                    <div class="do__image">
                        <img class="do__img" src="../images/magazine-min.png" alt="magazine">
                    </div>
                    <div class="do__content">
                        <p class="do__text-best">Мы всегда <span class="do__strong"> стремимся </span> к <span class="do__strong">совершенству </span> во всех деталях!</p>
                        <p class="do__text">Мы <span class="do__upper"> находимся</span> в Астане (Нур-Султане), но работаем во всех городах Казахстана как удаленно, так и с выездом на замер и авторский надзор.</p>
                        <p class="do__text">Нами уже были <span class="do__upper"> реализованы проекты </span> в г. Актау, Алматы, Павлодар, Шымкент, Жезказган, Караганды, Актобе, Тараз, Атырау и Петропавловск.</p>
                        <p class="do__text">Среди которых <span class="do__upper"> не только жилые дома </span> и квартиры, но коммерческие помещения: рестораны, кафе, лаунж-бары, сауна и SPA, гостиницы и другое.</p>
                    </div>
                </div>
                <div class="do__cards">
                    <div class="do__card">
                        <img class="do__card-img" src="../images/money-icon.svg" alt="icon">
                        <h5 class="do__card-title">Цена и качетво лучшее соотношение</h5>
                        <p class="do__card-text">Для получения наиболее оптимального результата, при этом не потеряв больших средств, мы грамотно распределяем бюджет Заказчика еще на стадии проектирования.При этом Вы не потеряете в качестве!</p>
                    </div>

                    <div class="do__card">
                        <img class="do__card-img" src="../images/human-icon.svg" alt="icon">
                        <h5 class="do__card-title">Контролируем и координируем</h5>
                        <p class="do__card-text">Рабочие не будут Вас донимать своими вопросами. Мы берем под свой авторский контроль работу отделочной бригады. В итоге Вы сэкономите кучу времени и получите полностью соответствующий проекту интерьер</p>
                    </div>

                    <div class="do__card">
                        <img class="do__card-img" src="../images/tidy-icon.svg" alt="icon">
                        <h5 class="do__card-title">Комплектуем и декорируем</h5>
                        <p class="do__card-text">Мы отлично знаем рынок отделочных материалов, поставщиков мебели, освещения и других предметов интерьера. Мы подберем Вам все в соответствии с Вашим бюджетом!</p>
                    </div>

                    <div class="do__card">
                        <img class="do__card-img" src="../images/stars-icon.svg" alt="icon">
                        <h5 class="do__card-title">Стильно и роскошно со вкусом</h5>
                        <p class="do__card-text">Мы разрабатываем стильные и неповторимые интерьеры с утонченной роскошью. Какой бы ни была задача, Вы всегда можете быть уверены, что наша работа Вас приятно удивит и очарует!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US -->

    <section class="about">
        <div class="container">
            <div class="about__flex-container">
                <div class="about__images">
                    <img class="about__img1" style="margin-right: 200px; margin-top: 100px" src="../images/work11-min.png" alt="image">
                    <img class="about__img2" src="../images/work3-min.png" alt="image">
                </div>
                <div class="about__content">
                    <h3 class="about__title">Экслюзивный <br> дизайн</h3>
                    <p class="about__text">Каждый проект дизайна интерьера разрабатывается нами индивидуально для каждого заказчика. Мы не повторяем свои проекты и стараемся каждый проект делать непохожими на другие. При разработке дизайна мы учитываем все пожелания своих клиентов и всегда рады предложить свежие идеи.</p>
                </div>
            </div>

            <div class="about__flex-container">
                <div class="about__content">
                    <h3 class="about__title">Профессиональный <br> подход</h3>
                    <p class="about__text">В нашей команде работают дипломированные специалисты с большим опытом. Нами было реализовано большое количество объектов, поэтому для нас основной ценностью является ответственный подход к своей работе. Мы тщательно следим за тенденциями на рынке и всегда в курсе всех новинок. Своих партнеров и подрядчиков мы всегда выбираем, исходя из их опыта и качества предоставляемых ими услуг.</p>
                </div>
                <div class="about__images">
                    <img class="about__img1" style="margin-left: 200px;" src="../images/work1-min.png" alt="image">
                    <img class="about__img2  about__img-left" src="../images/work4-min.png" alt="image">
                </div>
            </div>

            <div class="about__flex-container">
                <div class="about__images">
                    <img class="about__img1" style="margin-right: 200px;" src="../images/work7-min.png" alt="image">
                    <img class="about__img2" src="../images/work3-min.png" alt="image">
                </div>
                <div class="about__content">
                    <h3 class="about__title">Внимательное <br> исполнение</h3>
                    <p class="about__text">Команда опытных профессионалов хорошо знает, как провести авторский надзор, тщательно отслеживая каждый этап, м подобрать все необходимые материалы для того, что бы реализация объекта соответствовала проекту. А отличное знание рынка отделочных материалов, оборудования, мебели и декора помогут Вам сэкономить время, нервы, и пожалуй самое главное - Ваш бюджет!</p>
                </div>
            </div>

            <div class="about__flex-container">
                <div class="about__content">
                    <h3 class="about__title">Точный <br> расчет</h3>
                    <p class="about__text">В нашей команде работают дипломированные специалисты с большим опытом. Нами было реализовано большое количество объектов, поэтому для нас основной ценностью является ответственный подход к своей работе. Мы тщательно следим за тенденциями на рынке и всегда в курсе всех новинок. Своих партнеров и подрядчиков мы всегда выбираем, исходя из их опыта и качества предоставляемых ими услуг.</p>
                </div>
                <div class="about__images">
                    <img class="about__img1" style="margin-left: 200px;" src="../images/work1-min.png" alt="image">
                    <img class="about__img2  about__img-left" src="../images/work4-min.png" alt="image">
                </div>
            </div>

        </div>
    </section>

    <!-- INFO -->

    <section class="info">
        <div class="container">
            <div class="info__inner">
                <div class="info__block">
                    <h4 class="info__title">И так, Вам нужен дизайн, и Вы ищете исполнителя?</h4>
                    <p class="info__text">С развитием инновационных возможностей, люди все чаще начали проявлять желание обустроить свой дом по современным канонам. Сегодня в тренде интерьеры, которые гарантируют максимальный уровень комфорта. Изучая вопрос, где заказать дизайн интерьера в Астане (Нур-Султане), советуем обратить внимание на компанию <span class="info__strong"> «DELUXE HOUSE» </span>. Наши специалисты работают над проектами любой сложности и обязуются воплотить самые смелые пожелания в жизнь.</p>
                    <h4 class="info__title">Как заказать дизайн - проект?</h4>
                    <p class="info__text">С развитием инновационных возможностей, люди все чаще начали проявлять желание обустроить свой дом по современным канонам. Сегодня в тренде интерьеры, которые гарантируют максимальный уровень комфорта. Изучая вопрос, где заказать дизайн интерьера в Астане (Нур-Султане), советуем обратить внимание на компанию <span class="info__strong"> «DELUXE HOUSE» </span>. Наши специалисты работают над проектами любой сложности и обязуются воплотить самые смелые пожелания в жизнь.</p>
                </div>

                <div class="info__block">
                    <h4 class="info__title">Что подразумевает создание дизайна интерьера?</h4>
                    <p class="info__text">Оформление помещения — задача не из простых, поэтому им должен заниматься профессионал. Дизайн интерьера — это целая система, которая направлена на создание комфортного пространства. Он включает: Изучение особенностей планировки помещения. Оценивание приоритетов и пожеланий клиента. Согласование главных моментов, обсуждение ключевых аспектов по планировке или перепланировки здания. Разработка идеи и концепции создания интерьера. Могут предлагаться несколько модификаций на выбор для максимального соответствия запросам. Продумывание всех этих деталей сведет к минимуму возможность какой-либо ошибки. Тогда в реальности готовый интерьер будет выглядеть точно так же, как и изображен в проекте.</p>
                    <p class="info__text">Хозяевам не придется принимать другие решения, идти на уступки. Подробная разработка всех мелочей — залог успешного воплощения интерьера. Облагораживание мебелью. Здесь может быть несколько вариантов. Они обсуждаются, и выбирается наиболее оптимальный. При желании получить неповторимый интерьер, мебель может изготавливаться под заказ. Воплощение согласованного проекта в жизнь. Только мастер может превратить все эти составляющие в единую гармоничную картину, дарящую ощущение уюта и совершенства.</p>
                </div>

                <div class="info__block">
                    <h4 class="info__title">Что предлагают мастера?</h4>
                    <p class="info__text">Каждое помещение имеет зоны, где необходимо расставить акценты и места, которые не должны бросаться в глаза. «Обыграть» каждый уголок и увидеть готовую картинку помогут специалисты. Перепланировке. Есть желание получить уютную большую площадь или наоборот разделить помещение на несколько отдельных комнат? Легко! Увеличить кухню или ванную, сделать просторную квартиру-студию реально. Любое пожелание будет выполнено. Если помещение готово, а мебель к нему не сочетается — доверьтесь профессионалам. Они подберут самые подходящие предметы или изготовят по личным запросам уникальные вещи.</p>
                    <p class="info__text">Кроме этого, мы можем создать рабочие чертежи и провести визуализацию в формате 3Д для наглядности. Чтобы каждый этап был проведен качественно без отклонений от разработки, может устанавливаться авторский надзор и совершаться подбор необходимых материалов. Смета и другие пожелания по дизайну интерьеров выполняются по запросу. Мы не ограничиваемся квартирами и домами. Большой опыт позволяет брать в работу объекты большой площади — торговые центры, гостиницы, рестораны и развлекательные заведения.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STEPS -->

    <section class="steps">
        <div class="container">
            <div class="steps__grid">
                <div class="steps__grid-item">
                    <img class="steps__img" src="../images/pencil.svg" alt="image">
                    <h4 class="steps__title">Техническое задание</h4>
                    <p class="steps__text">Замеры помещений. Составление Технического Задания на проектирование. Заключение Договора на оказание услуг. Грамотно составленные документы помогут избежать многих недопониманий на всех этапах работ.</p>
                </div>

                <div class="steps__grid-item">
                    <img class="steps__img" src="../images/pencil.svg" alt="image">
                    <h4 class="steps__title">3D визуализация</h4>
                    <p class="steps__text">Или - Эскизный Проект. 3Д-визуализация разрабатывается на основе утвержденного плана с расстановкой мебели и Технического Задания на проектирование. Она помогает нам понять, какой мы хотим ремонт и комплектацию.</p>
                </div>

                <div class="steps__grid-item">
                    <img class="steps__img" src="../images/pencil.svg" alt="image">
                    <h4 class="steps__title">Чертежи</h4>
                    <p class="steps__text">Рабочий Проект со всеми схемами и чертежами - это инструкция не только для проведения строительных работ, он позволит рассчитать расход и стоимость материалов. Самый ответственный этап. Здесь важна точность.</p>
                </div>

                <div class="steps__grid-item">
                    <img class="steps__img" src="../images/pencil.svg" alt="image">
                    <h4 class="steps__title">Авторский надзор</h4>
                    <p class="steps__text">Авторский надзор - это координирование строительных работ для соответствия Проекту. Услуга авторского надзора позволяет избежать множество ошибок, а также интерактивно решить возникшие неполадки, которые могут быть обнаружены при ремонте</p>
                </div>

                <div class="steps__grid-item">
                    <img class="steps__img" src="../images/pencil.svg" alt="image">
                    <h4 class="steps__title">Подбор материалов</h4>
                    <p class="steps__text">Мы поможем выбрать материалы чистовой отделки, мебели и декора. Мы отлично знаем рынок, что позволит Вам сэкономить бюджет, при этом не теряя, и даже выигрывая в качестве! Мы предложим Вам альтернативные материалы, соответствующие Проекту и Вашему бюджету</p>
                </div>

                <div class="steps__grid-item">
                    <img class="steps__img" src="../images/pencil.svg" alt="image">
                    <h4 class="steps__title">Комплектация</h4>
                    <p class="steps__text">Дизайнеры нашей студии составят график снабжения материалами, встретят все материалы на объекте и проследят за тем, что бы все материалы, мебель или другие элементы интерьера были установлены на объекте в строгом соответствии с проектом!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR PARTNERS -->

    <section class="partner">
        <div class="container">
            <div class="partner__grid">
                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner1.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner2.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner1.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner2.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner1.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner2.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner1.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner2.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner1.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner2.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner1.png" alt="image">
                </div>

                <div class="partner__grid-item">
                    <img class="partner__img" src="../images/partner2.png" alt="image">
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTS -->

    <?php
    include('./html-components/contacts.php');
    ?>

</main>

<!-- FOOTER -->

<?php
include('./html-components/footer.php');
?>

<?php
include('./html-components/close-base.php');
?>