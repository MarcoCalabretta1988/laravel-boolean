@extends('layouts.main')

@section('title', 'Card Detail')

@section ('content')
<section id='card-detail'>

    <div class="container">
        <div class="row py-5">
            <div class="col-6">
            @include('includes.card')
        </div>
        <div class="col-6 py-5">
            <h3> {{ucfirst($card->name)}}</h3>
            <p><strong>Mana: </strong> {{$card->mana}}</p>
            <p><strong>Edizione: </strong> {{$card->edition}}</p>
            <p><strong>Effetti:</strong></p>
            <ul>
                @foreach ($card->effect as $effect )
                 <li>{{$effect}}</li>
                 @endforeach
            </ul>
             <p><strong>Descrizione: </strong> {{$card->description}}</p>
            <p><strong>Forza | Costituzione</strong> {{$card->str}} | {{$card->constitution}}</p>
            <p><strong>Tipo: </strong> {{$card->type}}</p>
        </div>
    </div>
    <div class="button-container  d-flex justify-content-center align-items-center my-3">
        <a href="{{ route('cards.index')}}" class="btn btn-secondary">Torna indietro</a>
        <a href="{{ route('cards.edit', $card->id)}}" class="btn btn-primary mx-2">Modifica</a>
        <form action="{{ route('cards.destroy',$card->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </div>
</div>


</section>
@endsection