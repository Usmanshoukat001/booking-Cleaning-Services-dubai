@extends('admin.layout.app')
@section('links')
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection
@section('content')

<!-- Full Editor -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">Terms Content</h5>
        <div class="card-body">
              <div class="row">
                  <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" name="Title" type="search" value="{{ $terms['title'] ?? ''}}" placeholder="Title ..." id="html5-search-input">
                                    <label for="html5-search-input">Page H1 Title</label>
                                </div>
                                <div class="mb-3 col-6">
                                    <input class="form-control" name="image" type="file" id="formFile">
                                    <label for="formFile" class="form-label">Page Image</label>
                                    <div>
                                         <input class="form-control" name="imagevaluename" value="{{ $terms['image'] ?? ''}}" type="hidden" id="formFile">
                                    </div>
                                </div>
                               
                                </div>
            <div id="full-editor1222">
            {!! $terms['terms_content'] ?? '<h6>Here you manage content</h6>' !!} 
            </div>
        </div>
        <div class="dt-button mb-4">
            <button id="updateContent" class="dt-button add-new btn btn-primary waves-effect waves-light mx-5" type="button">
                <span><span class="">Update</span></span></button>
        </div>
    </div>
</div>
<!-- /Full Editor -->

@endsection
@php
$route = route('save.terms');
@endphp

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const route = <?php echo json_encode($route); ?>;

    $(document).ready(function() {
    $('#updateContent').on('click', function() {
        var title = $('input[name="Title"]').val();
        var image = $('input[name="image"]')[0].files[0]; // Get the file object
        var imagevaluename = $('input[name="imagevaluename"]').val();
        var terms_content = $('#full-editor1222').html();

        var formData = new FormData();
        formData.append('title', title);

        if (image) {
            formData.append('image', image);
        } else {
            formData.append('imagevaluename', imagevaluename);
        }

        formData.append('terms_content', terms_content);

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
                window.location.reload();
            },
            error: function(error) {
                console.error('Error updating content:', error);
            }
        });
    });
});


</script>
@section('userList')
<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/js/forms-editors.js')}}"></script>
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
const fullEditorsss = new Quill('#full-editor1222', {
    bounds: '#full-editor1222',
    placeholder: 'Type Something...',
    modules: {
        formula: true,
        toolbar: fullToolbar
    },
    theme: 'snow'
});

var modelDescription = {!! json_encode($terms['terms_content'] ) !!};

// Set the content of the Quill editor
fullEditorsss.clipboard.dangerouslyPasteHTML(modelDescription);


</script>
@endsection