@extends('layouts.main')

@section('title', 'Deck')

@section ('content')
<section id='deck-jumbotron'>
  <h1 class='deck-lable'>DECK</h1>
</section>
<div class="container my-5">
  <div class="row row-cols-3 my-5 g-4">
    @forelse ($cards as $card)
    <div class="col">  
        @include('includes.card')
    </div>
      @empty
          <h1 class="text-center">Non ci sono carte nel deck</h1>
      @endforelse
     
   </div>
   <div class="button-wrap d-flex justify-content-center">
     <a href="{{ route('cards.create')}}" class="btn btn-warning">Aggiungi</a>

   </div>
  </div>
@endsection
    
