@extends('layout.dashbord')


@section('content')
    <main id="main-container">
        <!-- Page Content -->

            <!-- Page Content -->

            <div class="content">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title"><small>Get Started</small> Blank</h3>
                        <div class="block-options pl-0">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                <i class="si si-pin"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <h2>دسته بندی ها</h2>
                        <button class="btn-success btn my-5 mx-5" id="getAddtArticleData">افزودن</button>
                        <table class="table yajra-dt" id="Category_Table">
                            <thead>

                            <tr>

                                <th>Id</th>
                                <th>Name</th>
                                <th>فعالیت</th>

                            </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>

            <!-- END Page Content -->

            <!--  -->
    </main>

    <div class="modal" id="CreateArticleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Article Create</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                        <strong>Success!</strong>Article was added successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" id="description">
                    </textarea>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="SubmitCreateArticleForm">Create</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Article Modal -->
    <div class="modal" id="EditArticleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Article Edit</h4>
                    <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                        <strong>Success!</strong>Article was added successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="EditArticleModalBody">

                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="SubmitEditArticleForm">Update</button>
                    <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal"  id="addArticleModal">
        <div class="modal-dialog">
            <div class="modal-content" style="box-shadow: rgba(29,33,36,0.78) 0px 0px 10px; border-radius: 10px">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">افزودن دسته بندی</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text"name="name"id="AddName">
                        </div>

                    </form>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                        <strong>Success!</strong>Article was added successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="EditArticleModalBody">

                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="SubmitAddArticleForm">افزودن</button>
                    <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="ChengRoleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">تغییر نقش کاربر</h4>
                    <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                        <strong>Success!</strong>Article was added successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="EditArticleModalBody">

                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="SubmitEditArticleForm">Update</button>
                    <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Article Modal -->
    <div class="modal" id="DeleteArticleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Article Delete</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <h4>Are you sure want to delete this Article?</h4>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="SubmitDeleteArticleForm">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>


            <!--js code here-->

            </div>
            </div>
            </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- END Page Content -->
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
       $(function () {

           var table = $('#Category_Table').DataTable({
               processing: true,
               serverSide: true,
               ajax:"{{route("category.index")}}",
               columns: [{
                   data: 'id',
                   name: 'id'
               },
                   {
                       data: 'name',
                       name: 'name'
                   },
                   {
                       data: 'action',
                       name: 'action',
                       orderable: true,
                       searchable: true
                   }
               ]
           });


       });
           $(document).ready(function() {
           // init datatable.

           // Create article Ajax request.
           $('#SubmitCreateArticleForm').click(function(e) {
           e.preventDefault();
           $.ajaxSetup({
           headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       });
           $.ajax({
           url: "{{ route('category.store') }}",
           method: 'post',
           data: {
           name: $('#editTitle').val(),
       },
           success: function(result) {
           if(result.errors) {
           $('.alert-danger').html('');
           $.each(result.errors, function(key, value) {
           $('.alert-danger').show();
           $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
       });
       } else {
           $('.alert-danger').hide();
           $('.alert-success').show();
           $('.datatable').DataTable().ajax.reload();
           setInterval(function(){
           $('.alert-success').hide();
           $('#CreateArticleModal').modal('hide');
           location.reload();
       }, 2000);
       }
       }
       });
       });

           // Get single article in EditModel
           $('.modelClose').on('click', function(){
           $('#EditArticleModal').hide();
           $('#addArticleModal').hide();
       });
           var id;

           $('body').on('click', '#getEditArticleData', function(e) {
           e.preventDefault();
           $('.alert-danger').html('');
           $('.alert-danger').hide();
           id = $(this).data('id');

           $.ajax({
           url: "category/"+id+"/edit",
           method: 'GET',
           // data: {
           //     id: id,
           // },
           success: function(result) {
           console.log(result);
           $('#EditArticleModalBody').html(result.html);
           $('#EditArticleModal').show();
       }
       });
       });
           $('body').on('click', '#getAddtArticleData', function(e) {
           // e.preventDefault();

           $('.alert-danger').html('');
           $('.alert-danger').hide();
           id = $(this).data('id');

               $('#addArticleModal').show();

       });

           // Update article Ajax request.
           $('#SubmitEditArticleForm').click(function(e) {
           e.preventDefault();
           $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       });
           $.ajax({

           url: "category/"+id,
           method: 'PUT',
           data: {
           name: $('#editTitle').val(),
               _token: '{{csrf_token()}}',
           },
           success: function(result) {
           if(result.errors) {
           $('.alert-danger').html('');
           $.each(result.errors, function(key, value) {
           $('.alert-danger').show();
           $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
       });
       } else {
               // alert("ok");
           $('.alert-danger').hide();
           $('.alert-success').show();
           $('#Category_Table').DataTable().ajax.reload();
           setInterval(function(){
           $('.alert-success').hide();
           $('#EditArticleModal').hide();
       }, 1000);
       }
       }
       });
       });
           $('#SubmitAddArticleForm').click(function(e) {
                   e.preventDefault();
                   $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });
                   $.ajax({

                       url: "category/",
                       method: 'POST',
                       data: {
                           name: $('#AddName').val(),
                           _token: '{{csrf_token()}}',
                       },
                       success: function(result) {
                           if(result.errors) {
                               $('.alert-danger').html('');
                               $.each(result.errors, function(key, value) {
                                   $('.alert-danger').show();
                                   $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                               });
                           } else {
                               // alert("ok");
                               $('.alert-danger').hide();
                               $('.alert-success').show();
                               $('#Category_Table').DataTable().ajax.reload();
                               setInterval(function(){
                                   $('.alert-success').hide();
                                   $('#EditArticleModal').hide();
                               }, 1000);
                           }
                       }
                   });
               });
           $('#SubmitEditRolese').click(function (e){

           })
           // Delete article Ajax request.
           var deleteID;
           $('body').on('click', '#getDeleteId', function(){
           deleteID = $(this).data('id');
       })
           $('#SubmitDeleteArticleForm').click(function(e) {
           e.preventDefault();
           var id = deleteID;
           $.ajaxSetup({
           headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       });
           $.ajax({
           url: "category/"+id,
           method: 'DELETE',
               data:{
                   _token: '{{csrf_token()}}',
               }
               ,
           success: function(result) {
           setInterval(function(){
           $('#Category_Table').DataTable().ajax.reload();
           $('#DeleteArticleModal').hide();
           $('.modal').hide();

       }, 1000);
       }
       });
       });
       });

   </script>
@endsection
