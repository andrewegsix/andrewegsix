@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    {{--                    <div class="card-header">{{ __('Регистрация') }}</div>--}}

                    <center><img class="mb-4" src="../img/logo.png" alt="" width="112" height="112"></center>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="surname"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                           class="form-control @error('surname') is-invalid @enderror" name="surname"
                                           value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="patronymic"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Отчество') }}</label>

                                <div class="col-md-6">
                                    <input id="patronymic" type="text"
                                           class="form-control @error('patronymic') is-invalid @enderror"
                                           name="patronymic" value="{{ old('patronymic') }}" autocomplete="patronymic"
                                           autofocus>

                                    @error('patronymic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Логин') }}</label>

                                <div class="col-md-6">
                                    <input id="login" type="text"
                                           class="form-control @error('login') is-invalid @enderror" name="login"
                                           value="{{ old('login') }}" required autocomplete="login" autofocus>

                                    @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Повтор пароля') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-4">

                                </div>

                                {{--                                <div class="col-md-6">--}}
                                {{--                                    <div class="form-check">--}}
                                {{--                                        <input class="form-check-input" type="checkbox" value="" id="rules">--}}
                                {{--                                        <label class="form-check-label" for="rules">--}}
                                {{--                                            Согласен с правилами--}}
                                {{--                                        </label>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}


                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary"><span>Регистрация</span></button>
                                        {{--                                    <button type="submit" class="btn btn-primary">--}}
                                        {{--                                        {{ __('Регистрация') }}--}}
                                        {{--                                    </button>--}}
                                        <style>
                                            /* Кнопка "Регистрация" */
                                            .btn-primary {
                                                width: 130px;
                                                height: 40px;
                                                line-height: 42px;
                                                padding: 0;
                                                border: none;
                                                background: rgb(126, 64, 246, 1);
                                                background: linear-gradient(
                                                    rgba(126, 64, 246, 1),
                                                    rgba(80, 139, 252, 1));
                                            }

                                            .btn-primary:hover {
                                                color: #0d6efd;
                                                background: transparent;
                                                box-shadow: none;
                                            }

                                            .btn-primary:before,
                                            .btn-primary:after {
                                                content: '';
                                                position: absolute;
                                                top: 0;
                                                right: 0;
                                                height: 2px;
                                                width: 0;
                                                background: #7e40f6;
                                                box-shadow: -1px -1px 5px 0px #fff,
                                                7px 7px 20px 0px #0003,
                                                4px 4px 5px 0px #0002;
                                                transition: 400ms ease all;
                                            }

                                            .btn-primary:after {
                                                right: inherit;
                                                top: inherit;
                                                left: 0;
                                                bottom: 0;
                                            }

                                            .btn-primary:hover:before,
                                            .btn-primary:hover:after {
                                                width: 100%;
                                                transition: 800ms ease all;
                                            }

                                        </style>

                                        <style>
                                            /*@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');*/

                                            * {
                                                padding: 0;
                                                margin: 0;
                                                box-sizing: border-box;

                                            }

                                            body {
                                                background: linear-gradient(
                                                    to right,
                                                    rgba(126, 64, 246, 1),
                                                    rgba(80, 139, 252, 1)
                                                );
                                                font-family: 'Poppins', sans-serif;

                                            }

                                            form {
                                                border-radius: 50px;
                                                /*margin-top: 150px !important;*/
                                                /*width: 24% !important;*/
                                                background-color: white !important;
                                                padding: 10px;
                                            }

                                            .btn-primary {
                                                /*width: 100%;*/
                                                /*border: none;*/
                                                border-radius: 50px;
                                                background: linear-gradient(
                                                    to right,
                                                    rgba(126, 64, 246, 1),
                                                    rgba(80, 139, 252, 1)
                                                );

                                            }

                                            /*.form-control {*/
                                            /*    color: rgba(0, 0, 0, .87);*/
                                            /*    border-bottom-color: rgba(0, 0, 0, .42);*/
                                            /*    box-shadow: none !important;*/
                                            /*    border: none;*/
                                            /*    border-bottom: 1px solid;*/
                                            /*    border-radius: 4px 4px 0 0;*/
                                            /*}*/

                                            h4 {
                                                font-size: 2rem !important;
                                                font-weight: 700;
                                            }

                                            .form-label {
                                                font-weight: 800 !important;
                                            }

                                            @media only screen and (max-width: 600px) {
                                                form {
                                                    width: 100% !important;
                                                }
                                            }
                                        </style>
{{--                                        /* Кнопка "Регистрация" */--}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

