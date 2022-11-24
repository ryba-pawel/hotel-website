@extends('layouts.app')
@section('content')
Clients
    <p>
        {{ $title }}
    </p>
    <p>
        {{ $decription }}
    </p>
    @foreach($data as $item)
    <p>
        *{{ $item }}
    </p>
    @endforeach

    <!-- <a href="{ { route('clients') } }">LINK</a> -->
@endsection