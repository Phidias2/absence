@extends('layouts.app')
@section('title', 'Modifier une absence')
@section('heading', 'Editer cette absence')
@section('link_text', 'Goto All ads')
@section('link', '/absence')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold"> Modifier l'absence</h3>
      </div>
      <div class="card-body p-4">
        <form action="/absence/{{ $absence->id }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="my-2">
            <label>Selectionner un agent</label>
            <select name="user_id" class="selectc">
              @forelse($agents as $key => $row)
              <option value={{$row->id}} {{ $absence->user_id == $row->id ? 'selected' : '' }}>{{$row->name}} {{$row->surname}}</option>
              @endforeach
            </select>
          </div>

          <div class="my-2">
            <label>Selectionner le type d'absence</label>
            <select name="type" class="selectc">
              <option value="demission" {{ $absence->type == 'demission' ? 'selected' : '' }}>Demission</option>
              <option value="absence_vacation" {{ $absence->type == 'absence_vacation' ? 'selected' : '' }}>Absence vacation</option>
              <option value="retard" {{ $absence->type == 'retard' ? 'selected' : '' }}>Retard</option>
              <option value="permission" {{ $absence->type == 'permission' ? 'selected' : '' }}>Permission</option>
              <option value="map" {{ $absence->type == 'demission' ? 'map' : '' }}>Mise a pied</option>
              <option value="end_contract" {{ $absence->type == 'end_contract' ? 'selected' : '' }}>Fin de contrat</option>
              <option value="no_renew" {{ $absence->type == 'no_renew' ? 'selected' : '' }}>Non renouvellement de contrat</option>
              <option value="suspension" {{ $absence->type == 'suspension' ? 'selected' : '' }}>Sous suspension de contrat</option>

            </select>
          </div>

          <div class="my-2">
            <label>Selectionner le type de campagnes</label>
            <select name="campagne" class="selectc">
              <option value="moov" {{ $absence->campagne == 'moov' ? 'selected' : '' }}>Moov</option>
              <option value="mtn" {{ $absence->campagne == 'mtn' ? 'selected' : '' }}>MTN</option>
              <option value="celtis" {{ $absence->campagne == 'celtis' ? 'selected' : '' }}>Celtis</option>
            </select>
          </div>

          <div class="my-2">
            <label>Selectionner l'activite</label>
            <select name="activity" class="selectc">
              <option value="ra" {{ $absence->activity == 'ra' ? 'selected' : '' }}>RA</option>
              <option value="digital" {{ $absence->activity == 'digital' ? 'selected' : '' }}>Digital</option>
              <option value="bo" {{ $absence->activity == 'bo' ? 'selected' : '' }}>BO</option>
              <option value="ea" {{ $absence->activity == 'ea' ? 'selected' : '' }}>EA</option>
            </select>
          </div>

          <div class="my-2">
            <label>Selectionner le segment</label>
            <select name="segment" class="selectc">
              <option value="mm" {{ $absence->segment == 'mm' ? 'selected' : '' }}>MM</option>
              <option value="top" {{ $absence->segment == 'top' ? 'selected' : '' }}>Top 20</option>
              <option value="dealers" {{ $absence->segment == 'dealers' ? 'selected' : '' }}>Dealers</option>
              <option value="moov" {{ $absence->segment == 'moov' ? 'selected' : '' }}>Moov 1919/3334</option>
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
            <input type="date" name="start" id="start" class="form-control @error('start') is-invalid @enderror" value="{{ $absence->start }}">
            @error('start')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <label>Date de fin</label>
            <input type="date" name="end" id="end" class="form-control @error('end') is-invalid @enderror" value="{{ $absence->end }}">
            @error('end')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="submit" value="Modifier" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection