@extends("layout.adminLayoutPage")
@section("content")
    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">User</h4>
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
                            <th>name</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('admin.content.user.row_table', ['users'=>$users, 'level'=>0])
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">{{$users->links('vendor.pagination.tailwind')}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
