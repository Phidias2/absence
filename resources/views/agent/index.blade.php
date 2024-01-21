@extends('layouts.app')
@section('title', 'Home Page')
@section('heading', 'Tous les agents')
@section('link_text', 'Add New Post')
@section('link', '/agent/create')

@section('content')

    <div class="d-flex justify-content-between mb-4 ms-3">
        <h3>Liste des agents</h3>
        <a class="btn btn-success" style="margin-right:15px;" href="/agent/create"> Creer un agent</a>
    </div>

    @if(session('message'))
<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Statut</th>
            <th>Contrat</th>
            <th>Nombre d'absence</th>
            
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @forelse($agents as $key => $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->surname }}</td>
                <td>{{ $row->sexe }}</td>
                <td>{{ $row->statut }}</td>
                <td>{{ $row->is_active ? 'Actif':'Inactif' }}</td>
                <td>{{$row->absence_count}}</td>
                <!-- <td><img src="{{ asset('storage/images/'.$row->image) }}" width=50px height=50px ></td> -->
                
                <td>
                    <a href="/agent/{{$row->id}}/edit" class="btn btn-success ">Editer</a>
                    <a href="/agent/{{$row->id}}" class="btn btn-primary ">Voir</a>
                    <form action="/agent/{{$row->id}}" method="POST" class="d-inline-block">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
 <div class="text-center">"{{$agents->links()}}<div> 

@endsection