@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <a href="{{ route('game_index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Назад</a>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Основная информация</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Название:</strong> {{ $game->name }}</li>
                    <li class="list-group-item"><strong>Алиас:</strong> {{ $game->alias }}</li>
                    <li class="list-group-item"><strong>Карточка:</strong> {{ $game->preview_image }}</li>
                    <li class="list-group-item"><strong>Обложка:</strong> {{ $game->full_image }}</li>
                    <li class="list-group-item"><strong>Цвет:</strong> {{ $game->background_color }}</li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Услуги</h6>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($game->services as $service)
                        <li class="list-group-item">{{ $service->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
