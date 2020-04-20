@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <a href="{{ route('select_create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Добавить селект</a>
    </div>

    <table class="table table-bordered table-hover bg-white">
        <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Подсказка</th>
            <th>Услуги</th>
        </tr>
        </thead>
        <tbody>
        @foreach($selects as $select)
            <tr>
                <td>{{ $select->id }}</td>
                <td>{{ $select->name }}</td>
                <td>{{ $select->placeholder }}</td>
                <td>
                    @foreach($select->services as $service)
                        <span class="badge badge-info">{{ $service->name }}</span>
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
