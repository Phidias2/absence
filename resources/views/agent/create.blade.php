@extends('layouts.app')
@section('title', 'Ajouter un agent')
@section('heading', 'Create agent')
@section('link_text', 'Goto All Posts')
@section('link', '/agents')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Creer un agent</h3>
      </div>
      <div class="card-body p-4">
        <form action="/agent" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="my-2">
          <label>Nom</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
          <label>Prenom</label>
            <input type="text" name="surname" id="surname" class="form-control @error('surname') is-invalid @enderror" placeholder="Prenoms" value="{{ old('surname') }}">
            @error('surname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <label>Sexe</label>
            <select name="sexe" class="selectc">
              <option value="masculin">Masculin</option>
              <option value="feminin">Feminin</option>
            </select>
            @error('sexe')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <label>statut</label>
            <select name="statut" class="selectc">
              <option value="stagiaire">Stagiaire</option>
              <option value="titulaire">Titulaire</option>
            </select>
            @error('statut')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="submit" value="Enregistrer" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection