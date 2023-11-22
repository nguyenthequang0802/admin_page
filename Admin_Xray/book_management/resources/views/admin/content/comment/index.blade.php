@extends("layout.adminLayoutPage")
@section("content")
    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Bảng Comment</h4>
                </div>
                <div>
                    <span class="table-add float-right mr-2">
                        <a href="{{route('admin.user.add')}}">
                            <button class="btn btn-success">
                                <i class="ri-add-fill"><span class="pl-1">Thêm mới</span></i>
                            </button>
                        </a>
                    </span>
                </div>
            </div>
            <div class="iq-card-body">
                <div id="table" class="table-editable">
                    <table class="table table-bordered table-responsive-md table-striped ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>parent_id</th>
                            <th>content</th>
                            <th>review_id</th>
                            <th>user_id</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('admin.content.comment.row_table', ['comments'=>$comments, 'level'=>0])
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
