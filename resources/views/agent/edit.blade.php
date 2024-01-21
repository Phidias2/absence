@extends('layouts.app')
@section('title', 'Edit agent')
@section('heading', 'Edit This agent')
@section('link_text', 'Goto All Agent')
@section('link', '/agent')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Modifier les informations de {{$agent->name}} {{$agent->surname}}</h3>
      </div>
      <div class="card-body p-4">
        <form action="/agent/{{ $agent->id }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="my-2">
          <label>Nom</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" value="{{ $agent->name }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
          <label>Prenom</label>
            <input type="text" name="surname" id="surname" class="form-control @error('surname') is-invalid @enderror" placeholder="Prenoms" value="{{ $agent->surname }}">
            @error('surname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <label>Sexe</label>
            <select name="sexe" class="selectc">
              <option value="masculin" {{ $agent->sexe == 'masculin' ? 'selected' : '' }}>Masculin</option>
              <option value="feminin" {{ $agent->feminin == 'stagiaire' ? 'selected' : '' }}>Feminin</option>
            </select>
            @error('sexe')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <label>statut</label>
            <select name="statut" class="selectc">
              <option value="stagiaire" {{ $agent->statut == 'stagiaire' ? 'selected' : '' }}>Stagiaire</option>
              <option value="titulaire" {{ $agent->statut == 'titulaire' ? 'selected' : '' }}>Titulaire</option>
            </select>
            @error('statut')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="submit" value="Mettre a jour" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection