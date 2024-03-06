@extends('admin.layout.app') @section('links')
<link
  rel="stylesheet"
  href="{{asset('public/admin_asset/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"
/>
<link
  rel="stylesheet"
  href="{{asset('public/admin_asset/assets/vendor/libs/typeahead-js/typeahead.css')}}"
/>
<link
  rel="stylesheet"
  href="{{asset('public/admin_asset/assets/vendor/libs/quill/typography.css')}}"
/>
<link
  rel="stylesheet"
  href="{{asset('public/admin_asset/assets/vendor/libs/quill/katex.css')}}"
/>
<link
  rel="stylesheet"
  href="{{asset('public/admin_asset/assets/vendor/libs/quill/editor.css')}}"
/>
<link
  rel="stylesheet"
  href="{{asset('public/admin_asset/assets/vendor/libs/apex-charts/apex-charts.css')}}"
/>
@endsection @section('content')
@php
$servicedata = json_decode($service->pjson , true);
@endphp


<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="app-ecommerce">
      <!-- Add Service -->
      <div
        class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3"
      >
        <div class="d-flex flex-column justify-content-center">
          <h4 class="mb-1 mt-3">Update {{$service->servicename}} Service</h4>
        </div>
        <div class="d-flex align-content-center flex-wrap gap-3">
          <button
            id="updateContent"
            class="btn btn-primary waves-effect waves-light"
          >
            Update Service
          </button>
             <button
            id="updateContentload"
            class="btn btn-primary waves-effect waves-light d-none"
          ><div class="spinner-border spinner-border-sm " role="status"></div>
         
          </button>
        </div>
      </div>

      <div class="row">
        <!-- First column-->
        <div class="col-12 col-lg-8">
          <!-- Service Information -->
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-tile mb-0">Service information</h5>
            </div>
            <div class="card-body">
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  id="ecommerce-Service-name"
                  placeholder="Service title"
                  name="servicename"
                  aria-label="Service title"
                  value="{{$service->servicename}}"
                />
                <label for="ecommerce-Service-name">Name</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <textarea
                  type="text"
                  style="height: 80px"
                  maxlength="44"
                  class="form-control"
                  id="ecommerce-Service-name"
                  placeholder="Short Service Description"
                  name="shortDescription"
                  aria-label="Service title"
                  value="{{$servicedata['shortDescription']}}"
                >{{$servicedata['shortDescription']}}</textarea>
                <label for="ecommerce-Service-name">One Line Description</label>
              </div>
            <div>
                <label class="form-label">Long description </label>
              <div class="form-control p-0 pt-1">
                  <div id="full-editor3">{!! $servicedata['longDescription'] !!}</div>
                </div>
              </div>
          </div>
          </div>
          <!-- /Service Information -->

          <!-- Inventory -->
          <!--<div class="card mb-4">-->
          <!--  <div class="card-header">-->
          <!--    <h5 class="card-title mb-0">SERVICE Questions</h5>-->
          <!--  </div>-->
          <!--  <div class="card-body">-->
          <!--    <div class="row">-->
          <!-- Navigation -->
          <!--      <div class="col-12 col-md-4 mx-auto card-separator">-->
          <!--        <div class="d-flex justify-content-between flex-column mb-3 mb-md-0 pe-md-3">-->
          <!--          <ul class="nav nav-align-left nav-pills flex-column" role="tablist">-->
          <!--            <li class="nav-item" role="presentation">-->
          <!--              <button class="nav-link active waves-effect waves-light" data-bs-toggle="tab" data-bs-target="#restock" aria-selected="true" role="tab">-->

          <!--                <span class="align-middle">Frequency</span>-->
          <!--              </button>-->
          <!--            </li>-->
          <!--            <li class="nav-item" role="presentation">-->
          <!--              <button class="nav-link waves-effect waves-light" data-bs-toggle="tab" data-bs-target="#shipping" aria-selected="false" tabindex="-1" role="tab">-->

          <!--                <span class="align-middle">Duration</span>-->
          <!--              </button>-->
          <!--            </li>-->
          <!--            <li class="nav-item" role="presentation">-->
          <!--              <button class="nav-link waves-effect waves-light" data-bs-toggle="tab" data-bs-target="#global-delivery" aria-selected="false" tabindex="-1" role="tab">-->

          <!--                <span class="align-middle">Number of Professionals</span>-->
          <!--              </button>-->
          <!--            </li>-->
          <!--            <li class="nav-item" role="presentation">-->
          <!--              <button class="nav-link waves-effect waves-light" data-bs-toggle="tab" data-bs-target="#attributes" aria-selected="false" tabindex="-1" role="tab">-->

          <!--                <span class="align-middle">Material</span>-->
          <!--              </button>-->
          <!--            </li>-->

          <!--          </ul>-->
          <!--        </div>-->
          <!--      </div>-->
          <!-- /Navigation -->
          <!-- Options -->
          <!--      <div class="col-12 col-md-8 pt-4 pt-md-0">-->
          <!--        <div class="tab-content p-0 pe-xl-0 ps-md-3">-->
          <!-- Restock Tab -->
          <!--          <div class="tab-pane fade show active" id="restock" role="tabpanel">-->
          <!--            <h6 class="text-body">Frequency</h6>-->
          <!--            <div class="row mb-3 g-3">-->
          <!--              <div class="col-12 col-sm-8 col-lg-12 col-xxl-8">-->
          <!--                <div class="form-floating form-floating-outline">-->
          <!--                  <input type="text" class="form-control" id="ecommerce-Service-stock" value="One-time"  name="quantity" aria-label="Quantity">-->
          <!--                  <label for="ecommerce-Service-stock">Frequency</label>-->
          <!--                </div>-->
          <!--              </div>-->

          <!--            </div>-->
          <!--            <div>-->

          <!--            </div>-->
          <!--          </div>-->
          <!-- Shipping Tab -->
          <!--          <div class="tab-pane fade" id="shipping" role="tabpanel">-->
          <!--            <h6 class="text-body">Duration</h6>-->
          <!--            <div>-->
          <!--              <div class="col-12 col-sm-8 col-lg-12 col-xxl-8">-->
          <!--                <div class="form-floating form-floating-outline">-->
          <!--                  <input type="number" class="form-control" id="ecommerce-Service-stock" value=""  name="Price" aria-label="Quantity">-->
          <!--                  <label for="ecommerce-Service-stock">Price</label>-->
          <!--                </div>-->
          <!--              </div><br>-->
          <!--              <div class="col-12 col-sm-8 col-lg-12 col-xxl-8">-->
          <!--                <div class="form-floating form-floating-outline">-->
          <!--                  <input type="number" class="form-control" id="ecommerce-Service-stock" value=""  name="VAT" aria-label="Quantity">-->
          <!--                  <label for="ecommerce-Service-stock">VAT</label>-->
          <!--                </div>-->
          <!--              </div>-->
          <!--            </div>-->
          <!--          </div>-->
          <!-- Global Delivery Tab -->
          <!--          <div class="tab-pane fade" id="global-delivery" role="tabpanel">-->
          <!--            <h6 class="text-body">Single Professionals</h6>-->
          <!--           <div class="col-12 col-sm-8 col-lg-12 col-xxl-8">-->
          <!--                <div class="form-floating form-floating-outline">-->
          <!--                  <input type="number" class="form-control" id="ecommerce-Service-stock" value=""  name="Price" aria-label="Quantity">-->
          <!--                  <label for="ecommerce-Service-stock">Price</label>-->
          <!--                </div>-->
          <!--              </div><br>-->
          <!--              <div class="col-12 col-sm-8 col-lg-12 col-xxl-8">-->
          <!--                <div class="form-floating form-floating-outline">-->
          <!--                  <input type="number" class="form-control" id="ecommerce-Service-stock" value=""  name="VAT" aria-label="Quantity">-->
          <!--                  <label for="ecommerce-Service-stock">VAT</label>-->
          <!--                </div>-->
          <!--              </div>-->
          <!--          </div>-->
          <!-- Attributes Tab -->
          <!--          <div class="tab-pane fade" id="attributes" role="tabpanel">-->
          <!--            <h6 class="text-body">Material</h6>-->
          <!--            <div>-->
          <!--            <div class="col-12 col-sm-8 col-lg-12 col-xxl-8">-->
          <!--                <div class="form-floating form-floating-outline">-->
          <!--                  <input type="number" class="form-control" id="ecommerce-Service-stock" value=""  name="Price" aria-label="Quantity">-->
          <!--                  <label for="ecommerce-Service-stock">Price</label>-->
          <!--                </div>-->
          <!--              </div><br>-->
          <!--              <div class="col-12 col-sm-8 col-lg-12 col-xxl-8">-->
          <!--                <div class="form-floating form-floating-outline">-->
          <!--                  <input type="number" class="form-control" id="ecommerce-Service-stock" value=""  name="VAT" aria-label="Quantity">-->
          <!--                  <label for="ecommerce-Service-stock">VAT</label>-->
          <!--                </div>-->
          <!--              </div>-->
          <!--            </div>-->
          <!--          </div>-->
          <!-- /Attributes Tab -->
          <!--        </div>-->
          <!--      </div>-->
          <!-- /Options-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!-- /Inventory -->
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-tile mb-0">Model information</h5>
            </div>
            <div class="card-body">
              <div>
                <label class="form-label">Long description </label>
                <div class="form-control p-0 pt-1">
                  <div id="full-editor1">{!!$servicedata['modelDescription']!!}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Second column -->

        <!-- Second column -->
        <div class="col-12 col-lg-4">
          <!-- Pricing Card -->
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title mb-0">Pricing</h5>
            </div>
            <div class="card-body">
               <!-- Base Price -->
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  id="ecommerce-Service-price"
                  placeholder="Price"
                  name="PRICE"
                  value="{{$servicedata['PRICE'] ?? ''}}"
                  aria-label="Service price"
                />
                <label for="ecommerce-Service-price">Service Price</label>
              </div>

              <!-- Discounted Price -->
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  id="ecommerce-Service-discount-price"
                  placeholder="VAT"
                  name="VAT"
                   value="{{$servicedata['VAT'] ?? ''}}"
                  aria-label="Service discounted price"
                />
                <label for="ecommerce-Service-discount-price">Service VAT</label>
              </div>
              
               <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  id="ecommerce-Service-price"
                  placeholder="professionalsPrice"
                  name="professionalsPRICE"
                   value="{{$servicedata['professionalsPRICE'] ?? ''}}"
                  aria-label="Service price"
                />
                <label for="ecommerce-Service-price">Per professionals Price</label>
              </div>

              <!-- Discounted Price -->
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  id="ecommerce-Service-discount-price"
                  placeholder="VAT"
                  name="professionalsVAT"
                  aria-label="Service discounted price"
                  value="{{$servicedata['professionalsVAT'] ?? ''}}"
                />
                <label for="ecommerce-Service-discount-price">Per professionals VAT</label>
              </div>
              
               <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  id="ecommerce-Service-price"
                  placeholder="Price"
                  name="HoursPRICE"
                  aria-label="Service price"
                  value="{{$servicedata['HoursPRICE'] ?? ''}}"
                />
                <label for="ecommerce-Service-price">Per Hours Price</label>
              </div>

              <!-- Discounted Price -->
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  id="ecommerce-Service-discount-price"
                  placeholder="VAT"
                  name="HoursVAT"
                  aria-label="Service discounted price"
                  value="{{$servicedata['HoursVAT'] ?? ''}}"
                />
                <label for="ecommerce-Service-discount-price">Per Hours VAT</label>
              </div>
              
               <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  id="ecommerce-Service-price"
                  placeholder="Price"
                  name="MaterialPRICE"
                  aria-label="Service price"
                  value="{{$servicedata['MaterialPRICE'] ?? ''}}"
                />
                <label for="ecommerce-Service-price">Material Price</label>
              </div>

              <!-- Discounted Price -->
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  id="ecommerce-Service-discount-price"
                  placeholder="VAT"
                  name="MaterialVAT"
                  aria-label="Service discounted price"
                  value="{{$servicedata['MaterialVAT'] ?? ''}}"
                />
                <label for="ecommerce-Service-discount-price">Material VAT</label>
              </div>
            </div>
          </div>
          <!-- /Pricing Card -->
          <!-- Organize Card -->
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title mb-0">Media</h5>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label for="formFile" class="form-label"
                  >Service Icon
                  <span class="text-muted">(Optional)</span></label
                >
                <input class="form-control" type="file" name="serviceicon" />
                <input class="form-control" type="hidden" value="{{$servicedata['serviceicon']  ?? ''}}" name="serviceiconbackup" /><br>
                
                <img height="50" src="{{ asset('public/service/' . $servicedata['serviceicon'] ?? '') }}" />
              </div>
              <div>
                <label for="formFileDisabled" class="form-label"
                  >Service Image</label
                >
                <input
                  class="form-control"
                  name="serviceimage"
                  type="file"
                  id="formFileDisabled"
                />
                 <input class="form-control" type="hidden" value="{{$servicedata['serviceimage']}}" name="serviceimagebackup" />
                <br>
                <img height="50" src="{{ asset('public/service/' . $servicedata['serviceimage'] ?? '') }}" />
              </div>
            </div>
          </div>
          <!-- /Organize Card -->
        </div>
        <!-- /Second column -->
      </div>
    </div>
  </div>
