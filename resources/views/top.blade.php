@extends('layouts.app')

@section('content')
        <div class="light-version top__description d-topplayers top__awarding-place top__info">
            <div class="topplayers__info light-version">
                <h1 class="top__description-title">Топ игроков по онлайну</h1>
                <p class="top__description-text">Топ по онлайну на всех серверах. За первые, вторые и третьи места пологаются награды, обновление топов в раз месяц первого числа.</p>
            </div>
        </div>

        <div class="topplayers__content light-version d-topplayers">
            <table class="table _table table-borderless top__table-thead">
                <thead class="top__table-thead">
                <tr class="top__table-thead-tr">
                    <th scope="col">МЕСТО</th>
                    <th scope="col">ЛЮДИ</th>
                    <th scope="col">ВСЕГО МОНЕТ:</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i < count ($users); $i++)
                    <tr class="top__table-tbody-tr">
                        <td>{{ $i + 1 }}</td>
                        <td class='no_move'>
                            <span>{{ $users[$i]->name }}</span>
                        </td>
                        <td class='no_move'>{{ $users[$i]->balance }}</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
@endsection