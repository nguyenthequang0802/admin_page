@extends("layout.adminLayoutPage")
@section('content')
    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Thêm mới danh mục</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route('admin.category.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="category_name">Tên Menu:</label>
                        <input type="text" class="form-control" id="category_name" name="categoryName">
                    </div>
                    <div class="form-group">
                        <label for="categoryParentId">Parent id:</label>
                        <select class="form-control form-control-sm mb-3" id="categoryParentId" name="categoryParentId">
                            <option value="0">Không có category cha</option>
                            @include('admin.content.category.category_option', ['categories'=>$categories, 'level'=>0])
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categorySlug">Slug:</label>
                        <input type="text" class="form-control" id="categorySlug" name="categorySlug">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
