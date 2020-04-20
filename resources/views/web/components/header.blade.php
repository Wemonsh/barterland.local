<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">О сервисе <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ (Route::currentRouteName() == 'rules' ? 'active' : '') }}">
                    <a class="nav-link" href="{{ route('rules') }}">Правила сервиса <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ (Route::currentRouteName() == 'help' ? 'active' : '') }}">
                    <a class="nav-link" href="{{ route('help') }}">Помощь <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ (Route::currentRouteName() == 'reviews' ? 'active' : '') }}">
                    <a class="nav-link" href="{{ route('reviews') }}">Отзывы <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ (Route::currentRouteName() == 'rating' ? 'active' : '') }}">
                    <a class="nav-link" href="{{ route('rating') }}">Рейтинг продавцов <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class=" my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
