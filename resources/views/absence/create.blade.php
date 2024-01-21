@extends('layouts.app')
@section('title', 'Ajouter une absence')
@section('heading', 'Creer une absence')
@section('link_text', 'Goto All Posts')
@section('link', '/absence')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Formulaire d'enregistrement des absences a MCB</h3>
      </div>
      <div class="card-body p-4">
        <form action="/absence" method="POST" enctype="multipart/form-data">
          @csrf

        <div>
          <img src="/img/vendor-1.jpg" />
        </div>

        <div>
          <h3>Contexte et Justification</h3>
        </div>

          <div class="my-2 mt-3">
            <label>Selectionner un agent</label>
            <select name="user_id" class="selectc">
              @forelse($agents as $key => $row)
              <option value={{$row->id}}>{{$row->name}} {{$row->surname}}</option>
              @endforeach
            </select>
          </div>

          <div class="my-2">
            <label>Selectionner le type d'absence</label>
            <select name="type" class="selectc">
              <option value="demission">Demission</option>
              <option value="absence_vacation">Absence vacation</option>
              <option value="retard">Retard</option>
              <option value="permission">Permission</option>
              <option value="map">Mise a pied</option>
              <option value="end_contract">Fin de contrat</option>
              <option value="no_renew">Non renouvellement de contrat</option>
              <option value="suspension">Sous suspension de contrat</option>

            </select>
          </div>

          <div class="my-2">
            <label>Selectionner le type de campagnes</label>
            <select name="campagne" class="selectc">
              <option value="moov">Moov</option>
              <option value="mtn">MTN</option>
              <option value="celtis">Celtis</option>
            </select>
          </div>

          <div class="my-2">
            <label>Selectionner l'activite</label>
            <select name="activity" class="selectc">
              <option value="ra">RA</option>
              <option value="digital">Digital</option>
              <option value="bo">BO</option>
              <option value="ea">EA</option>
            </select>
          </div>

          <div class="my-2">
            <label>Selectionner le segment</label>
            <select name="segment" class="selectc">
              <option value="mm">MM</option>
              <option value="top">Top 20</option>
              <option value="dealers">Dealers</option>
              <option value="moov">Moov 1919/3334</option>
            </select>
          </div>

          <div class="my-2">
            <label>Selectionner le shift</label>
            <select name="shift" class="selectc">
              <option value="morning">Matinee</option>
              <option value="afternoon">Soiree</option>
              <option value="night">Nuit</option>
            </select>
          </div>

          <div class="my-2">
            <label>Date de debut</label>
            <input type="date" name="start" id="start" class="form-control @error('start') is-invalid @enderror" value="{{ old('start') }}">
            @error('start')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <label>Date de fin</label>
            <input type="date" name="end" id="end" class="form-control @error('end') is-invalid @enderror" value="{{ old('start') }}">
            @error('end')
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