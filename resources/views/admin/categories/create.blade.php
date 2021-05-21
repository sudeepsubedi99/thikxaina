@extends('adminlte::page')

@section('title', 'Create New Category')

@section('plugins.Select2', true)

@section('js')

<script>
    $(document).ready(function(){
        $('#category_id').select2();
    });
</script>

@endsection

@section('content')

<x-alert />
 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">Create New Category</h3>
          <div class="card-tools">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm">
            Go Back
        </a>
          </div>
      </div>
      <div class="card-body  " >
           <form action="{{ route('admin.categories.store') }}" method="POST">
             @csrf

             <x-input
             field="name"
             text="Name"
             />

                <div class="form-group">
                    <label for="category_id">Parent Category</label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        @foreach ($categories as $item )
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>

                    @error('category_id')
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
