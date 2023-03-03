<a href="{{ route('cards.show', $card->id)}}">
    <div class="card">
        <img src="{{ $card->thumb}}" class="card-img-top" alt="{{$card->name}}">
        <div class="card-body">
          <h5 class="card-title">{{ $card->name}}</h5>
          <p class="card-text">{{$card->description}}</p>
        </div>
    </div>
</a>