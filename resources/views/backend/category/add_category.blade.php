@extends('backend.master')
   @section('main_content')

   <div class="col-md-7">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form  id="quickForm" method="post" action="{{route('save-category')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="category_name" class="form-control" placeholder="Enter category name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Description</label>
                    <input type="text"  name="category_description"  class="form-control"  placeholder="Enter category description">
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          

          </div>
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
</script>





@endpush