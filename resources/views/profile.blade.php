@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $user->name }}</h4>
                      <p class="555 mb-1">Verified  ✳️  </p>
                      <p class="text-muted font-size-sm">Active announcer</p>
                      <a href="/ads"><button class="btn btn-primary d-inline mb-1">See my ads</button></a>
    <form action="{{route('users.delete')}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger d-inline">Delete myself</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 555">
                    {{ $user->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 555">
                    {{ $user->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 555">
                    {{ $user->phone_number }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 555">
                    {{ $user->phone_number }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Created at</h6>
                    </div>
                    <div class="col-sm-9 555">
                    {{ $user->created_at }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="{{route('user.edit')}}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
@endsection

