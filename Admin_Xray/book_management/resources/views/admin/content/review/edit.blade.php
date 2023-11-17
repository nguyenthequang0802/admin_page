@extends("layout.adminLayoutPage")
@section('content')
    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Sửa review</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route('admin.review.edit', $item->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="category_id">Category id:</label>
                        <input type="text" class="form-control" id="category_id" name="categoryId" value="{{$item->category_id}}">
                    </div>
                    <div class="form-group">
                        <label for="review_name">Review Name:</label>
                        <input type="text" class="form-control" id="review_name" name="reviewName" value="{{$item->name}}">
                    </div>
                    <div class="form-group">
                        <label for="review_image">Image:</label>
                        <input type="text" class="form-control" id="review_image" name="reviewImage" value="{{$item->preview_image}}">
                    </div>
                    <div class="form-group">
                        <label for="review_description">Description:</label>
                        <input type="text" class="form-control" id="review_description" name="reviewDescription" value="{{$item->description}}">
                    </div>
                    <div class="form-group">
                        <label for="review_content">Content:</label>
                        <input type="text" class="form-control" id="review_content" name="reviewContent" value="{{$item->content}}">
                    </div>
                    <div class="form-group">
                        <label for="user_id">User Id:</label>
                        <input type="text" class="form-control" id="user_id" name="userId" value="{{$item->user_id}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
