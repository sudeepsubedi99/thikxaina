@extends('adminlte::page')

@section('title', 'Upload Image for Product')

@section('plugins.Select2', true)

@section('content')

<x-alert />
 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">Upload Image for Product</h3>
          <div class="card-tools">
            <a href="{{ route('admin.products.show', $product) }}" class="btn btn-primary btn-sm">
            Go Back
        </a>
          </div>
      </div>
      <div class="card-body" >
           <form action="{{ route('admin.products.images', $product) }}" method="POST"
           enctype="multipart/form-data">
             @csrf 

             <x-input
             text="Product Image"
             type="file"
             field="product_image"
             :required="true"
             />

                

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-fw fa-save mr-1"></i>
                    Save
                </button>

            </form>
        
        </div>
  </div>

  @stop
