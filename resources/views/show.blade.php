{{--@extends('layout.app')--}}

{{--@section('title', $idStuff->title)--}}

{{--@section('content')--}}
{{--    <header class="header">--}}
{{--        <div class="header__container">--}}
{{--            <button class="menu-btn" aria-label="Open Menu">--}}
{{--                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"--}}
{{--                     aria-label="Open Menu" role="img">--}}
{{--                    <path d="M0 0h24v24H0z" fill="none"></path>--}}
{{--                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--            <div class="header__logo">--}}
{{--                <img class="header__logo-img" src="/assets/header_logo.png" alt="header_logo" />--}}
{{--            </div>--}}
{{--            <nav class="menu">--}}
{{--                <div class="menu__drawer">--}}
{{--                    <button class="close-btn" aria-label="Close Menu">--}}
{{--                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"--}}
{{--                             aria-label="Close Menu" role="img">--}}
{{--                            <path d="M0 0h24v24H0z" fill="none"></path>--}}
{{--                            <path--}}
{{--                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">--}}
{{--                            </path>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <a href="{{route('home')}}">Домой</a>--}}
{{--                </div>--}}
{{--                <div class="menu__blank"></div>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </header>--}}
{{--    <div class="person">--}}
{{--        <div class="person__inner">--}}
{{--            <div class="person__inner-img">--}}
{{--                <img src="{{asset('/storage/'.$idStuff->thumbnail)}}" alt="photo">--}}
{{--            </div>--}}
{{--            <div class="person__inner-info">--}}
{{--                <div class="person-name">{{$idStuff->name}}</div>--}}
{{--                <br />--}}
{{--                <div class="person-text">{{$idStuff->profession}}--}}
{{--                    <p>{{$idStuff->category}}</p>--}}
{{--                </div>--}}
{{--                <br />--}}
{{--                <div class="person-text">--}}
{{--                    <b>Стаж работы: </b>--}}
{{--                    {{$idStuff->experience}}--}}
{{--                </div>--}}
{{--                <br />--}}
{{--                <div class="person-text">--}}
{{--                    <b>Образование:</b>--}}
{{--                </div>--}}
{{--                <br />--}}
{{--                <div class="person-text">--}}
{{--                    {{$idStuff->year}} год – {{$idStuff->education}}--}}
{{--                </div>--}}
{{--                <br />--}}
{{--                <div class="person-socials">--}}
{{--                    <img class="person-socials__inst" src="/assets/instagram.png" alt="personInst">--}}
{{--                    <div class="person-nik">{{$idStuff->social}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="person__stages">--}}
{{--            <div class="person__stages-title">--}}
{{--                Повышение квалификации и стажировки:--}}
{{--            </div>--}}
{{--            <div class="person__stages-text">{{$idStuff->yearOfQualification}} год – {{$idStuff->qualification}}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="person__examples">--}}
{{--            <div class="person__examples-title">Примеры работ:</div>--}}
{{--            <div class="person__examples-ba">До & После</div>--}}
{{--            <div class="carousel">--}}
{{--                <div class="carousel__item">--}}
{{--                    <div class="item">--}}
{{--                        <div class="item-first">--}}
{{--                            <div class="item__images">--}}
{{--                                <img src="{{asset('/storage/'.$idStuff->thumbnailBefore)}}" alt="rha-before">--}}
{{--                            </div>--}}
{{--                            <div class="item__text">--}}
{{--                                {{$idStuff->descriptionBefore}}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item-second">--}}
{{--                            <div class="item__images">--}}
{{--                                <img src="{{asset('/storage/'.$idStuff->thumbnailAfter)}}" alt="ph-before">--}}
{{--                            </div>--}}
{{--                            <div class="item__text">--}}
{{--                                {{$idStuff->descriptionAfter}}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-arrows">--}}
{{--            <button class="prev-arrow">&larr;</button>--}}
{{--            <button class="next-arrow">&rarr;</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
