@extends('layouts.admin')

@section('content')

    <h1 class="h3 mb-1 text-gray-800">{{ $title }}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('roleCreate') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="permission">Разрешения</label>
                    <select multiple class="form-control" name="permissions[]" id="permission">
                        @foreach($permissions as $permission)
                            <option>{{ $permission->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Название <span class="text-danger">*</span></label>
                    <input type="text" id="name" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" >
                    {!! $errors->first('name', '<div class="invalid-feedback">Пожалуйста заполните, это поле обязательно для заполнения.</div>') !!}
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>
    </div>

@endsection
