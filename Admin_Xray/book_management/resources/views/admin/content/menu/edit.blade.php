@extends("layout.adminLayoutPage")
@section('content')
    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Thêm mới Menu</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route('admin.menu.edit', $item->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="menu_name">Tên Menu:</label>
                        <input type="text" class="form-control" id="menu_name" name="menuName" value="{{$item->menu_name}}">
                    </div>
                    <div class="form-group">
                        <label for="menuParentId">Parent id:</label>
                        <select class="form-control form-control-sm mb-3" id="menuParentId" name="menuParentId">
                            <option value="0">Không có menu cha</option>
                            @include('admin.content.menu.edit_menu_selected', ['menus'=>$menus, 'level'=>0, 'item'=>$item])
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="menuUrl">Menu URL:</label>
                        <input type="text" class="form-control" id="menuUrl" name="menuUrl" value="{{$item->menu_url}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
