@extends('layouts.app')
@section('title', 'Home Page')
@section('heading', 'Toutes les absences')
@section('link_text', 'Add New Post')
@section('link', '/absence/create')

@section('content')

<div class="d-flex justify-content-between mb-4 ms-3">
    <h3>Liste des agents</h3>
    <a class="btn btn-success" style="margin-right:15px;" href="/absence/create"> Creer une absence</a>
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
            <th>Type</th>
            <th>Campagne</th>
            <th>Activite</th>
            <th>Segment</th>
            <th>Shift</th>
            <th>Debut</th>
            <th>Fin</th>
            <th>Auteur</th>
            <th>Cree le</th>

            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @forelse($absences as $key => $row)
        <tr>
            <td>{{ $row->agent_name }} {{ $row->agent_surname }}</td>
            <td>{{ $row->type }}</td>
            <td>{{ $row->campagne }}</td>
            <td>{{ $row->activity }}</td>
            <td>{{ $row->segment }}</td>
            <td>{{ $row->shift }}</td>
            <td>{{ $row->start }}</td>
            <td>{{ $row->end }}</td>
            <td>{{ $row->created_by_name }}</td>
            <td>{{ $row->created_at }}</td>
            <td>
                <a href="/absence/{{$row->id}}/edit" class="btn btn-success ">Editer</a>
                <a href="/absence/{{$row->id}}" class="btn btn-primary ">Voir</a>
                <form action="/absence/{{$row->id}}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<div class="text-center">"{{$absences->links()}}
    <div>

        @endsection