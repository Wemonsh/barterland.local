@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('game_update', $game->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Название <span class="text-danger">*</span></label>
                    <input type="text"
                           class="form-control @if($errors->first('name')) is-invalid @endif"
                           id="name"
                           aria-describedby="nameHelp"
                           name="name"
                           value="{{ $game->name }}">
                    <small id="nameHelp" class="form-text text-muted">
                        Необходимо ввести название игры, длина не может быть меньше 1 символа и больше 255.
                    </small>
                </div>

                <div class="form-group">
                    <label for="alias">Алиас <span class="text-danger">*</span></label>
                    <input type="text"
                           class="form-control @if($errors->first('alias')) is-invalid @endif"
                           id="alias"
                           name="alias"
                           value="{{ $game->alias }}">
                </div>

                <div class="form-group">
                    <label for="preview_image">Карточка <span class="text-danger">*</span></label>
                    <input type="text"
                           class="form-control @if($errors->first('preview_image')) is-invalid @endif"
                           id="preview_image"
                           name="preview_image"
                           value="{{ $game->preview_image }}">
                </div>

                <div class="form-group">
                    <label for="full_image">Обложка <span class="text-danger">*</span></label>
                    <input type="text"
                           class="form-control @if($errors->first('full_image')) is-invalid @endif"
                           id="full_image"
                           name="full_image"
                           value="{{ $game->full_image }}">
                </div>


                <div class="form-group">
                    <label for="background_color">Цвет фона <span class="text-danger">*</span></label>
                    <input type="text"
                           class="form-control @if($errors->first('name')) is-invalid @endif"
                           id="background_color"
                           name="background_color"
                           value="{{ $game->background_color }}">
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
