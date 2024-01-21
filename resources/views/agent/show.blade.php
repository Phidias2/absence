@extends('layouts.app')
@section('title', 'Agent Details')
@section('heading', 'Agent Details')
@section('link_text', 'Goto All Agents')
@section('link', '/agent')

@section('content')

@forelse($absences as $key => $row)
<div class="col-md-4 mb-4" style="margin-left:auto;margin-right:auto;">
  <div class="card">
    <div class="card-header bg-primary">
      <h3 class="text-light fw-bold"> {{$agent->name}} {{$agent->surname}} le {{$row->start}}</h3>
    </div>
    <div class="card-body">
      <p class="card-text"><strong>Type : </strong>{{$row->type}}</p>
      <p class="card-text"><strong>Campagne : </strong>{{$row->campagne}}</p>
      <p class="card-text"><strong>Activite : </strong>{{$row->activity}}</p>
      <p class="card-text"><strong>Segment : </strong>{{$row->segment}}</p>
      <p class="card-text"><strong>Shift : </strong>{{ $row->shift}}</p>
      <p class="card-text"><strong>Debut : </strong>{{$row->start}}</p>
      <p class="card-text"><strong>Fin : </strong>{{$row->end}}</p>
    </div>
  </div>
</div>
@endforeach

@endsection