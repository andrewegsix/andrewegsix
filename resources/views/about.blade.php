@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="../css/style.css">


    <style>
        body {
            background: linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
            );
            font-family: 'Poppins', sans-serif;

        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
        }

        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        a,
        a:active,
        a:focus {
            color: #6f6f6f;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        section {
            padding: 60px 0;
            /* min-height: 100vh;*/
        }

        .sec-title {
            position: relative;
            z-index: 1;
            margin-bottom: 60px;
        }

        .sec-title .title {
            position: relative;
            display: block;
            font-size: 25px;
            line-height: 24px;
            color: #f24271;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .sec-title h2 {
            position: relative;
            display: block;
            font-size: 40px;
            line-height: 1.28em;
            color: #ffffff;
            font-weight: 600;
            padding-bottom: 18px;
        }

        .sec-title h2:before {
            position: absolute;
            content: '';
            left: 0px;
            bottom: 0px;
            width: 50px;
            height: 3px;
            background-color: #d1d2d6;
        }

        .sec-title .text {
            position: relative;
            font-size: 16px;
            line-height: 26px;
            color: #848484;
            font-weight: 400;
            margin-top: 35px;
        }

        .sec-title.light h2 {
            color: #ffffff;
        }

        .sec-title.text-center h2:before {
            left: 50%;
            margin-left: -25px;
        }

        .list-style-one {
            position: relative;
        }

        .list-style-one li {
            position: relative;
            font-size: 18px;
            line-height: 26px;
            color: #ffffff;
            font-weight: 400;
            padding-left: 35px;
            margin-bottom: 12px;
        }

        /*.list-style-one li:before {*/
        /*    content: "\f058";*/
        /*    position: absolute;*/
        /*    left: 0;*/
        /*    top: 0px;*/
        /*    display: block;*/
        /*    font-size: 18px;*/
        /*    padding: 0px;*/
        /*    color: #ff2222;*/
        /*    font-weight: 600;*/
        /*    -moz-font-smoothing: grayscale;*/
        /*    -webkit-font-smoothing: antialiased;*/
        /*    font-style: normal;*/
        /*    font-variant: normal;*/
        /*    text-rendering: auto;*/
        /*    line-height: 1.6;*/
        /*    font-family: "Font Awesome 5 Free";*/
        /*}*/

        .list-style-one li a:hover {
            color: #44bce2;
        }

        .btn-style-one {
            position: relative;
            display: inline-block;
            font-size: 17px;
            line-height: 30px;
            color: #ffffff;
            padding: 10px 30px;
            font-weight: 600;
            overflow: hidden;
            letter-spacing: 0.02em;
            background-color: rgb(203, 51, 51);
        }

        .btn-style-one:hover {
            background-color: rgba(126, 64, 246, 1);
            color: #ffffff;
        }

        .about-section {
            position: relative;
            padding: 120px 0 70px;
        }

        .about-section .sec-title {
            margin-bottom: 45px;
        }

        .about-section .content-column {
            position: relative;
            margin-bottom: 50px;
        }

        .about-section .content-column .inner-column {
            position: relative;
            padding-left: 30px;
        }

        .about-section .text {
            margin-bottom: 40px;
            font-size: 16px;
            line-height: 26px;
            color: #ffffff;
            font-weight: 400;
        }

        .about-section .list-style-one {
            margin-bottom: 45px;
        }

        .about-section .btn-box {
            position: relative;
        }

        .about-section .btn-box a {
            padding: 15px 50px;
        }

        .about-section .image-column {
            position: relative;
        }

        .about-section .image-column .text-layer {
            position: absolute;
            right: -110px;
            top: 50%;
            font-size: 325px;
            line-height: 1em;
            color: #ffffff;
            margin-top: -175px;
            font-weight: 500;
        }

        .about-section .image-column .inner-column {
            position: relative;
            padding-left: 120px;
            padding-bottom: 125px;
        }

        .about-section .image-column .inner-column:before {
            position: absolute;
            left: -75px;
            top: 65px;
            height: 520px;
            width: 520px;
            background-image: url(https://i.ibb.co/fxJ1jtC/about-circle-1.png);
            content: "";
        }

        .about-section .image-column .image-1 {
            position: relative;
        }

        .about-section .image-column .image-2 {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .about-section .image-column .image-2 img,
        .about-section .image-column .image-1 img {
            box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        }

        .about-section .image-column .video-link {
            position: absolute;
            left: 70px;
            top: 170px;
        }

        .about-section .image-column .video-link .link {
            position: relative;
            display: block;
            font-size: 22px;
            color: #191e34;
            font-weight: 400;
            text-align: center;
            height: 100px;
            width: 100px;
            line-height: 100px;
            background-color: #ffffff;
            border-radius: 50%;
            box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .about-section .image-column .video-link .link:hover {
            background-color: #191e34;
            color: #ffffff;
        }

        /*Подвал*/
        footer{
            position: absolute;
            left: 0;
            bottom: 0;
            /*position: relative;!*относительное позиционирование*!*/
            width: 100%;/*на всю ширину*/
            padding: 2px 2px;/*поля для контента*/
            background: #ffffff;/*цвет футера*/
            display: flex;
            justify-content: center;/*в центре по горизонтали*/
            align-items: center;/*в центре по вертикали*/
            flex-direction: column;
            margin-top: 5px;/*отступ сверху*/
        }

        .menu{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 5px 0;
            text-align: left;
            flex-wrap: wrap;/*разрешен перенос на новую строку*/
        }

        .menu li{
            text-align: left;
            list-style: none;/*удалить черные маркеры*/
        }

        .menu li a {
            font-size: 12px;/*размер ссылок меню*/
            color: black;;/*цвет ссылок меню*/
            opacity: 0.75;/*значение прозрачности*/
            margin: 0 15px;
            text-decoration: none;/*ссылка без подчеркивания*/
            display: inline-block;
            text-align: left;

        }
        .menu li a:hover {
            opacity: 1;
        }
        footer p {
            color: #000000FF;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .a left {
            color: #000000FF;
            text-align: left;
        }

        /*Подвал*/

    </style>


    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">О Нас</span>
                            <h2>Мы займёмся вашим <br>временем вместе с вами</h2>
                        </div>
                        <div class="text">Тайм-менеджмент – это эффективное планирование рабочего времени для достижения
                            целей, нахождение временных ресурсов, расстановка приоритетов и контроль выполнения
                            запланированного. Его основная задача — больше успевать в единицу времени и эффективно
                            расходовать собственные ресурсы.
                        </div>
                        <ul class="list-style-one">
                            {{--                                                        <li class="bi bi-check-circle-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">--}}
                            {{--                                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>--}}
                            {{--                                                            </svg> Создание списка дел</li>--}}
                            {{--                                                        <li class="bi bi-check-circle-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">--}}
                            {{--                                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>--}}
                            {{--                                                            </svg>Установка приоритетов </li>--}}
                            {{--                                                        <li class="bi bi-check-circle-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">--}}
                            {{--                                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>--}}
                            {{--                                                            </svg>Установка сроков</li>--}}
                        </ul>
                        <div class="btn-box">
                            <a href="{{route('main')}}" class="theme-btn btn-style-one">Перейти на главную страницу</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                    src="../img/scott-graham-5fNmWej4tAA-unsplash.jpg" alt=""></a></figure>
                        {{--                        <figure class="image-2"><a href="#" class="lightbox-image" data-fancybox="images"><img--}}
                        {{--                                    src="../img/slide2.jpg" alt=""></a></figure>--}}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
