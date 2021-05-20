@extends('adminlte::page')

@section('title', 'All Users')

@section('content')

<x-alert />
<x-delete />
 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">All Users</h3>
          <div class="card-tools">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">
            Add New User
        </a>
          </div>
      </div>
      <div class="card-body p-0 " >
          <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Contact Number</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($users as $user)   
                  <tr>
                      <td> {{ $user->id }}</td>
                      <td> {{ $user->name }}</td>
                      <td> {{ $user->email }}</td>
                      <td> {{ $user->role }}</td>
                      <td> {{ $user->contact }}</td>
                      <td>
                          <a href="{{ route('admin.users.show', $user->id) }} " class="btn btn-secondary btn-sm">
                            Details
                        </a>

                        <a href="{{ route('admin.users.edit', $user->id) }} " class="btn btn-primary btn-sm">
                            Edit
                        </a>

                        <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $user->id }})">
                            Delete
                        </button>

                        <form id="delete-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:none">
                            @csrf @method('DELETE')
                        </form>
                      </td>
                  </tr>                   
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
@stop
