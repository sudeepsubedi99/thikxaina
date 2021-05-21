@extends('adminlte::page')

@section('title', 'Update User')

@section('plugins.Select2', true)

@section('js')

<script>
    $(document).ready(function(){
        $('#role').select2{
            minimumResultForSearch: Infinity
        };
    });
</script>

@endsection

@section('content')

<x-alert />
 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">Update User</h3>
          <div class="card-tools">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">
            Go Back
        </a>
          </div>
      </div>
      <div class="card-body  " >
           <form action="{{ route('admin.users.update', $user->id) }}" method="Post">
             @csrf
             @method('PUT')

             <x-input
             field="name"
             text="Name"
             :current="$user->name"
             />

             <x-input
             field="email"
             text="Email"
             :current="$user->email"
             />

             <x-input
             field="contact"
             text="Contact"
             :current="$user->contact"
             />

             <x-input
             field="password"
             text="Password"
             type="password"
             />
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                        @foreach ($roles as $role )
                        <option value="{{ $role }}" @if($role == $user->role) selected @endif>
                            {{ $role }}</option>
                        @endforeach
                    </select>

                    @error('role')
                    <small class="form-text text-danger">{{ $message }}</small>   
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-fw fa-save mr-1"></i>
                    Save
                </button>

            </form>
        
        </div>
  </div>

  @stop
