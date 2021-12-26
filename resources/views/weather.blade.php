@extends('app')

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">Local Date & Time</th>
            <th scope="col">Temp</th>
            <th scope="col">Wind</th>
            <th scope="col">Condition</th>
            </tr>
        </thead>
        <tbody>
        @foreach($weather as $city)
            <tr>
                <th scope="row">{{ $city['location']['name']. ', ' .  $city['location']['country'] }}</th>
                <td>{{ $city['location']['localtime'] }}</td>
                <td>{{ $city['current']['temp_c'].' C' }}</td>
                <td>{{ $city['current']['wind_kph']. ' kph ' . $city['current']['wind_dir'] }}</td>
                <td><img src="{{ $city['current']['condition']['icon'] }}" alt="">{{ $city['current']['condition']['text'] }}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
@endsection