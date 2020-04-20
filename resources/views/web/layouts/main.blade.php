<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">


</head>

<body>

<div id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="/img/logo.svg" height="35" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">О сервисе <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Правила сервиса <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Помощь <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Отзывы <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Рейтинг продавцов <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <div class=" my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#loginModal">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-border-wrap" data-toggle="modal"
                               data-target="#registerModal"><span>Зарегистрироваться</span></a>
                        </li>
                    </ul>
                    <!-- <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Мои заказы <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-comments"></i> Мои сообщения <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Семенов Олег <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="button-exit">Выйти</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>




    <main>
        @yield('content')
    </main>

    @include('web.components.footer')
</div>


<!-- Modals -->

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2>Регистрация</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Никнейм" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Пароль" name="password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Повтор пароля"
                               name="password_confirmation">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember">
                                Согласен с политикой конфиденциальности
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit">Создать аккаунт</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2>Войти</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Пароль" name="password">
                        <a href="#">Забыли пароль?</a>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember">
                                Запомнить меня
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit">Войти</button>
                    </div>
                    <a href="#">У вас нет аккаунта?</a>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('frontend/js/libs.min.js') }}"></script>
<script src="{{ asset('frontend/js/common.js') }}"></script>

</body>

</html>
