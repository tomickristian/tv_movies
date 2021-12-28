@extends('app')

@section('content')
<table class="table table-striped">
    <tr class="table-default">
        <th>Id</th>
        <th>Movie name</th>
        <th>Description</th>
        <th>Show time</th>
        <th>Movie length</th>
        <th>Channel Id</th>
        <th>Genre Id</th>
    </tr>
    @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->movie_name }}</td>
            <td>{{ $movie->description }}</td>
            <td>{{ $movie->show_time }}</td>
            <td>{{ $movie->movie_length }}</td>
            <td>{{ $movie->channel_id }}</td>
            <td>{{ $movie->genre_id }}</td>
        </tr>
    @endforeach
</table>
@endsection('content')