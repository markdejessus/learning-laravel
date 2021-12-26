@extends('app')

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">Temp</th>
            <th scope="col">Wind</th>
            <th scope="col">Condition</th>
            </tr>
        </thead>
        <tbody>
        @foreach($weather as $city)
            <tr>
                <th scope="row">{{ $city['location']['name'] }}</th>
                <td>{{ $city['current']['temp_c'].' C' }}</td>
                <td>{{ $city['current']['wind_kph']. ' kph ' . $city['current']['wind_dir'] }}</td>
                <td><img src="{{ $city['current']['condition']['icon'] }}" alt=""></td>
            </tr>
        @endforeach
        </tbody>
        </table>
@endsection