@extends('adminlte::page')

@section('title', 'Product Details')

@section('content')

 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">Product Information</h3>
          <div class="card-tools">
            <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-sm">
            Go Back
        </a>
          </div>
      </div>
      <div class="card-body p-0 " >
          
          <table class="table table-bordered table-striped">
            <tr>
                <th width="15%">ID</th>
                <td>{{ $product->id }}</td>
            </tr>
              <tr>
                  <th>Name</th>
                  <td>{{ $product->name }}</td>
              </tr>

              <tr>
                  <th>Price</th>
                  <td>{{ money($product->price) }}</td>
              </tr>
              <tr>
                <th>Description</th>
                <td>{{ $product->description }}</td>
            </tr>
            
                  
          </table>
        
      </div>
  </div>

  @stop