</div>
@php
$route = route('serviceupdate',$service->id);
@endphp
@endsection 
@section('userList')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/dropzone/dropzone.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/js/forms-editors.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/js/main.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/js/app-ecommerce-product-add.js')}}"></script>
<script>
    const route = <?php echo json_encode($route); ?>;
$(document).ready(function() {
     $('#updateContent').on('click', function() {
         $('#updateContent').addClass('d-none');
         $('#updateContentload').removeClass('d-none');
var servicename = $('input[name="servicename"]').val();
var shortDescription = $('textarea[name="shortDescription"]').val();
var modelDescription = $('#full-editor1').html();
var longDescription = $('#full-editor3').html();
var PRICE = $('input[name="PRICE"]').val();
var VAT = $('input[name="VAT"]').val();
var professionalsPRICE = $('input[name="professionalsPRICE"]').val();
var professionalsVAT = $('input[name="professionalsVAT"]').val();
var HoursPRICE = $('input[name="HoursPRICE"]').val();
var HoursVAT = $('input[name="HoursVAT"]').val();
var MaterialPRICE = $('input[name="MaterialPRICE"]').val();
var MaterialVAT = $('input[name="MaterialVAT"]').val();
var serviceicon = $('input[name="serviceicon"]')[0].files[0];
if(!serviceicon){
    var serviceicon = $('input[name="serviceiconbackup"]').val();
}

var serviceimage = $('input[name="serviceimage"]')[0].files[0];
if(!serviceimage){
    var serviceimage = $('input[name="serviceimagebackup"]').val();
}
        var formData = new FormData();
        formData.append('servicename', servicename);
        formData.append('shortDescription', shortDescription);
        formData.append('longDescription', longDescription);
        formData.append('modelDescription', modelDescription);
        formData.append('PRICE', PRICE);
        formData.append('VAT', VAT);
                formData.append('professionalsPRICE', professionalsPRICE);
        formData.append('professionalsVAT', professionalsVAT);
        formData.append('HoursPRICE', HoursPRICE);
        formData.append('HoursVAT', HoursVAT);
        formData.append('MaterialPRICE', MaterialPRICE);
        formData.append('MaterialVAT', MaterialVAT);
       
         formData.append('serviceicon', serviceicon);
      formData.append('serviceimage', serviceimage);    
      

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            url: route,
            method: 'POST',
            processData: false,
            contentType: false,
            data: formData,
         success: function(response) {
      $('#updateContent').removeClass('d-none');
         $('#updateContentload').addClass('d-none');
        // Check if the response contains a success message
       if (response.message) {
    alert(response.message);
    
}

    },
    error: function(xhr) {
        console.error('Error updating content:', xhr);
 $('#updateContent').removeClass('d-none');
         $('#updateContentload').addClass('d-none');
        // Check if the response contains an error message
        if (xhr.responseJSON && xhr.responseJSON.message) {
            alert(xhr.responseJSON.message);
            // Handle other errors if needed
        } else {
            alert('An unexpected error occurred.');
        }
    }
        });
    });
});
const fullToolbar = [
    [
      {
        font: []
      },
      {
        size: []
      }
    ],
    ['bold', 'italic', 'underline', 'strike'],
    [
      {
        color: []
      },
      {
        background: []
      }
    ],
    [
      {
        script: 'super'
      },
      {
        script: 'sub'
      }
    ],
    [
      {
        header: '1'
      },
      {
        header: '2'
      },
      'blockquote',
      'code-block'
    ],
    [
      {
        list: 'ordered'
      },
      {
        list: 'bullet'
      },
      {
        indent: '-1'
      },
      {
        indent: '+1'
      }
    ],
    [{ direction: 'rtl' }],
    ['link', 'image', 'video', 'formula'],
    ['clean']
  ];
// Create a Quill instance on the div
const fullEditor = new Quill('#full-editor1', {
    bounds: '#full-editor1',
    placeholder: 'Type Something...',
    modules: {
        formula: true,
        toolbar: fullToolbar
    },
    theme: 'snow'
});

var modelDescription = {!! json_encode($servicedata['modelDescription']) !!};

// Set the content of the Quill editor
fullEditor.clipboard.dangerouslyPasteHTML(modelDescription);
  const fullEditors = new Quill('#full-editor3', {
    bounds: '#full-editor3',
    placeholder: 'Type Something...',
    modules: {
      formula: true,
      toolbar: fullToolbar
    },
    theme: 'snow'
  });
  
</script>

@endsection
