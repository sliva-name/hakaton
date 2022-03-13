@extends('layouts.app')
@section('content')
    <main class="my-5 d-flex align-items-center justify-content-between flex-wrap" style="height: 600px;">
        <div>
            <h1>О приложении</h1>
            <p class="subtext lh-lg" style="max-width: 700px;">Наше приложение некоммерческое. Оно охватывает юг России, на нем есть точки по всему Краснодарскому краю. Приложение доступно в GooglePlay, для AppStore в дальнейшей разработке – просто набираете в поиск ecoMEGA и скачиваете его. Замечания и пожелания по работе приложения можно писать нашим разработчикам в обратную связь.</p>
        </div>
        <div class="card justify-content-end" style="height: 500px; padding: 0; background: url({{ asset ('assets/img/app.svg') }}) 50% 50%; width: 100%; background-size: cover;">
        </div>
    </main>
@endsection
