@extends('app')

@section('content')
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Full name</th>
        <th>Date of birth</th>
        <th>Male</th>
    </tr>
    @foreach($actors as $actor)
        <tr>
            <td>{{ $actor->id }}</td>
            <td>{{ $actor->full_name }}</td>
            <td>{{ $actor->date_of_birth }}</td>
            <td>{{ $actor->male }}</td>
        </tr>
    @endforeach
</table>
@endsection('content')