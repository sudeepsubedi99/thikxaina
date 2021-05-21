@extends('adminlte::page')

@section('title', 'Category Details')

@section('content')

 
<div class="card">
      <div class="card-header ">
          <h3 class="card-title text-bold">Category Information</h3>
          <div class="card-tools">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm">
            Go Back
        </a>
          </div>
      </div>
      <div class="card-body p-0 " >
          
          <table class="table table-bordered table-striped">
            <tr>
                <th width="15%">ID</th>
                <td>{{ $category->id }}</td>
            </tr>
              <tr>
                  <th>Name</th>
                  <td>{{ $category->name }}</td>
              </tr>
             <tr>
                 <th>Parent</th>
                 <td>
                     @if ($category->category_id)
                         
                     <a href="{{ route('admin.categories.show', $category->category_id) }}">
                        {{ $category->category->name }}
                    </a>
                    @endif
                 </td>
             </tr>
             <tr>
                 <th>Childs</th>
                 <td>
                     @if ($category->categoreis) 
                     {{-- if category have multiple child --}}
                     <ul>
                         @foreach ($category->categoreis as $item)                     

                          <li>
                            <a href="{{ route('admin.categories.show', $item->id) }}">
                                {{ $item->name }}
                            </a>

                          </li>
                         @endforeach
                      </ul>
                         
                     @endif
                 </td>
             </tr>

          </table>
        
      </div>
  </div>

  @stop
