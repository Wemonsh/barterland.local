@extends('web.layouts.main')

@section('content')
    <section id="main">

        <div class="content">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/carousel/wow.png" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Покупайте у игроков</h1>
                            <p>Площадка для покупки и продажи игровой атрибутики,<br> аккаунтов и услуг</p>
                            <a href="#" class="button">Создать аккаунт</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/carousel/wow.png" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Покупайте у игроков</h1>
                            <p>Площадка для покупки и продажи игровой атрибутики,<br> аккаунтов и услуг</p>
                            <a href="#" class="button">Создать аккаунт</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/carousel/wow.png" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Покупайте у игроков</h1>
                            <p>Площадка для покупки и продажи игровой атрибутики,<br> аккаунтов и услуг</p>
                            <a href="#" class="button">Создать аккаунт</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                   data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                   data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="carousel-search">
                    <form action="#" class="search-block">
                        <input type="text" class="search-input" placeholder="Поиск">
                    </form>
                </div>
            </div>

            <div class="row no-gutters group_game">


                @foreach($games as $game)
                    <div class="col-md-4">
                        <div class="game_card">
                            <img class="preview" src="{{ '/frontend/'.$game->preview_image }}" alt="">
                            <div class="card_content">
                                <h2 class="title">{{ $game->name }}</h2>
                                <span class="offers">10 предложений</span>
                                <ul class="breads">
                                    @foreach($game->services as $service)
                                        <a href="#" class="bread-item">{{ $service->name }}</a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <div class="reviews">
                <h2>Отзывы</h2>
                <div class="slider">
                    <div class="card">
                        <div class="card-body">
                            <ul class="links">
                                <li class="link">
                                    <a href="#">Aion</a>
                                </li>
                                <li class="link">
                                    <a href="#">Аккаунты</a>
                                </li>
                            </ul>
                            <span class="date"><i class="far fa-calendar-alt"></i> 22 марта 2017</span>
                            <h5 class="card-title">Wemonsh</h5>
                            <p class="card-text">Далеко-далеко за словесными горами в стране гласных и согласных
                                живут
                                рыбные тексты. Последний реторический свое, мир своих букв его предложения.
                                Курсивных,
                                все знаках. Своего щеке маленький заглавных имени образ необходимыми она
                                большой?</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <ul class="links">
                                <li class="link">
                                    <a href="#">Aion</a>
                                </li>
                                <li class="link">
                                    <a href="#">Аккаунты</a>
                                </li>
                            </ul>
                            <span class="date"><i class="far fa-calendar-alt"></i> 22 марта 2017</span>
                            <h5 class="card-title">Wemonsh</h5>
                            <p class="card-text">Далеко-далеко за словесными горами в стране гласных и согласных
                                живут
                                рыбные тексты. Последний реторический свое, мир своих букв его предложения.
                                Курсивных,
                                все знаках. Своего щеке маленький заглавных имени образ необходимыми она
                                большой?</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <ul class="links">
                                <li class="link">
                                    <a href="#">Aion</a>
                                </li>
                                <li class="link">
                                    <a href="#">Аккаунты</a>
                                </li>
                            </ul>
                            <span class="date"><i class="far fa-calendar-alt"></i> 22 марта 2017</span>
                            <h5 class="card-title">Wemonsh</h5>
                            <p class="card-text">Далеко-далеко за словесными горами в стране гласных и согласных
                                живут
                                рыбные тексты. Последний реторический свое, мир своих букв его предложения.
                                Курсивных,
                                все знаках. Своего щеке маленький заглавных имени образ необходимыми она
                                большой?</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <ul class="links">
                                <li class="link">
                                    <a href="#">Aion</a>
                                </li>
                                <li class="link">
                                    <a href="#">Аккаунты</a>
                                </li>
                            </ul>
                            <span class="date"><i class="far fa-calendar-alt"></i> 22 марта 2017</span>
                            <h5 class="card-title">Wemonsh</h5>
                            <p class="card-text">Далеко-далеко за словесными горами в стране гласных и согласных
                                живут
                                рыбные тексты. Последний реторический свое, мир своих букв его предложения.
                                Курсивных,
                                все знаках. Своего щеке маленький заглавных имени образ необходимыми она
                                большой?</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <div class="sidebar">
            <a href="#" class="menu-btn"><img src="{{ asset('frontend/img/burger.png') }}" alt=""></a>
            <div id="app" class="chat">
                <h2>Общий чат</h2>
                <div class="messages">
                    <div class="message">
                        <div class="header">
                            <div class="row">
                                <div class="col-8">
                                    <img src="img/avatar.png" alt=""> <a href="#" class="author">wemonsh</a>
                                </div>
                                <div class="col-4">
                                    <span class="time">12:22</span>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p>Куплю аккаунт стим (дешевенький) главное, чтобы не было ограничения на обмен и на
                                торговую площадку, со стим аутентификатором.</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="header">
                            <div class="row">
                                <div class="col-8">
                                    <img src="img/avatar.png" alt=""> <a href="#" class="author">wemonsh</a>
                                </div>
                                <div class="col-4">
                                    <span class="time">12:22</span>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p>Куплю аккаунт стим (дешевенький) главное, чтобы не было ограничения на обмен и на
                                торговую площадку, со стим аутентификатором.</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="header">
                            <div class="row">
                                <div class="col-8">
                                    <img src="img/avatar.png" alt=""> <a href="#" class="author">wemonsh</a>
                                </div>
                                <div class="col-4">
                                    <span class="time">12:22</span>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p>Куплю аккаунт стим (дешевенький) главное, чтобы не было ограничения на обмен и на
                                торговую площадку, со стим аутентификатором.</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="header">
                            <div class="row">
                                <div class="col-8">
                                    <img src="img/avatar.png" alt=""> <a href="#" class="author">wemonsh</a>
                                </div>
                                <div class="col-4">
                                    <span class="time">12:22</span>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p>Куплю аккаунт стим (дешевенький) главное, чтобы не было ограничения на обмен и на
                                торговую площадку, со стим аутентификатором.</p>
                        </div>
                    </div>
                </div>

                <form action="#">
                    <textarea name="" id="" cols="30" rows="3" disabled></textarea>
                    <span> <img src="/img/info.png" alt=""> Продажа в чате
								запрещена</span><button>Отправить</button>
                </form>

            </div>
        </div>

    </section>
@endsection
