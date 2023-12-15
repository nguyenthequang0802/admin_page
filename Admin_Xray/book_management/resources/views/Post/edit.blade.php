@extends("layout.adminLayoutPage")
@section("content")
    <div class="col-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Add Post</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route('post.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{$post->slug}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{$post->description}}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" class="form-control" id="image" name="image" value="{{$post->image}}">
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="seo_title">SEO Title</label>
                                <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{$post->seo->seo_title}}">
                            </div>
                            <div class="form-group">
                                <label for="seo_keywords">SEO Keywords</label>
                                <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" value="{{$post->seo->seo_keywords}}">
                            </div>
                            <div class="form-group">
                                <label for="seo_description">SEO Description</label>
                                <input type="text" class="form-control" id="seo_description" name="seo_description" value="{{$post->seo->seo_description}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="tinyMce" name="content">{!! $post->content !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

