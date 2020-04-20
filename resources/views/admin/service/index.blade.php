@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <a href="{{ route('service_create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Добавить услугу</a>
    </div>

    <table class="table table-bordered table-hover bg-white">
        <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Алиас</th>
            <th>Описание</th>
            <th>Тип</th>
            <th>Игра</th>
            <th>Селекты</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->alias }}</td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->type->name ?? '-' }}</td>
                <td>{{ $service->game->name ?? '-' }}</td>
                <td>
                    @foreach($service->selects as $select)
                        <span class="badge badge-info">{{ $select->name }}</span>
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('service_show', $service->id) }}"><i class="fas fa-eye text-primary"></i></a>
                    <a href="{{ route('service_edit', $service->id) }}"><i class="fas fa-edit text-warning"></i></a>
                    <a href="{{ route('service_destroy', $service->id) }}"><i class="fas fa-trash-alt text-danger"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $services->links() }}
@endsection
