@extends('adminlte::page')

@section('title', 'User Details')

@section('content')

 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">User Information</h3>
          <div class="card-tools">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary btn-sm">
            Go Back
        </a>
          </div>
      </div>
      <div class="card-body p-0 " >
          
          <table class="table table-bordered table-striped">
            <tr>
                <th width="15%">ID</th>
                <td>{{ $user->id }}</td>
            </tr>
              <tr>
                  <th>Name</th>
                  <td>{{ $user->name }}</td>
              </tr>
              <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>{{ $user->contact }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ $user->role }}</td>
            </tr>

          </table>
        
      </div>
  </div>

  @stop
