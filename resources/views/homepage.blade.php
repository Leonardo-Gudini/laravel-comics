@extends('app')

@section('fumetti')
<h1>questo è main</h1>

<div id="main">

<div class="main-bg">

  <div class="tag">CURRENT SERIES</div>

</div>

<div class="comic-bg">

  <div class="comic-container">
    <ul>

      @foreach($listaFumetti as $fumetto)
        <li>

            <div class="image">
            <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}"> 
            </div>

            <h3>{{ $fumetto['series'] }} </h3>

        </li>
      @endforeach


    </ul>
  </div>

  <button>LOAD MORE</button>

</div>
</div>
@endsection