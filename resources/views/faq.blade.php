@extends('layouts.app')

@section('content')

    <main class="my-5 d-flex align-items-center justify-content-between flex-wrap" style="height: 400px;">
        <div>
            <h1>Почему важна переработка?</h1>
            <p class="subtext" style="max-width: 700px;">Переработка мусора имеет огромный смысл: Большинство ресурсов нашей планеты ограниченны и не могут восполняться в сроки устраивающие население Земли. Переработка отходов дает возможность сэкономить недра планеты, на которой мы живем. Многие отходы, попадая в окружающую среду, загрязняют ее на долгие годы вперед.</p>
        </div>
        <div class="card justify-content-end" style="height: 300px; padding: 0;">
            <img src="{{ asset ('assets/img/musor.jpg') }}" style="width: 100%; border-radius: 28px">
        </div>
    </main>
    <main class="d-flex align-items-center justify-content-between flex-wrap" style="height: 400px; margin-top: 150px;margin-bottom: 150px;">
        <div class="card justify-content-end" style="height: 300px; padding: 0;">
            <img src="{{ asset('assets/img/duma.jpeg') }}" style="width: 100%; border-radius: 28px; height: 100%;">
        </div>
        <div>
            <h1 style="max-width: 700px; font-size: 30px;">По инициативе В.И. Кондратьева будет строиться большой полигон переработки и сортировки мусора в Белореченске.</h1>
            <p class="subtext" style="max-width: 700px;">Вопросы по переработке мусора и утилизации отходов должны решаться в интересах жителей города. Для этого мы пригласили на встречу всех, кто в этой работе заинтересован.</p>
        </div>
    </main>
@endsection