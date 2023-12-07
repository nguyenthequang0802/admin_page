@extends("layout.adminLayoutPage")
@section("content")
    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Review Table</h4>
                </div>
                <div>
                    <span class="table-add float-right mr-2">
                        <a href="{{route('admin.review.add')}}">
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
                            <th>category_id</th>
                            <th>name</th>
                            <th>description</th>
                            <th>content</th>
                            <th>user_id</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('admin.content.review.row_table', ['reviews'=>$reviews, 'level'=>0])
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">{{$reviews->links('vendor.pagination.tailwind')}}</div>
            </div>
        </div>
    </div>
@endsection
