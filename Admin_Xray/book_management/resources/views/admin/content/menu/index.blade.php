@extends("layout.adminLayoutPage")
@section("content")
    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Editable Table</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <div id="table" class="table-editable">
                              <span class="table-add float-right mb-3 mr-2">
                                  <a href="{{route('admin.menu.add')}}">
                                      <button class="btn btn-sm iq-bg-success"><i class="ri-add-fill"><span class="pl-1">Thêm mới</span></i>
                                      </button>
                                  </a>

                              </span>
                    <table class="table table-bordered table-responsive-md table-striped ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>menu_name</th>
                                <th>menu_parent_id</th>
                                <th>menu_url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('admin.content.menu.row_table', ['menus'=>$menus, 'level'=>0])
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
