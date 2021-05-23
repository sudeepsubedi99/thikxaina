@extends('adminlte::page')

@section('title', 'All Products')

@section('content')

{{-- @dd($products) --}}

<x-alert />
<x-delete />
 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">All Products</h3>
          <div class="card-tools">
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">
            Add New Product
        </a>
          </div>
      </div>
      <div class="card-body p-0 " >
          <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                  <tr>
                      <th>Id</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($products as $product )   
                  <tr>
                      <td> {{ $product->id }}</td>
                      <td>
                          @if ($product->image)
                              
                          @endif
                          <img height="30px" src="{{ $product->image }}" alt="{{ $product->name }}">
                      </td>
                      <td> {{ $product->name }}</td>
                      <td> {{ $product->price }}</td>
                      <td>
                          <a href="{{ route('admin.products.show', $product->id) }} " class="btn btn-secondary btn-sm">
                            Details
                        </a>

                        <a href="{{ route('admin.products.edit', $product->id) }} " class="btn btn-primary btn-sm">
                            Edit
                        </a>

                        <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $product->id }})">
                            Delete
                        </button>

                        <form id="delete-form-{{ $product->id }}" action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:none">
                            @csrf @method('DELETE')
                        </form>
                      </td>
                  </tr>                   
                  @endforeach
              </tbody>
          </table>

          {{-- if no items --}}
          @if (count($products)==0)
          <div class="alert alert-warning m-0 text-center">
              No items found!
          </div>       
          @endif

          
        </div>
        @if ($products->perPage() < $products->total() )

       <div class="card-footer">
        {{ $products->links() }}
       </div>
        
        @endif
  </div>
@stop
