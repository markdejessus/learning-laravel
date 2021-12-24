@extends('app')

@section('content')
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        <th scope="col">Profile picture</th>
        </tr>
    </thead>
    <tbody>
    @foreach($people as $key => $person)
        <tr>
        <th scope="row">{{ $key + 1}}</th>
        <td>{{ $person['name']['first'] }}</td>
        <td>{{ $person['name']['last'] }}</td>
        <td>{{ '@' .  $person['login']['username'] }}</td>
        <td><img src="{{ $person['picture']['medium'] }}" class="rounded-circle" alt=""></td>
        </tr>
        <tr>
    @endforeach

    </tbody>
    </table>
@endsection