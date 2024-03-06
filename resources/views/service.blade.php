@extends('layouts.app') 
@section('content')
@php
$servicedata = json_decode($firstservics->pjson , true);
@endphp
<div class="container pt-100 pb-100">
    <div class="row justify-content-center">
      
        <div class="col-10">
             <h2 class="tp-section-title text-center">{{$firstservics->servicename}}</h2>
             <img src="{{ asset('public/service/' . $servicedata['serviceimage'] ?? '') }}" />
              <div class="card">
        <div class="card-body">
           {!! $servicedata['longDescription'] !!}
            <a href="/booking/{{ Illuminate\Support\Str::slug($firstservics->servicename, '-') }}" class="yellow-btn"><i class="flaticon-enter"></i>Book Now</a>
        </div>
    </div>
        </div>
    </div>
  
</div>

<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/js/forms-editors.js')}}"></script>
<script>

    // Initialize Quill editor
    var quill = new Quill('.ql-editor', {
       
        readOnly: true, // if the content is not meant to be editable
        // ... other configurations
    });
    document.addEventListener("DOMContentLoaded", function() {
    // Remove the element with class "ql-tooltip"
    var tooltipElement = document.querySelector('.ql-tooltip');
    if (tooltipElement) {
        tooltipElement.remove();
    }
});
</script>

@endsection