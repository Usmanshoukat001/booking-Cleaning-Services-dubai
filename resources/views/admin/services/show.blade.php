
text/x-generic edit.blade.php ( exported SGML document, ASCII text, with CRLF line terminators )
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
          <h4 class="mb-1 mt-3"> {{$service->servicename}} Service</h4>
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
             <p><b>Service Name:</b> {{$service->servicename}}</p>
                
              </div>
              <div class="form-floating form-floating-outline mb-4">
              <p><b>One Line Description:</b> {{$servicedata['shortDescription']}}</p>
               
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
               <p><b>Service Price:</b> {{$servicedata['PRICE'] ?? ''}}</p>
              </div>

              <!-- Discounted Price -->
              <div class="form-floating form-floating-outline mb-4">
              <p><b>Service VAT:</b> {{$servicedata['VAT'] ?? ''}}</p>
               </div>
              
               <div class="form-floating form-floating-outline mb-4">
               <p><b>Per professionals Price:</b> {{$servicedata['professionalsPRICE'] ?? ''}}</p>
               
              </div>

              <!-- Discounted Price -->
              <div class="form-floating form-floating-outline mb-4">
              <p><b>Per professionals VAT:</b> {{$servicedata['professionalsVAT'] ?? ''}}</p>
               </div>
              
               <div class="form-floating form-floating-outline mb-4">
               <p><b>Per Hours Price:</b> {{$servicedata['HoursPRICE'] ?? ''}}</p>
                </div>

              <!-- Discounted Price -->
              <div class="form-floating form-floating-outline mb-4">
              <p><b>Per Hours VAT:</b> {{$servicedata['HoursVAT'] ?? ''}}</p>
               </div>
              
               <div class="form-floating form-floating-outline mb-4">
               <p><b>Material Price:</b> {{$servicedata['MaterialPRICE'] ?? ''}}</p>
             </div>

              <!-- Discounted Price -->
              <div class="form-floating form-floating-outline mb-4">
              <p><b>Material VAT:</b> {{$servicedata['MaterialVAT'] ?? ''}}</p>
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
              <p><b>icons</b></p>
                <img height="50" src="{{ asset('public/service/' . $servicedata['serviceicon'] ?? '') }}" />
              </div>
              <div>
                <p><b>Service Image</b></p>
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
});

var modelDescription = {!! json_encode($servicedata['modelDescription']) !!};

// Set the content of the Quill editor
fullEditor.clipboard.dangerouslyPasteHTML(modelDescription);
  const fullEditors = new Quill('#full-editor3', {
    bounds: '#full-editor3',
    placeholder: 'Type Something...',
    
  });
  
</script>

@endsection