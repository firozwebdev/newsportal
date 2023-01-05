@extends('backend.master')
   @section('main_content')


    <section class="content">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form  id="quickForm" method="post" action="{{route('save.post')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="text" name="post_title" class="form-control" placeholder="Enter Post Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <select class="form-control" name="category_name" id="">
                        @foreach($categories as $category)
                            <option>{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Image</label>
                    <div class="input-group">
                  
                      <div class="custom-file">
                        <input name="post_image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Description</label>
                    <textarea name="post_description" id="summernote">
                            Place post descriptin
                    </textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Post Status</label>
                    <select class="form-control" name="post_status" id="">
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Inactive</option>
                    </select>
                  </div>

                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
      
      <!-- ./row -->

      <!-- ./row -->
    </section>
    <!-- /.content -->
 
  <!-- /.content-wrapper -->
@endsection

@push('custom-scripts')
<script>
    $(function () {
        // $.validator.setDefaults({
        //     submitHandler: function () {
        //     alert( "Form successful submitted!" );
        //     }
        // });
    $('#quickForm').validate({
        rules: {
        category_name: {
            required: true,
           
        },
        category_description: {
            required: true,
            minlength: 5
        }
       
        },
        messages: {
        category_name: {
            required: "Please enter a category name"
            
        },
        category_description: {
            required: "Please enter a category description"
            
        }
        
    } ,
        errorElement: 'span',
        errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        }
    });
    });



    $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })

</script>





@endpush