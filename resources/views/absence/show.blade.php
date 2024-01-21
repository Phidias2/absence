@extends('layouts.app')
@section('title', 'Post Details')
@section('heading', 'Post Details')
@section('link_text', 'Goto All Posts')
@section('link', '/absence')

@section('content')


<div class="col-md-4 mb-4" style="margin-left:auto;margin-right:auto;">
  <div class="card">
    <div class="card-header bg-primary">
      <h3 class="text-light fw-bold"> Detail de l'absence</h3>
    </div>
    <div class="card-body">
      <h5 class="card-title"> <strong>Nom : </strong>
        {{$absence->agent_name}} {{$absence->agent_surname}}
      </h5>
      <p class="card-text"><strong>Type : </strong>{{$absence->type}}</p>
      <p class="card-text"><strong>Campagne : </strong>{{$absence->campagne}}</p>
      <p class="card-text"><strong>Activite : </strong>{{$absence->activity}}</p>
      <p class="card-text"><strong>Segment : </strong>{{$absence->segment}}</p>
      <p class="card-text"><strong>Shift : </strong>{{$absence->shift}}</p>
      <p class="card-text"><strong>Debut : </strong>{{$absence->start}}</p>
      <p class="card-text"><strong>Fin : </strong>{{$absence->end}}</p>
      <p class="card-text"><strong>Creer par : </strong>{{$absence->created_by_name}}</p>
    </div>
  </div>
</div>

@endsection