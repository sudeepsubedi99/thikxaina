@extends('adminlte::page')

@section('title', 'Update Product')

@section('content')

<x-alert />
 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">Update Product</h3>
          <div class="card-tools">
            <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-sm">
            Go Back
        </a>
          </div>
      </div>
      <div class="card-body" >
           <form action="{{ route('admin.products.update', $product->id) }}" method="Post">
             @csrf 
             @method('PUT')

             <x-input
             field="name"
             text="Name"
             :current="$product->name"
             />

             <x-input
             field="price"
             text="Price"
             type="number"
             :current="$product->price"
             />

             <x-input
             field="description"
             text="Description"
             type="textarea"
             :current="$product->description"
             />

                

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-fw fa-save mr-1"></i>
                    Save
                </button>

            </form>
        
        </div>
  </div>

  @stop
