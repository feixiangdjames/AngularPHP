@extends('layouts.app')
@section('buttons')
    <a class="btn btn-primary" href="{{ route('pets.create')}}" role="button">
        Add New     </a>
@endsection
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>RATE</th>
            <th>Category</th>
            <th>image url</th>
            <th class="Actions">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($pets as $pet)
            <tr>
                <td>{{ $pet->pets_id }}</td>
                <td>{{ $pet->title }}</td>
                <td>{{ $pet->rate }}</td>
                <td>{{ $pet->category }}</td>
                <td><a class="btn btn-primary" href="{{ $pet->img}}">{{ $pet->img}}</a></td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>
@endsection
