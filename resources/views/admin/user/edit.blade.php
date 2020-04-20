@extends('layouts.admin')

@section('content')

    <h1 class="h3 mb-1 text-gray-800">{{ $title }}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('role_edit', $user->id) }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="permission">Роли</label>
                            <select multiple class="form-control" name="permissions[]" id="permission">
                                @foreach($permissions as $permission)
                                    <option @foreach($user->permissions as $selected) @if($selected->id === $permission->id) selected @endif @endforeach > {{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="permission">Разрешения</label>
                            <select multiple class="form-control" name="permissions[]" id="permission">
                                @foreach($roles as $role)
                                    <option @foreach($user->roles as $selected) @if($selected->id === $role->id) selected @endif @endforeach > {{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>
    </div>

@endsection
