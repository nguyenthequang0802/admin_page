@extends("layout.adminLayoutPage")
@section('content')
    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Thêm mới review</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route('admin.review.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="category_id">Category id:</label>
                        <input type="text" class="form-control" id="category_id" name="categoryId">
                    </div>
                    <div class="form-group">
                        <label for="review_name">Review Name:</label>
                        <input type="text" class="form-control" id="review_name" name="reviewName">
                    </div>
                    <div class="form-group">
                        <label for="review_image">Image:</label>
                        <input type="text" class="form-control" id="review_image" name="reviewImage">
                    </div>
                    <div class="form-group">
                        <label for="review_description">Description:</label>
                        <input type="text" class="form-control" id="review_description" name="reviewDescription">
                    </div>
                    <div class="form-group">
                        <label for="review_content">Content:</label>
                        <textarea class="tinyMce" id="review_content" name="reviewContent"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="user_id">User Id:</label>
                        <input type="text" class="form-control" id="user_id" name="userId">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
