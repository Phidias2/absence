@extends('layouts.app')
@section('title', 'Edit user')
@section('heading', 'Edit User')
@section('link_text', 'Goto All ads')
@section('link', '/profile')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Edit ad</h3>
      </div>
      <div class="card-body p-4">
        <form action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="my-2">
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $user->name }}" required>
          </div>

          <div class="my-2">
            <input type="email" name="email" id="email" class="form-control" placeholder="email" value="{{ $user->email }}" required>
          </div>

          <div class="my-2">
            <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="Phone number" value="{{ $user->phone_number }}" required>
          </div>

          <div class="my-2">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          </div>

          <div class="my-2">
            <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Password" required>
          </div>

          <div class="my-2">
            <input type="submit" value="Update user" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection