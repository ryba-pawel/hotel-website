@extends('layouts.app')
@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="mb-20">

@if( 5> 10)
    <p>5 większe od 10</p>
@elseif( 5 < 10)
    mniejsze do 5
@else
    nic
@endif
<br>
*{{ $name }}*
@unless (empty($name))
    nie jest pusty
@endunless

<br>
@empty($name)
    jest pusty
@endempty
<br>
@isset($name)
    jest zdefiniowany
@endempty

<br>
@switch($name)
    @case('Dary')
    
        @break
    @case('Paweł')
        Tak - imię to Paweł
        @break        
    @default
    No match
@endswitch

    </div>
</div>    
</section>

@endsection