@extends('backend.master')
   @section('main_content')
   
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Id.</th>
                        <th>Post Title</th>
                        <th>Category Name</th>
                        <th style="width: 50%;">Post Description</th>
                        <th>Post Image</th>
                        <th>Post Status</th>
                        <th>Action</th>
                       
                    </tr>
                  </thead>
                  
                 <tbody>

                 </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
          </div>
          <!-- /.col -->
        
   @endsection

@push('custom-scripts')

<script>
  $(function () {
    
    var table = $('#example3').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('post.datatable') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'post_title', name: 'post_title'},
            {data: 'category_name', name: 'category_name'},
            {data: 'post_description', name: 'post_description'},
            {data: 'post_image', name: 'post_image'},
            {data: 'post_status', name: 'post_status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script> 
@endpush