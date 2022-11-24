@extends('layouts.app')
@section('content')
Clients ID
         
    <p>
        *{{ $client }}
    </p>
   LINK
<a href="{ { route('clients') } }">LINK</a>
@endsection