@extends('backend.master')
   @section('main_content')
   
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Id.</th>
                        <th>Category Name</th>
                        <th style="width:50%">Category Description</th>
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
    
    var table = $('#example2').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('category.datatable') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'category_name', name: 'category_name'},
            {data: 'category_description', name: 'category_description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script> 
@endpush