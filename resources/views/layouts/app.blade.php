<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <script src='https://npmcdn.com/@turf/turf/turf.min.js'></script>
    <title>Хакатон project</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#">Логотип</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route ('minigames') }}">Мини-игры</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Подробнее
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route ('top') }}">Топы по баллам</a>
                </li>
            </ul>
        </div>
        @if(Auth::check())
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                Выйти
            </x-dropdown-link>
        </form>
        @else
            <a class="btn btn-primary" href="{{ route ('login') }}">Войти</a>
        @endif
        @if(Auth::check ())
            <div class="d-flex">
                <span class="balance me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Баланс бонусов"><img class="i coin" src="{{ asset('assets/img/coin.svg') }}" width="20">{{ Auth::user()->balance  }}</span><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Скачать</button>
            </div>
        @endif
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</div>











<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Скачать приложение
                    <p class="subtext">Для начала поиска места переработки необходимо скачать приложение.</p>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="card">
                        <div class="d-flex justify-content-between flex-column">
                            <div class="d-flex align-items-center">
                                <img class="icon__card" src="assets/img/android.svg" width="80" style="margin-right: 50px;">
                                <div>
                                    <h5 class="card__header">Андроид приложение</h5>
                                    <p class="card__text">Для android</p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary mt-4"><img class="me-2" src="{{ asset('assets/img/download_app.svg') }}" width="20">Скачать приложение</a>
                        </div>

                    </div>
                    <div class="card" style="width: 465px;">
                        <div class="d-flex justify-content-between flex-column">
                            <div class="d-flex align-items-center">
                                <img class="icon__card" src="{{ asset('assets/img/apple.svg') }}" width="80" style="margin-right: 50px;">
                                <div>
                                    <h5 class="card__header">Iphone приложение</h5>
                                    <p class="card__text">Для IOS</p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary mt-4"><img class="me-2" src="{{ asset('assets/img/download_app.svg') }}">Скачать приложение</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/all.js"></script>
</body>
</html>