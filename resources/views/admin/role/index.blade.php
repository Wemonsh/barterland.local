@extends('layouts.admin')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <a href="{{ route('role_create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Добавить роль</a>
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
            <th>Разрешения</th>
            <th>Дата создания</th>
            <th>Дата редактирования</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->guard_name }}</td>
                <td>
                @foreach($role->permissions as $permission)
                    <span class="badge badge-secondary">{{ $permission->name }}</span>
                @endforeach
                </td>
                <td>{{ $role->created_at->format('d/m/Y H:i:s') }}</td>
                <td>{{ $role->updated_at->format('d/m/Y H:i:s') }}</td>
                <td>
                    <a href="{{ route('role_edit', $role->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-edit"></i> Редактировать</a>
                    <a href="{{ route('role_delete', $role->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-trash"></i> Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $roles->links() }}
@endsection

