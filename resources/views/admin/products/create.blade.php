@extends('adminlte::page')

@section('title', 'Create New Product')

@section('plugins.Select2', true)

@section('content')

<x-alert />
 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">Create New Product</h3>
          <div class="card-tools">
            <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-sm">
            Go Back
        </a>
          </div>
      </div>
      <div class="card-body" >
           <form action="{{ route('admin.products.store') }}" method="POST">
             @csrf 

             <x-input
             field="name"
             text="Name"
             />

             <x-input
             field="price"
             text="Price"
             type="number"
             />

             <x-input
             field="description"
             text="Description"
             type="textarea"
             />

                

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-fw fa-save mr-1"></i>
                    Save
                </button>

            </form>
        
        </div>
  </div>

  @stop
