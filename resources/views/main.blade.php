@extends('layouts.app')

@section('content')
    {{--    Главная страница со слайдером--}}
    <link rel="stylesheet" href="../css/style.scss">
    {{--    Главная страница со слайдером--}}
    <link rel="stylesheet" href="../css/style.css">
    <main>
        <div>
            <span>следуй</span>
            <h1>Тайм-менеджмент</h1>
            <hr>
            <p> «Более короткий способ сделать много дел — делать только одно за раз»
            </p>
            <br>
            <p>Вольфганг Амадей Моцарт </p>
            <a href="#">установить</a>
        </div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/slide1.jpg" class="d-block w-75" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="../img/scott-graham-5fNmWej4tAA-unsplash.jpg" class="d-block w-75" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/slide3.jpg" class="d-block w-75" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>

    </main>
@endsection


