@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <a href="{{ route('game_create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Добавить игру</a>
    </div>

    <table class="table table-bordered table-hover bg-white">
        <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Алиас</th>
            <th>Услуги</th>
            <th>Каточка</th>
            <th>Обложка</th>
            <th>Цвет</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($games as $game)
            <tr>
                <td>{{ $game->id }}</td>
                <td>{{ $game->name }}</td>
                <td>{{ $game->alias }}</td>
                <td>
                    @foreach($game->services as $service)
                        <span class="badge badge-info">{{ $service->name }}</span>
                    @endforeach
                </td>
                <td>{{ $game->preview_image }}</td>
                <td>{{ $game->full_image }}</td>
                <td>{{ $game->background_color }}</td>
                <td>
                    <a href="{{ route('game_show', $game->id) }}"><i class="fas fa-eye text-primary"></i></a>
                    <a href="{{ route('game_edit', $game->id) }}"><i class="fas fa-edit text-warning"></i></a>
                    <a href="{{ route('game_destroy', $game->id) }}"><i class="fas fa-trash-alt text-danger"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $games->links() }}
@endsection
