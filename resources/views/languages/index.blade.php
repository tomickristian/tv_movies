@extends('app')

@section('content')
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Language name</th>
    </tr>
    @foreach($languages as $language)
        <tr>
            <td>{{ $language->id }}</td>
            <td>{{ $language->language_name }}</td>
        </tr>
    @endforeach
</table>
@endsection('content')