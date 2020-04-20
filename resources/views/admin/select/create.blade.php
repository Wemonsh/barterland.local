@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('select_store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Название <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @if($errors->first('name')) is-invalid @endif"
                                   id="name"
                                   aria-describedby="nameHelp"
                                   name="name">
                            <small id="nameHelp" class="form-text text-muted">
                                Необходимо ввести название селекта, длина не может быть меньше 1 символа и больше 255.
                            </small>
                        </div>

                        <div class="form-group">
                            <label for="placeholder">Подсказка <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control @if($errors->first('placeholder')) is-invalid @endif"
                                   id="placeholder"
                                   aria-describedby="nameHelp"
                                   name="placeholder">
                            <small id="nameHelp" class="form-text text-muted">
                                Необходимо подсказку которая будет выводится в селекте по умолчанию, длина не может быть меньше 1 символа и больше 255.
                            </small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="services">Услуги</label>
                            <select multiple
                                    class="form-control"
                                    id="services"
                                    name="services[]">
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->game->name }} - {{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
