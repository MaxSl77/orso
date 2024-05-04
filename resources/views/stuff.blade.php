@extends('layout.app')

@section('title', 'Персонал')

@section('content')
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
                <a href="{{route('home')}}">Домой</a>
            </div>
            <div class="menu__blank"></div>
        </nav>
    </div>
</header>

<div class="stuff">
    <div class="stuff__content">
        <div class="stuff__content-title">Специалисты</div>
        <div class="stuff__content-items">
            <div class="stuff__content-items-item">
                <div class="stuff__right">
                    <div class="stuff__item-img">
                        <img src="./assets/IMG_4979.JPG" alt="Zhanna">
                    </div>
                    <div class="stuff__item-name-inner">
                        <div class="stuff__name">Жанна Владимировна Кудина</div>
                        <div class="stuff__direction">Врач-косметолог</div>
                    </div>
                </div>
                <div class="stuff__left">
                    <div class="stuff__item-experience">Стаж работы: 19 лет</div>
                    <button class="stuff__item-button">
                        <a href="{{route('zhanna')}}">Подробнее</a>
                    </button>
                </div>
            </div>

            <div class="stuff__content-items-item">
                <div class="stuff__right">
                    <div class="stuff__item-img">
                        <img src="./assets/man.JPG" alt="Mikhail">
                    </div>
                    <div class="stuff__item-name-inner">
                        <div class="stuff__name">Михаил Павлович Кудин</div>
                        <div class="stuff__direction">Пластический хирург</div>
                    </div>
                </div>
                <div class="stuff__left">
                    <div class="stuff__item-experience">Стаж работы: 15 лет</div>
                    <button class="stuff__item-button">
                        <a href="{{route('mikhail')}}">Подробнее</a>
                    </button>
                </div>
            </div>

            <div class="stuff__content-items-item">
                <div class="stuff__right">
                    <div class="stuff__item-img">
                        <img src="./assets/orso_clinic.png" alt="Olga">
                    </div>
                    <div class="stuff__item-name-inner">
                        <div class="stuff__name">Ольга Николаевна Ганусевич</div>
                        <div class="stuff__direction">Врач-онколог</div>
                    </div>
                </div>
                <div class="stuff__left">
                    <div class="stuff__item-experience">Стаж работы: 27 лет</div>
                    <button class="stuff__item-button">
                        <a href="{{route('olga')}}">Подробнее</a>
                    </button>
                </div>
            </div>


{{--            @foreach($stuff as $idStuff)--}}
{{--            <div class="stuff__content-items-item">--}}
{{--                <div class="stuff__right">--}}
{{--                    <div class="stuff__item-img">--}}
{{--                        <img src="{{asset('/storage/'.$idStuff->thumbnail)}}" alt="Zhanna">--}}
{{--                    </div>--}}
{{--                    <div class="stuff__item-name-inner">--}}
{{--                        <div class="stuff__name">{{$idStuff->name}}</div>--}}
{{--                        <div class="stuff__direction">{{$idStuff->profession}}</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="stuff__left">--}}
{{--                    <div class="stuff__item-experience">Стаж работы: {{$idStuff->experience}}</div>--}}
{{--                    <button class="stuff__item-button">--}}
{{--                        <a href="{{route('stuff.show', $idStuff->id)}}">Подробнее</a>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
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
@endsection
