@extends('app')

@section('content')
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Genre name</th>
    </tr>
    @foreach($genres as $genre)
        <tr>
            <td>{{ $genre->id }}</td>
            <td>{{ $genre->genre_name }}</td>
        </tr>
    @endforeach
</table>
@endsection('content')