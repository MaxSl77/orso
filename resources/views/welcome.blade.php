    @extends('layout.app')

@section('title', 'Главная')

@section('content')
    <body class="antialiased">
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
                            <a href="#special">Специальное предложение</a>
                            <a href="#gifts">Подарочные сертификаты</a>
                            <a href="#specialists">Специалисты</a>
                            <a href="#services">Услуги</a>
                        </div>
                        <div class="menu__blank"></div>
                    </nav>
                </div>
            </header>


            <div class="contacts">
                <div class="contacts__inner">
                    <div class="contacts__inner-items">
                        <img src="./assets/location.png" alt="" class="item__image">
                        <a href="" class="item__content">г. Минск ул. Николы Теслы 1</a>
                    </div>
                    <div class="contacts__inner-items">
                        <img src="./assets/phone.png" alt="" class="item__image">
                        <a href="" class="item__content">+375 44 740 00 71</a>
                    </div>
                    <div class="contacts__inner-items">
                        <img src="./assets/instagram.png" alt="" class="item__image">
                        <a href="https://www.instagram.com/orsomed.by?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                           target="_blank" class="item__content">orsomed.by</a>
                    </div>
                </div>
            </div>


            <div class="background-section">
                <div class="background-section__content">
                    <div class="name">
                        <img src="./assets/logo_row.png" alt="" class="name__logo">
                        <img src="" alt="" class="name__clinic" />
                    </div>
                    <div class="medical-centre">
                        Медицинский Центр
                    </div>
                    <div class="directions">
                        <div class="directions__item">косметология</div>
                        <span class="directions__bullet"></span>
                        <div class="directions__item">пластическая хирургия</div>
                        <span class="directions__bullet"></span>
                        <div class="directions__item">онкология</div>
                    </div>
                    <div class="slogan">
                        Мы заботимся о Вашей красоте и здоровье!
                    </div>
                </div>
            </div>

            <div class="info">
                <div class="info__rows">
                    <div class="info__block-first">
                        <img src="./assets/logo_row-removebg-preview.png" class="info__block-logo">
                        <div class="info__block-text_black">Рады предложить Вам широкий спектр услуг по ряду направлений:
                            косметология,
                            пластическая хирургия, онкология, медицинские анализы.</div>
                        <br />
                        <div class="info__block-text_black">Оборудование в медицинском центре отвечает современным
                            стандартам
                            безопасности
                            и эффективности.</div>
                        <button class="info__block-button">
                            <a href="{{route('equipment')}}">Подробнее</a>
                        </button>
                    </div>
                    <div class="info__block-second">
                        <div class="info__block-where">Где мы находимся?</div>
                        <div class="info__block-text_black">Связаться с нами можно по телефону:</div>
                        <br />
                        <div class="info__block-text_black">Мецинский центр расположился
                            по адресу <b>улица Николы Теслы 1</b>
                        </div>
                        <br />
                        <div class="info__block-link">
                            <img src="./assets/phone.png" alt="info_phone" class="info__link-img">
                            <a href="tel:+375447400071" class="info__link-link">+375 44 740 00 71</a>
                        </div>
                        <br />
                        <div class="info__block-text_black">Или в наших социальных сетях, где мы делимся самыми актуальными
                            новостями
                            из жизни центра:</div>
                        <br />
                        <div class="info__block-link">
                            <img src="./assets/instagram.png" alt="info_inst" class="info__link-img">
                            <a href="https://www.instagram.com/orsomed.by?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                               target="_blank" class="info__link-link">orsomed.by</a>
                        </div>
                    </div>
                </div>

                <div class="info__rows">
                    <div class="info__block-third">
                        <div class="title">Эффективность процедур</div>
                        <div class="info__block-text_white">Профессиональное оборудование и квалифицированные специалисты
                            обеспечат комфорт при проведении процедур и их высокую эффективность.</div>
                        <br />
                        <div class="info__block-text_white">Решившись на визит, будьте уверенны, что получите именно тот
                            результат, о котором Вы давно мечтали!</div>
                    </div>
                    <div class="info__block-fourth">
                        <div class="title">Наши специалисты</div>
                        <div class="info__block-text_white">Мы никогда не устанем повторять, что гордимся нашими врачами!
                        </div>
                        <br />
                        <div class="info__block-text_white">Высокий профессионализм, индивидуальный подход, постоянное
                            самосовершенствование - все эти слова как нельзя кстати характеризуют наших специалистов.</div>
                    </div>
                </div>
            </div>

            <div class="partnerships">
                <div class="title">
                    Партнёрские отношения
                </div>
                <div class="partnerships__content">
                    <div class="partnerships__content-item">
                        <img src="./assets/helix.png" alt="helix" class="logo">
                        <div class="content">
                            <div class="text">Комплексная экспертиза, конфиденциальность
                                и скорое получение результатов медицинских анализов обеспечивает наш партнер - медицинская
                                лаборатория Хеликс</div>
                        </div>
                    </div>
                    <div class="partnerships__content-item">
                        <img src="./assets/orso_clinic.png" alt="orso_clinic_partnerships" class="logo__centered">
                    </div>
                    <div class="partnerships__content-item">
                        <img src="./assets/helix.png" alt="caromed" class="logo">
                        <div class="content">
                            <div class="text">Мы являемся официальным партнером итальянского бренда косметики CAROMED</div>
                            <button class="button"><a href="#">Подробнее</a></button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="special" id="special">
                <div class="special__inner">
                    <div class="special__inner-title">Специальные предложения</div>
                    <div class="special__inner-desc">
                        В этом разделе всегда найдется
                        <p>
                            что-то особенное для Вас и Ваших близких
                        </p>
                    </div>
                </div>
                <div class="carousel">
                    @foreach($sales as $sale)
                    <div class="item">
                        <div class="item__col">
                            <img src="{{asset('/storage/'.$sale->thumbnail)}}" alt="" class="item__col-img">
                        </div>
                        <div class="item__col">
                            <div class="item__col-title">{{$sale->title}}</div>
                            <div class="item__col-button">{{$sale->appeal}}</div>
                            <div class="item__col-desc">{{$sale->description}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="carousel-arrows">
                    <button class="prev-arrow">&larr;</button>
                    <button class="next-arrow">&rarr;</button>
                </div>
            </div>

            <div class="gift" id="gifts">
                <div class="gift__inner">
                    <div class="gift__inner-col">
                        <div class="title">Подарочные Сертификаты</div>
                        <br />
                        <div class="desc">Идеальный подарок для Ваших близких!
                            Оформление сертификата возможно на любую сумму.</div>
                        <br />
                        <div class="desc">Подробную информацию Вам может предоставить администратор:</div>
                        <a href="tel:+375447400071" class="mobile">+375 44 740 00 71</a>
                        <img src="./assets/green_logo.png" alt="green_logo" class="logo">
                    </div>
                    <div class="gift__inner-col">
                        <img src="./assets/email.png" alt="gift_email" class="gift__img">
                    </div>
                </div>
            </div>

            <div class="specialists" id="specialists">
                <div class="specialists__inner">
                    <div class="specialists__inner-col">
                        <div class="button">Кем мы гордимся</div>
                        <div class="title">Наши специалисты</div>
                        <div class="desc__container">
                            <div class="decs">Врачи с большой буквы, в профессионализме которых Вы можете убедиться сами!</div>
                            <br />
                            <div class="decs">Они сочетают в себе удивительный личный талант и большой опыт практической работы
                            </div>
                            <br />
                            <div class="decs">Наши специалисты неустанны в самосовершенствовании, поэтому регулярно проходят
                                тематические стажировки и курсы повышения квалификации.</div>
                        </div>

                        <div class="all_container">
                            <button class="button">
                                <a href="{{route('stuff')}}">Подробнее</a>
                            </button>
                        </div>
                    </div>
                    <div class="specialists__inner-col">
                        <div class="gray">
                            <div class="person">
                                <img src="./assets/man.JPG" alt="Person 1">
                                <div class="person__info">
                                    <div class="person__info-name">Михаил</div>
                                    <div class="person__info-name">Павлович
                                    </div>
                                    <div class="person__info-name">
                                        Кудин</div>
                                    <div class="person__info-spec">Врач-пластический
                                        хирург</div>
                                    </img>
                                </div>
                            </div>
                            <div class="person">
                                <img src="./assets/IMG_4979.JPG" alt="Person 1">
                                <div class="person__info">
                                    <div class="person__info-name">Жанна</div>
                                    <div class="person__info-name">Владимировна
                                    </div>
                                    <div class="person__info-name">
                                        Кудина</div>
                                    <div class="person__info-spec">Врач-косметолог</div>
                                    </img>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="services" id="services">
                <div class="services__inner">
                    <div class="services__inner-title">Наши услуги</div>
                    <div class="accordion">
                        @foreach($procedureGroups as $groupName => $group)
                            <div class="accordion-section">
                                <button class="accordion-title">{{ $group->name }}</button>
                                <button class="accordion-state-btn"></button>
                                <div class="accordion-content">
                                    <table>
                                        <tr class="accordion-content-title">
                                            <td>Название процедуры</td>
                                            <td>Стоимость, бел.р.</td>
                                        </tr>
                                        @foreach($group->procedures as $procedure)
{{--                                            @if($procedure->group_id == $group->id)--}}
                                                <tr>
                                                    <td>{{ $procedure->name }}</td>
                                                    <td>{{ $procedure->price }}</td>
                                                </tr>
{{--                                            @endif--}}
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        @endforeach




                    </div>
                    <div class="disclaimer">
                        <div class="disclaimer__text">Цены, указанные на сайте, носят информативный характер и могут быть
                            изменены на дату оплаты.</div>
                        <div class="disclaimer__text">Ценовое предложение не является публичной офертой.</div>
                        <div class="disclaimer__text">Всю информацию необходимо уточнять у администратора по телефону</div>
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
                                    <img src="../../assets/instagram.png" alt="">
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
@endsection
