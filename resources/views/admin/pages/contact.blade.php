@extends('admin.layout.app')
@section('links')
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection
<style>
    /* Adjust the button style */
.close {
    position: absolute;
    top: 1px;
    right: 5px;
    background: transparent;
    border: none;
    color: red;
    cursor: pointer;
    z-index: 1;
    font-size:40px;
}

/* Style the image container */
.image-wrapper {
    position: relative;
    display: inline-block;
    width: 63%;
    height: 100%;
    overflow: hidden;
    border: 1px solid #ccc; /* Add border for illustration */
    padding: 5px; /* Add padding for a cleaner look */
}

/* Ensure the image fills its container */
.image-wrapper img {
    width: 100%;
    height: auto;
    display: block;
}

</style>

@section('content')
<!-- Full Editor -->
<div class="col-12">
   <div class="card">
      <h5 class="card-header">Hero Section</h5>
      <div class="card-body">
         <div class="row">
            <form action="{{route('admin.homepage.hero')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-floating form-floating-outline mb-4 col-6">
                  <input class="form-control" name="title" type="search" value="{{$herosection['title'] ?? ''}}" placeholder="Title ..." id="html5-search-input">
                  <label for="html5-search-input">Title Text</label>
               </div>
               <div class="mb-3 col-6">
                  <input class="form-control" name="image" type="file" id="formFile">
                  <label for="formFile" class="form-label">Right Side Image</label>
                  <div>
                     <input class="form-control" name="imagevaluename" value="{{$herosection['image'] ?? ''}}" type="hidden" id="formFile">
                  </div>
               </div>
               <div class="dt-button mb-4">
                  <button id="updateContent" class="dt-button add-new btn btn-primary waves-effect waves-light " type="submit">
                  <span><span class="">Update</span></span></button>
               </div>
         </div>
      </div>
      </form>
      <h5 class="card-header">Our Service Section</h5>
      <div class="card-body">
         <div class="row">
            <form action="{{route('admin.homepage.Service')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-floating form-floating-outline mb-4 col-6">
                  <input class="form-control" name="title" type="search" value="{{$servicesection['title'] ?? ''}}" placeholder="Title ..." id="html5-search-input">
                  <label for="html5-search-input">Title Text</label>
               </div>
               <div class="dt-button mb-4">
                  <button id="updateContent" class="dt-button add-new btn btn-primary waves-effect waves-light " type="submit">
                  <span><span class="">Update</span></span></button>
               </div>
         </div>
      </div>
      </form>
      <h5 class="card-header">How it works Section</h5>
      <div class="card-body">
         <div class="row">
            <form action="{{route('admin.homepage.hitwork')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-floating form-floating-outline mb-4 col-6">
                  <input class="form-control" name="title" type="search" value="{{$HowitworksSection['title'] ?? ''}}" placeholder="Title ..." id="html5-search-input">
                  <label for="html5-search-input">Title Text</label>
               </div>
               <div class="form-floating form-floating-outline mb-4 col-6">
                  <textarea class="form-control" style="height:130px;" name="Description" type="search" value="{{$HowitworksSection['Description'] ?? ''}}"  placeholder="Title ..." id="html5-search-input">{{$HowitworksSection['Description'] ?? ''}}</textarea>
                  <label for="html5-search-input">Description</label>
               </div>
               <div class="form-floating form-floating-outline mb-4 col-6">
                  <input class="form-control" name="text1" type="search" value="{{$HowitworksSection['text1'] ?? ''}}" placeholder="Title ..." id="html5-search-input">
                  <label for="html5-search-input">Item Text 1</label>
               </div>
               <div class="form-floating form-floating-outline mb-4 col-6">
                  <input class="form-control" name="text2" type="search" value="{{$HowitworksSection['text2'] ?? ''}}" placeholder="Title ..." id="html5-search-input">
                  <label for="html5-search-input">Item Text 2</label>
               </div>
               <div class="form-floating form-floating-outline mb-4 col-6">
                  <input class="form-control" name="text3" type="search" value="{{$HowitworksSection['text3'] ?? ''}}" placeholder="Title ..." id="html5-search-input">
                  <label for="html5-search-input">Item Text 3</label>
               </div>
               <div class="mb-3 col-6">
                  <input class="form-control" name="image" type="file" id="formFile">
                  <label for="formFile" class="form-label">Left Side Image</label>
                  <div>
                     <input class="form-control" name="imagevaluename" value="{{$HowitworksSection['image'] ?? ''}}" type="hidden" id="formFile">
                  </div>
               </div>
               <div class="dt-button mb-4">
                  <button id="updateContent" class="dt-button add-new btn btn-primary waves-effect waves-light " type="submit">
                  <span><span class="">Update</span></span></button>
               </div>
         </div>
      </div>
      </form>

      <h5 class="card-header">Meet some of our Stars Section</h5>
      <div class="card-body">
         <div class="row">
            <form action="{{route('admin.homepage.msomeostar')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-floating form-floating-outline mb-4 col-6">
                  <input class="form-control" name="title" type="search" value="{{$MeetsomeofourStarsSection['title'] ?? ''}}" placeholder="Title ..." id="html5-search-input">
                  <label for="html5-search-input">Title Text</label>
               </div>
               <div class="dt-button mb-4">
                  <button id="updateContent" class="dt-button add-new btn btn-primary waves-effect waves-light " type="submit">
                  <span><span class="">Update</span></span></button>
                  <a href="{{route('admin.homepage.addstar')}}" class="dt-button add-new btn btn-primary waves-effect waves-light mx-3" type="submit">
                  <span><span class="">Add Star</span></span></a>
               </div>
         </div>
      </div>
      </form>
            <h5 class="card-header">Partner Logo Section</h5>
      <div class="card-body">
         <div class="row">
            <form action="{{route('admin.homepage.brand')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="mb-3 col-6">
                  <input class="form-control" name="Photo[]" multiple type="file" id="formFile">
                  <label for="formFile" class="form-label">Partner Logo</label>
                  <div>
                  </div>
               </div>
  
  
               <div class="dt-button mb-4">
                  <button id="updateContent" class="dt-button add-new btn btn-primary waves-effect waves-light" type="submit">
                  <span><span class="">Update</span></span></button>
               </div>
               
               
         </div>
                                   <div class="form-floating form-floating-outline mb-4 col-12" style="background-color:gray;">
                                <div class="row" style="width: 100% !important;
    max-width: 89% !important;" id="imageContainer">
    @if(isset($Brands))
    @foreach ($Brands as $key => $photo)
        <div class="col-4 mt-2">
         
                <div class="image-wrapper">
                      <input type="hidden" class="image-id" value="{{ $photo->id }}">
                    <button type="button" class="close" data-index="{{ $key }}">
                        <span>&times;</span>
                    </button>
                    <img class="w-100" src="{{ asset('public/siteLogo') }}/{{ $photo->brand }}" alt="Image">
                </div>
          
        </div>
    @endforeach
    @endif
</div>
</div> 
      </div>
      </form>
   </div>
</div>
<!-- /Full Editor -->
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    $('.close').on('click', function() {
        var imageIndex = $(this).data('index');
        var imageId = $(this).closest('.image-wrapper').find('.image-id').val();
        
        // Send AJAX GET request to delete the image
        $.ajax({
            type: 'GET',
            url: '/admin/delete-brand/' + imageId, // Pass the ID of the image to delete
            success: function(response) {
                // If deletion is successful, remove the corresponding image container
                if (response.success) {
                    $('[data-index="' + imageIndex + '"]').closest('.col-4').remove();
                } else {
                    console.error('Failed to delete image.');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error deleting image:', error);
            }
        });
    });
});
</script>


@section('userList')
<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/js/forms-editors.js')}}"></script>
@endsection