@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <a href="{{ route('service_index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Назад</a>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <ul>
                        <li>{{ $service->name }}</li>
                        <li>{{ $service->alias }}</li>
                        <li>{{ $service->type->name }}</li>
                        <li>{{ $service->game->name }}</li>
                        <li>{{ $service->description }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <ul>
                        @foreach($service->selects as $select)
                            <li>{{ $select->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
