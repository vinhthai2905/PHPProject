@extends('layouts.app')
@section('content')
    <h1>{{ $datas['title'] }}</h1>

    @if(count($datas['services']) > 0 )
        <ul>
        @foreach ($datas['services'] as $service)
            <li>{{ $service }}</li>
        @endforeach
        </ul>
    @endif
    
@endsection