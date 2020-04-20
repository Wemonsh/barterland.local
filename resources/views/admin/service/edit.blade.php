@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('service_update', $service->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Название <span class="text-danger">*</span></label>
                    <input type="text"
                           class="form-control @if($errors->first('name')) is-invalid @endif"
                           id="name"
                           aria-describedby="nameHelp"
                           name="name"
                           value="{{ $service->name }}">
                    <small id="nameHelp" class="form-text text-muted">
                        Необходимо ввести название услуги, длина не может быть меньше 1 символа и больше 255.
                    </small>
                </div>

                <div class="form-group">
                    <label for="type_id">Тип</label>
                    <select class="form-control @if($errors->first('type_id')) is-invalid @endif"
                            id="type_id"
                            name="type_id">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}" @if($service->type->id == $type->id) selected @endif>{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="game_id">Игра</label>
                    <select class="form-control @if($errors->first('game_id')) is-invalid @endif"
                            id="game_id"
                            name="game_id">
                        @foreach($games as $game)
                            <option value="{{ $game->id }}" @if($service->game->id == $game->id) selected @endif>{{ $game->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control @if($errors->first('description')) is-invalid @endif"
                              id="description"
                              rows="3"
                              name="description">{{ $service->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
