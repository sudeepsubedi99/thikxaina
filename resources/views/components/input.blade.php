<div class="form-group">


   <label for="{{ $field }}">{{ $text }}</label>
  @if ($type == "textarea")

  <textarea
  name="{{ $field }}"
  id="{{ $field }}"
  class="form-control 
  @error($field)
      is-invalid
  @enderror"
   >{{ old($field) ?? $current }}
  </textarea>
  
      
  @else
  <input type="{{ $type }}"
  type="{{ $type }}"
  name="{{ $field }}"
  id="{{ $field }}"
  value="{{ old($field) ?? $current }}"
  class="form-control 
  @error($field)
      is-invalid
  @enderror"
/>
@endif

   @error($field)
       
   <small class="form-text text-danger">
       {{ $message }}
   </small>

   @enderror


</div>