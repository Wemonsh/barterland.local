@extends('layouts.admin')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <a href="{{ route('permission_create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Добавить разрешение</a>
    </div>

    @if(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <table class="table table-bordered table-hover bg-white">
        <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Защитник</th>
            <th>Дата создания</th>
            <th>Дата редактирования</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->guard_name }}</td>
                <td>{{ $permission->created_at->format('d/m/Y H:i:s') }}</td>
                <td>{{ $permission->updated_at->format('d/m/Y H:i:s') }}</td>
                <td>
                    <a href="{{ route('permission_edit', $permission->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-edit"></i> Редактировать</a>
                    <a href="{{ route('permission_delete', $permission->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-trash"></i> Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $permissions->links() }}
@endsection

