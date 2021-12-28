@extends('app')

@section('content')
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Channel name</th>
    </tr>
    @foreach($channels as $channel)
        <tr>
            <td>{{ $channel->id }}</td>
            <td>{{ $channel->channel_name }}</td>
        </tr>
    @endforeach
</table>
@endsection('content')