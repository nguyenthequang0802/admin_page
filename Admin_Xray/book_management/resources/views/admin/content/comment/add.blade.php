@extends("layout.adminLayoutPage")
@section('content')
    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Thêm mới comment</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route('admin.comment.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="content_comment">Content:</label>
                        <input type="text" class="form-control" id="content_comment" name="contentComment">
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Parent id:</label>
                        <select class="form-control form-control-sm mb-3" id="parent_id" name="parentId">
                            <option value="0">Không có id cha</option>
                            @include('admin.content.comment.comment_option', ['comments'=>$comments, 'level'=>0])
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="review_id">review id:</label>
                        <input type="text" class="form-control" id="review_id" name="reviewId">
                    </div>
                    <div class="form-group">
                        <label for="user_id">user id:</label>
                        <input type="text" class="form-control" id="user_id" name="userId">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
