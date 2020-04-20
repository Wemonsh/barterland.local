@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <a href="{{ route('game_create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Добавить селект</a>
    </div>


@endsection
