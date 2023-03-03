
@php 

$effects= config('effects');
@endphp

@extends('layouts.main')

@section('title', 'Aggiungi')

@section ('content')
<section id="create-form">

    <div class="container" >
           
    <form action="{{ route('cards.store')}}" method="POST" >

    @csrf
  <div class="row m-5">

      <div class="col-4">
       <div class="mb-3">
         <label for="name" class="form-label">Name:</label>
         <input type="text" class="form-control" id="name" name='name' placeholder="Name" value="{{ old('name')}}">
       </div>
     </div>

     <div class="col-4">
        <label for="type" class="form-label">Type:</label>
      <select class="form-select" name="type" id="type">
        <option @if(old('type') === '') selected @endif value="">Select Type</option>
        @foreach ($effects as $effect )     
        <option @if(old('type') === $effect) selected @endif value="{{$effect}}">{{ ucfirst($effect)}}</option>
        @endforeach
      </select>
    </div>

     
    <div class="col-4">
      <div class="mb-3">
        <label for="thumb" class="form-label">Url:</label>
        <input type="url" class="form-control" id="thumb" name='thumb' value="{{ old('thumb')}}" >
      </div>
    </div>

    <div class="col-6">
      <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" rows="3" name="description" >{{ old('description')}}</textarea>
      </div>
    </div>

 
    <div class="col-6">
      <div class="mb-3">
          <label for="effect" class="form-label">Effect:</label>
          <textarea class="form-control" id="effect" name='effect' placeholder="Scrivi gli effetti" rows="3">{{ old('effect')}} </textarea>
      </div>
    </div>

    <div class="col-3">
      <div class="mb-3">
        <label for="edition" class="form-label">Edition:</label>
        <input type="number" class="form-control" id="edition" name='edition' min="0" value="{{ old('edition')}}">
      </div>
    </div>


    
    <div class="col-3">
        <div class="mb-3">
            <label for="mana" class="form-label">Mana:</label>
            <input type="number" min="0" max="99" class="form-control" id="mana" name='mana'  value="{{ old('mana')}}">
        </div>
    </div>
    
    <div class="col-3">
        <div class="mb-3">
            <label for="str" class="form-label">Strength:</label>
          <input type="number" min="1" max="9" class="form-control" id="str" name='str'  value="{{ old('str')}}">
        </div>
      </div>

      <div class="col-3">
        <div class="mb-3">
          <label for="constitution" class="form-label">Constitution:</label>
          <input type="number" min="1" max="9" class="form-control" id="constitution" name='constitution'  value="{{ old('constitution')}}">
        </div>
      </div>
    
      <div class="col-3 my-4">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{route('cards.index')}}" class="btn btn-success">Back</a>
      </div>
  </div>
    
 
</form>
</div>
</section>
@endsection