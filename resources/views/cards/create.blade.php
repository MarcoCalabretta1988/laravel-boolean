
@extends('layouts.main')

@section('title', 'Aggiungi')

@section ('content')
<section id="create-form" class="py-5">

 <div class="container" >
       <h2>Create Card:</h2>    
@include('includes.form.form')
</div>
</section>
@endsection