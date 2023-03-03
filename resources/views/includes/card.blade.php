<a href="{{ route('cards.show', $card->id)}}">
    <div class="card position-relative">
        <img src="{{ $card->thumb ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png' }}"  alt="{{$card->name}}">
        <div class="card-body">
          <h5 class="card-title ">{{ $card->name}}</h5>
          <div class="mana">{{ $card->mana}}</div>
          <div class="edition">{{ $card->edition}}</div>
          <div class="type">{{ $card->type}}</div>

          <div class="effects">
            <ul>
              @foreach ($card->effect as $effect )
                  <li>{{ $effect}}</li>
              @endforeach
            </ul>
          </div>
          <div class="description">
            <p class="card-text">{{$card->description}}</p>
          </div>

          <div class="str-const">{{$card->str}} | {{ $card->constitution}}</div>
        </div>
    </div>
</a>