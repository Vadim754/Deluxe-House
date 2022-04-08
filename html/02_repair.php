<?php
include('./html-components/start.php');
?>

<!-- HEADER -->

<?php
include('./html-components/header.php')
?>


<main class="main">

    <!-- R-INTRO -->

    <section class="r-intro">
        <div class="container">
            <div class="r-intro__inner">
                <p class="r-intro__subtitle">Гарантия качества и соблюдения сроков!</p>
                <h1 class="r-intro__title">Ремонт квартир любой сложности</h1>
                <div class="r-intro__links">
                    <a class="r-intro__link" href="./01_main.php">Главная</a>
                    <a class="r-intro__link r-intro__link-active" href="#">/Ремонт</a>
                </div>
            </div>
        </div>
    </section>

    <!-- R-PROJECT -->

    <section class="r-project">
        <div class="container">
            <div class="r-project__inner">
                <h2 class="r-project__title">Более 900 успешных проектов</h2>
                <div class="r-project__devider"></div>

                <div class="r-project__grid-container">
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
                <div class="r-project__buttons">
                    <a class="r-project__button-link" href="#">
                        <button class="r-project__button" type="button">Жилые помещения</button>
                    </a>

                    <a class="r-project__button-link" href="#">
                        <button class="r-project__button" type="button">Коммерческие помещения</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PAY -->

    <section class="r-pay">
        <div class="container">
            <div class="r-pay__inner">
                <h2 class="r-pay__title">Порядок оплаты</h2>
                <div class="r-pay__content">
                    <div class="r-pay__parts">
                        <p class="r-pay__text-first" style="margin-bottom: 10px;">Грамотно составленный Договор на оказание даст Вам юридическую защищенность. Оплата производится поэтапно: </p>
                        <p class="r-pay__text"><span class="r-pay__procents">35% </span> от общей суммы - предоплата</p>
                        <p class="r-pay__text"><span class="r-pay__procents">35% </span> от общей суммы - после завершения черновых работ</p>
                        <p class="r-pay__text"><span class="r-pay__procents">30% </span> от общей суммы - после ввода объекта в эскплуатацию</p>
                    </div>
                    <div class="r-pay__info">
                        <p class="r-pay__description">Мы выполняем свои обязанности качественно, точно в указанные сроки и строго по согласованной заранее цене. На объекте производится технический надзор специалистом. Наши прорабы не только контролируют весь рабочий процесс, но и принимают в нём активное участие. Мы делаем ремонт "под ключ" с установкой дверей, вывозом мусора и уборкой помещения.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TERMS -->

    <section class="r-terms">
        <div class="container">
            <div class="r-terms__inner">
                <h2 class="r-terms__title">Сроки ремонта</h2>
                <div class="r-terms__categories">
                    <div class="r-terms__category">
                        <a class="r-terms__category-link" href="#">
                            <button class="r-terms__category-btn r-terms__category-btn-active" type="button">Ремонт с дизайном со стандартным ремонтом</button>
                        </a>
                        <a class="r-terms__category-link" href="./03_repair-terms.php">
                            <button class="r-terms__category-btn" type="button">Ремонт без дизайна с нестандартным ремонтом</button>
                        </a>
                    </div>
                </div>

                <div class="r-terms__container">
                    <div class="r-terms__col">
                        <p class="r-terms__col-title">Плошадь, м2</p>
                        <div class="r-terms__col-num">50-80</div>
                        <div class="r-terms__col-num">80-120</div>
                        <div class="r-terms__col-num">120-200</div>
                        <div class="r-terms__col-num">200+</div>
                    </div>

                    <div class="r-terms__col r-terms__col-dark">
                        <p class="r-terms__col-title">Черновая отделка</p>
                        <div class="r-terms__col-num">2 мес</div>
                        <div class="r-terms__col-num">2.5 мес</div>
                        <div class="r-terms__col-num">3 мес</div>
                        <div class="r-terms__col-num">3.5-5 мес</div>
                    </div>

                    <div class="r-terms__col">
                        <p class="r-terms__col-title">Предчистовая(улучшенная черновая)</p>
                        <div class="r-terms__col-num">1.5 мес</div>
                        <div class="r-terms__col-num">2 мес</div>
                        <div class="r-terms__col-num">2.5 мес</div>
                        <div class="r-terms__col-num">3-4 мес</div>
                    </div>
                    <div class="r-terms__col r-terms__col-dark">
                        <p class="r-terms__col-title">Вторичное жилье</p>
                        <div class="r-terms__col-num">3 мес</div>
                        <div class="r-terms__col-num">3.5 мес</div>
                        <div class="r-terms__col-num">4 мес</div>
                        <div class="r-terms__col-num">5-6 мес</div>
                    </div>
                </div>
                <div class="r-terms__buttons">
                    <a class="r-terms__button-link" href="#">
                        <button class="r-terms__button" type="button">О нас</button>
                    </a>
                    <a class="r-terms__button-link" href="#">
                        <button class="r-terms__button" type="button">Наши услуги</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICE -->

    <section class="r-price">
        <div class="container">
            <div class="r-price__inner">
                <h2 class="r-price__title">Линейка тарифов</h2>
                <div class="r-price__devider"></div>
                <div class="r-price__container">
                    <div class="r-price__card">
                        <div class="r-price__package">
                            <div class="r-price__package-subtitle">Пакет</div>
                            <h3 class="r-price__package-what">“LIGHT”</h3>
                        </div>
                        <p class="r-price__card-for">Для квартир с предчистовой и <br> улучшенной черновой отделкой</p>
                        <p class="r-price__card-cost"><span class="r-price__card-cost-strong"> 18 000 </span> тг/кв.м.</p>
                        <h5 class="r-price__card-title">Ремонт "под ключ" <br> подразумевает:</h5>
                        <div class="r-price__card-func">- Вырванивание поверхностей потолков и стен;</div>
                        <div class="r-price__card-func">- Заливка пола "Экопол";</div>
                        <div class="r-price__card-func">- Покраска стен и потолка;</div>
                        <div class="r-price__card-func"> - Укладка кафеля/керамогранита;</div>
                        <div class="r-price__card-func">- Монтаж лепнины потолочной;</div>
                        <div class="r-price__card-func">- Поклейка обоев;</div>
                        <div class="r-price__card-func">- Установка и монтаж оборудования;</div>
                        <div class="r-price__card-func">- Установка дверей;</div>
                        <div class="r-price__card-func">- Установка и монтаж розеток и выключателей;</div>
                        <div class="r-price__card-func">- Установка и монтаж приборов освещения;</div>
                        <div class="r-price__card-func">- Вывоз мусора;</div>
                        <div class="r-price__card-func">- Расчет расходуемых материалов;</div>
                        <div class="r-price__card-func">- Закуп/прием материалов;</div>
                        <div class="r-price__card-func">- Уборка помещения</div>

                        <div class="r-price__card-button">
                            <a class="r-price__card-btn-link" href="#">
                                <button class="r-price__card-btn" type="button">Заказать тариф</button>
                            </a>
                        </div>
                    </div>

                    <div class="r-price__card">
                        <div class="r-price__package">
                            <div class="r-price__package-subtitle">Пакет</div>
                            <h3 class="r-price__package-what">“STANDART”</h3>
                        </div>
                        <p class="r-price__card-for">Для квартир с предчистовой и улучшенной <br> черновой отделкой по проекту Дизайна</p>
                        <p class="r-price__card-cost"><span class="r-price__card-cost-strong"> 22 000 </span> тг/кв.м.</p>
                        <h5 class="r-price__card-title">Ремонт "под ключ" все, что входит в пакет услуг <br> "LIGHT", дополнительно:</h5>
                        <div class="r-price__card-func">- Вырванивание поверхностей потолков и стен;</div>
                        <div class="r-price__card-func">- Заливка пола "Экопол";</div>
                        <div class="r-price__card-func">- Покраска стен и потолка;</div>
                        <div class="r-price__card-func"> - Укладка кафеля/керамогранита;</div>
                        <div class="r-price__card-func">- Монтаж лепнины потолочной;</div>
                        <div class="r-price__card-func">- Поклейка обоев;</div>
                        <div class="r-price__card-func">- Установка и монтаж оборудования;</div>
                        <div class="r-price__card-func">- Установка дверей;</div>
                        <div class="r-price__card-func">- Установка и монтаж розеток и выключателей;</div>
                        <div class="r-price__card-func">- Установка и монтаж приборов освещения;</div>
                        <div class="r-price__card-func">- Вывоз мусора;</div>
                        <div class="r-price__card-func">- Расчет расходуемых материалов;</div>
                        <div class="r-price__card-func">- Закуп/прием материалов;</div>
                        <div class="r-price__card-func">- Уборка помещения</div>

                        <div class="r-price__card-button">
                            <a class="r-price__card-btn-link" href="#">
                                <button class="r-price__card-btn" type="button">Заказать тариф</button>
                            </a>
                        </div>
                    </div>

                    <div class="r-price__card">
                        <div class="r-price__package">
                            <div class="r-price__package-subtitle">Пакет</div>
                            <h3 class="r-price__package-what">“BUSINESS”</h3>
                        </div>
                        <p class="r-price__card-for">Для квартир/домов и коммерческих помещений с <br> черновой отделкой по проекту Дизайна интерьера</p>
                        <p class="r-price__card-cost"><span class="r-price__card-cost-strong"> 30 000 </span> тг/кв.м.</p>
                        <h5 class="r-price__card-title">Ремонт "под ключ" все, что входит в пакет услуг <br> "STANDART", дополнительно:</h5>
                        <div class="r-price__card-func">- Вырванивание поверхностей потолков и стен;</div>
                        <div class="r-price__card-func">- Заливка пола "Экопол";</div>
                        <div class="r-price__card-func">- Покраска стен и потолка;</div>
                        <div class="r-price__card-func"> - Укладка кафеля/керамогранита;</div>
                        <div class="r-price__card-func">- Монтаж лепнины потолочной;</div>
                        <div class="r-price__card-func">- Поклейка обоев;</div>
                        <div class="r-price__card-func">- Установка и монтаж оборудования;</div>
                        <div class="r-price__card-func">- Установка дверей;</div>
                        <div class="r-price__card-func">- Установка и монтаж розеток и выключателей;</div>
                        <div class="r-price__card-func">- Установка и монтаж приборов освещения;</div>
                        <div class="r-price__card-func">- Вывоз мусора;</div>
                        <div class="r-price__card-func">- Расчет расходуемых материалов;</div>
                        <div class="r-price__card-func">- Закуп/прием материалов;</div>
                        <div class="r-price__card-func">- Уборка помещения</div>

                        <div class="r-price__card-button">
                            <a class="r-price__card-btn-link" href="#">
                                <button class="r-price__card-btn" type="button">Заказать тариф</button>
                            </a>
                        </div>
                    </div>

                    <div class="r-price__card">
                        <div class="r-price__package">
                            <div class="r-price__package-subtitle">Пакет</div>
                            <h3 class="r-price__package-what">“VIP”</h3>
                        </div>
                        <p class="r-price__card-for">Для всех видов помещений с черновой отделкой совместно <br> с нашими услугами по ведению ремонта и дизайну интерьера</p>
                        <p class="r-price__card-cost"><span class="r-price__card-cost-strong"> 45 000 </span> тг/кв.м.</p>
                        <h5 class="r-price__card-title">Ремонт "под ключ" все, что входит в пакет услуг <br> "BUSINESS" дополнительно:</h5>
                        <div class="r-price__card-func">- Вырванивание поверхностей потолков и стен;</div>
                        <div class="r-price__card-func">- Заливка пола "Экопол";</div>
                        <div class="r-price__card-func">- Покраска стен и потолка;</div>
                        <div class="r-price__card-func"> - Укладка кафеля/керамогранита;</div>
                        <div class="r-price__card-func">- Монтаж лепнины потолочной;</div>
                        <div class="r-price__card-func">- Поклейка обоев;</div>
                        <div class="r-price__card-func">- Установка и монтаж оборудования;</div>
                        <div class="r-price__card-func">- Установка дверей;</div>
                        <div class="r-price__card-func">- Установка и монтаж розеток и выключателей;</div>
                        <div class="r-price__card-func">- Установка и монтаж приборов освещения;</div>
                        <div class="r-price__card-func">- Вывоз мусора;</div>
                        <div class="r-price__card-func">- Расчет расходуемых материалов;</div>
                        <div class="r-price__card-func">- Закуп/прием материалов;</div>
                        <div class="r-price__card-func">- Уборка помещения</div>

                        <div class="r-price__card-button">
                            <a class="r-price__card-btn-link" href="#">
                                <button class="r-price__card-btn" type="button">Заказать тариф</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!-- HOW WE WORK -->

    <section class="r-work">
        <div class="container">
            <div class="r-work__inner">
                <h2 class="r-work__title">Как мы работаем?</h2>
                <div class="r-work__devider"></div>
                <div class="r-work__content">
                    <div class="r-work__image">
                        <img class="r-work__img" src="../images/image1-min.png" alt="image">
                    </div>
                    <div class="r-work__text">
                        <p class="r-work__description">Студия дизайна DELUXE HOUSE уже более 10 лет выполняет услуги по ремонту и отделочным работам квартир, домов и коммерческих помещений.</p>
                        <p class="r-work__description">Мы ремонтируем квартиры, делаем отделку офисов, домов в Астане (Нур-Султане) на высоком профессиональном уровне и не затягиваем оговоренные сроки. Для нас очень важно сдавать в эксплуатацию качественно выполненные объекты, поэтому мы всегда стремимся к совершенству в ходе исполнения своих обязательств. В нашей команде только профессионалы высокого уровня квалификации. Мы делает тщательный отбор своих специалистов, для которых ответственность всегда стоит на первом месте. Перед началом ремонта мы всегда оговариваем сроки по каждому из этапов и предупреждаем о возможных проблемах после тщательного осмотра помещения нашими техническими специалистами.</p>
                        <p class="r-work__description">Накопив богатый опыт в работе с помещениями самого разного назначения и сложности, нам удалось сформировать очень сильную команду профессионалов самой высокой квалификации по ремонту и отделке.</p>
                        <p class="r-work__description">Менеджмент ведения всех этапов и бизнесс-процессов был нами хорошо выстроен и отточен. Если Вы цените свое пространство, время, нервы и бюджет, то Вы будете на верном пути, обращаясь в нашу компанию.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT WE OFFER -->

    <section class="r-offer">
        <div class="container">
            <div class="r-offer__inner">
                <div class="r-offer__block">
                    <img class="r-offer__block-image" src="../images/pencil.svg" alt="icon">
                    <h4 class="r-offer__block-title">Монтажные/Демонтажные и черновые работы</h4>
                    <ul class="r-offer__block-list">
                        <li class="r-offer__block-item"> - Осмотр помещения, расчет расходуемых материалов черновой отделки;</li>
                        <li class="r-offer__block-item"> - Демонтаж и монтаж перегородок снесенных;</li>
                        <li class="r-offer__block-item"> - Демонтаж/монтаж, изменение размеров проемов дверных;</li>
                        <li class="r-offer__block-item"> - Прокладка электрической проводки к выходам электрическим;</li>
                        <li class="r-offer__block-item"> - Монтажные работы коробов ГКЛ на стенах и потолках;</li>
                        <li class="r-offer__block-item">- Монтаж и вывод сантехнических сетей (трубы х/г воды, канализационные);</li>
                        <li class="r-offer__block-item"> - Подготовка поверхностей стен к чистовой отделке (нанесение на поверхность коробов ГКЛ, стен и перегородок слоев гипса, ротгипса и шпатлевки).</li>
                    </ul>
                </div>

                <div class="r-offer__block">
                    <img class="r-offer__block-image" src="../images/pencil.svg" alt="icon">
                    <h4 class="r-offer__block-title">Чистовая отделка</h4>
                    <ul class="r-offer__block-list">
                        <li class="r-offer__block-item"> - Осмотр помещения, расчет расходуемых материалов черновой отделки;</li>
                        <li class="r-offer__block-item"> - Демонтаж и монтаж перегородок снесенных;</li>
                        <li class="r-offer__block-item"> - Демонтаж/монтаж, изменение размеров проемов дверных;</li>
                        <li class="r-offer__block-item"> - Прокладка электрической проводки к выходам электрическим;</li>
                        <li class="r-offer__block-item"> - Монтажные работы коробов ГКЛ на стенах и потолках;</li>
                        <li class="r-offer__block-item">- Монтаж и вывод сантехнических сетей (трубы х/г воды, канализационные);</li>
                        <li class="r-offer__block-item"> - Подготовка поверхностей стен к чистовой отделке (нанесение на поверхность коробов ГКЛ, стен и перегородок слоев гипса, ротгипса и шпатлевки).</li>
                    </ul>
                </div>

                <div class="r-offer__block">
                    <img class="r-offer__block-image" src="../images/pencil.svg" alt="icon">
                    <h4 class="r-offer__block-title">Технический надзор</h4>
                    <ul class="r-offer__block-list">
                        <li class="r-offer__block-item"> - Осмотр помещения, расчет расходуемых материалов черновой отделки;</li>
                        <li class="r-offer__block-item"> - Демонтаж и монтаж перегородок снесенных;</li>
                        <li class="r-offer__block-item"> - Демонтаж/монтаж, изменение размеров проемов дверных;</li>
                        <li class="r-offer__block-item"> - Прокладка электрической проводки к выходам электрическим;</li>
                        <li class="r-offer__block-item"> - Монтажные работы коробов ГКЛ на стенах и потолках;</li>
                        <li class="r-offer__block-item">- Монтаж и вывод сантехнических сетей (трубы х/г воды, канализационные);</li>
                        <li class="r-offer__block-item"> - Подготовка поверхностей стен к чистовой отделке (нанесение на поверхность коробов ГКЛ, стен и перегородок слоев гипса, ротгипса и шпатлевки).</li>
                    </ul>
                </div>

                <div class="r-offer__block">
                    <img class="r-offer__block-image" src="../images/pencil.svg" alt="icon">
                    <h4 class="r-offer__block-title">Отделочные работы</h4>
                    <ul class="r-offer__block-list">
                        <li class="r-offer__block-item"> - Осмотр помещения, расчет расходуемых материалов черновой отделки;</li>
                        <li class="r-offer__block-item"> - Демонтаж и монтаж перегородок снесенных;</li>
                        <li class="r-offer__block-item"> - Демонтаж/монтаж, изменение размеров проемов дверных;</li>
                        <li class="r-offer__block-item"> - Прокладка электрической проводки к выходам электрическим;</li>
                        <li class="r-offer__block-item"> - Монтажные работы коробов ГКЛ на стенах и потолках;</li>
                        <li class="r-offer__block-item">- Монтаж и вывод сантехнических сетей (трубы х/г воды, канализационные);</li>
                        <li class="r-offer__block-item"> - Подготовка поверхностей стен к чистовой отделке (нанесение на поверхность коробов ГКЛ, стен и перегородок слоев гипса, ротгипса и шпатлевки).</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php
    include('./html-components/contacts.php');
    ?>
</main>



<!-- FOOTER -->

<?php
include('./html-components/footer.php')
?>


<?php
include('./html-components/close-base.php')
?>