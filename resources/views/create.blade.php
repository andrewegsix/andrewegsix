@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../js/jquery-ui.min.css">
    <style>
        body {
            background: linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
            );
            font-family: 'Poppins', sans-serif;

        }

        /* Кнопка 5 */
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
    </style>

{{--    <div class="container">--}}
{{--        <h1>Add Date</h1>--}}
{{--        @if (session('success'))--}}
{{--            <div class="alert alert-success">{{ session('success') }}</div>--}}
{{--        @endif--}}
{{--        <form action="/dates" method="POST">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <label for="date">Date:</label>--}}
{{--                <input type="date" name="date" id="date" class="form-control">--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Add</button>--}}
{{--        </form>--}}
{{--    </div>--}}




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{--                    <div class="card-header">Task Manager</div>--}}

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Заголовок</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Описание</label>
                                <textarea name="description" class="form-control" cols="2" rows="2"></textarea>
                            </div>
                            {{--                            @error('start_date') @enderror--}}

                            {{--                            <input id="start_date" type="text" name="date"  class="form-control datepicker">--}}
                            <div class="mb-3">
                                <input id="start_date" type="text" class="form-control datepicker">
                            </div>


                            <button type="submit" class="btn btn-primary">Отправить</button>

                            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                            <script src="../js/jquery-ui.min.js"></script>
                            <script>
                                $(function () {
                                    $(".datepicker").datepicker();
                                });
                            </script>
                            <script src="{{ asset('js/app.js') }}" defer></script>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

