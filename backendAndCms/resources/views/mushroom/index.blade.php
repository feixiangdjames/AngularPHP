@extends('layouts.app')
@section('buttons')
    <a class="btn btn-primary" href="{{ route('mushroom.create')}}" role="button">
        Add New     </a>
@endsection
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>RATE</th>
            <th>PRICE</th>
            <th>Category</th>
            <th>image url</th>
            <th class="Actions">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($sisi as $mushroom)
            <tr>
                <td>{{ $mushroom->mushroom_id }}</td>
                <td>{{ $mushroom->title }}</td>
                <td>{{ $mushroom->rate }}</td>
                <td>{{ $mushroom->price }}</td>
                <td>{{ $mushroom->subtitle }}</td>
                <td><a class="btn btn-primary" href="{{ $mushroom->img}}">{{ $mushroom->img}}</a></td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>
@endsection
