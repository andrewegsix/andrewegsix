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

        /*Подвал(футер)*/
        footer {
            background: #ffffff;
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 50px;
            flex: 0 0 auto;
            text-align: center;
            text: black;
            box-shadow: 0 4px 13px rgb(255, 255, 255);
            font-size: 16px;
        }
        /*Подвал(футер)*/
    </style>
    {{--    <div class="scroll">--}}
    {{--        <!-- Здесь будет контент, который будет прокручиваться -->--}}
    {{--        --}}
    {{--    </div>--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Вы вошли в систему, {{Auth::user()->login}} !
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="color: #0d6efd"> Copyright © 2023 Все права защищены</footer>

@endsection
