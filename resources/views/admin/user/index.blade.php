@extends('layouts.admin')

@section('content')

    <h1 class="h3 mb-1 text-gray-800">{{ $title }}</h1>

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
                <th>Имя</th>
                <th>Email</th>
                <th>Дата создания</th>
                <th>Дата редактирования</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>{{ $user->updated_at->format('d/m/Y H:i:s') }}</td>
                    <td>
                        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fas fa-eye"></i> Подробнее</a>
                        <a href="{{ route('user_edit', $user->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-edit"></i> Редактировать</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fas fa-trash"></i> Удалить</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}

@endsection

