<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/zhanna.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <title>ORSO</title>
</head>


<body>
<header class="header">
    <div class="header__container">
        <button class="menu-btn" aria-label="Open Menu">
            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
                 aria-label="Open Menu" role="img">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
            </svg>
        </button>
        <div class="header__logo">
            <img class="header__logo-img" src="./assets/header_logo.png" alt="header_logo" />
        </div>
        <nav class="menu">
            <div class="menu__drawer">
                <button class="close-btn" aria-label="Close Menu">
                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
                         aria-label="Close Menu" role="img">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                        </path>
                    </svg>
                </button>
                <a href="{{route('stuff')}}">Назад</a>
            </div>
            <div class="menu__blank"></div>
        </nav>
    </div>
</header>

<div class="person">
    <div class="person__inner">
        <div class="person__inner-img">
            <img src="./assets/IMG_4979.jpg" alt="photo">
        </div>
        <div class="person__inner-info">
            <div class="person-name">Жанна Владимировна
                Кудина</div>
            <br />
            <div class="person-text">Врач-косметолог
                <p>первой квалификационной категории</p>
            </div>
            <br />
            <div class="person-text">
                <b>Стаж работы: </b>
                более 19 лет
            </div>
            <br />
            <div class="person-text">
                <b>Образование:</b>
            </div>
            <br />
            <div class="person-text">
                2006 год – Гродненский государственный медицинский университет
            </div>
            <br />
            <div class="person-text">
                2011 год – Очная клиническая ординатура по специальности «Дерматология»
            </div>
            <div class="person-socials">
                <img src="./assets/instagram.png" alt="personInst">
                <div class="person-nik">dr.kudina_zhanna</div>
            </div>
        </div>
    </div>
    <div class="person__stages">
        <div class="person__stages-title">
            Повышение квалификации и стажировки:
        </div>
        <div class="person__stages-text">2008 год – «Медицинские основы формирования здоровья»
        </div>
        <div class="person__stages-text">2011 год – «Частная косметология»
        </div>
        <div class="person__stages-text">2012 год – «Лазеры в хирургии»
        </div>
        <div class="person__stages-text">2013 год – «Лазерные технологии в косметологии и пластической хирургии»
        </div>
        <div class="person__stages-text">2013 год – «Аппаратная физиотерапия в косметологии»
        </div>
        <div class="person__stages-text">2015 год – Переподготовка по специальности «Косметология»
        </div>
        <div class="person__stages-text">2016 год – «Организация медицинской помощи населению»
        </div>
        <div class="person__stages-text">2016 год – Присвоена первая квалификационная категория
        </div>
        <div class="person__stages-text">2016 год – Присвоена первая квалификационная категория
        </div>
    </div>
    <div class="person__examples">
        <div class="person__examples-title">Примеры работ:</div>
        <div class="person__examples-ba">До & После</div>
        <div class="carousel">
            <div class="carousel__item">
                <div class="item">
                    <div class="item-first">
                        <div class="item__images">
                            <img src="./assets/IMG_9088.JPG" alt="rha-before">
                        </div>
                        <div class="item__text">
                            Коррекция губ (Teosyal RHA 3)
                        </div>
                    </div>
                    <div class="item-second">
                        <div class="item__images">
                            <img src="./assets/IMG_9107.JPG" alt="ph-before">
                        </div>
                        <div class="item__text">
                            Коррекция мимических морщин ботулиническим токсином типа А
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel__item">
                <div class="item">
                    <div class="item-first">
                        <div class="item__images">
                            <img src="./assets/IMG_9105.JPG" alt="rha-before">
                        </div>
                        <div class="item__text">
                            Коррекция носогубной складки (STYLAGE L)
                        </div>
                    </div>
                    <div class="item-second">
                        <div class="item__images">
                            <img src="./assets/IMG_9106.JPG" alt="ph-before">
                        </div>
                        <div class="item__text">
                            Коррекция губ (STYLAGE L)
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel__item">
                <div class="item">
                    <div class="item-first">
                        <div class="item__images">
                            <img src="./assets/IMG_9110.JPG" alt="rha-before">
                        </div>
                        <div class="item__text">
                            Коррекция губ (STYLAGE L)
                        </div>
                    </div>
                    <div class="item-second">
                        <div class="item__images">
                            <img src="./assets/IMG_9110.JPG" alt="ph-before">
                        </div>
                        <div class="item__text">
                            Коррекция губ (STYLAGE L)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-arrows">
        <button class="prev-arrow">&larr;</button>
        <button class="next-arrow">&rarr;</button>
    </div>
</div>
</div>


<div class="footer">
    <div class="footer__inner">
        <div class="footer__inner-row-first">
            <div class="green-rectangle">
                <img src="./assets/orso_clinic_white.png" alt="">
            </div>
            <div class="footer__inst">
                <div class="footer__inst-col"></div>
                <div class="footer__inst-col">
                    <div class="footer__inst-col__title"><b>Orso</b> в Instagram</div>
                    <br>
                    <div class="footer__inst-col__desc">Подписывайтесь, чтобы быть в курсе
                        последних новостей!</div>
                </div>
                <div class="footer__inst-col">
                    <div class="footer__inst-col__img">
                        <img src="./assets/instagram.png" alt="">
                    </div>
                    <div class="footer__inst-col__inst">
                        orsomed.by
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__inner-row">
            <div class="footer__inner-row-contacts">
                <div class="footer__col">
                    <div class="footer__col-content">
                        <div class="footer__col-content-bold">
                            ООО «ОрсоМед»
                        </div>
                        <br>
                        <div class="footer__col-content">
                            <p>Лицензия</p>
                            <p>№32240000079856</p>
                            <p>от 04.03.2024 г</p>
                        </div>
                        <br>
                        <div class="footer__col-content">
                            УНП 193587483
                        </div>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__col-content">
                        <div class="footer__col-content-bold">
                            Контакты:
                        </div>
                        <br>
                        <div class="footer__col-content">
                            +375 44 740 00 71
                        </div>
                        <br>
                        <div class="footer__col-content">
                            г. Минск, ул. Николы Теслы 1
                        </div>
                        <br>
                        <div class="footer__col-content">
                            orsomed@mail.ru
                        </div>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__col-content">
                        <div class="footer__col-content-bold">
                            режим работы:
                        </div>
                        <br>
                        <div class="shedule">
                            <div class="shedule_days">
                                <p>ПН</p>
                                <p>ВТ</p>
                                <p>СР</p>
                                <p>ЧТ</p>
                                <p>ПТ</p>
                                <p>СБ</p>
                                <p>ВС</p>
                            </div>
                            <div class="shedule_time">
                                <p>9:00-21:00</p>
                                <p>9:00-21:00</p>
                                <p>9:00-21:00</p>
                                <p>9:00-21:00</p>
                                <p>9:00-21:00</p>
                                <p>9:00-21:00</p>
                                <p>9:00-21:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="./styles/index.js"></script>
</body>

</html>
