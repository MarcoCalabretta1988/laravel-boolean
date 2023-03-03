@extends('layouts.main')

@section('title', 'Modifica')

@section ('content')
<section id="edit-form" class="my-5">

 <div class="container" >
       <h2>Modifica Card:</h2>    
@include('includes.form.form')
</div>
</section>
@endsection