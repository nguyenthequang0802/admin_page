@extends("layout.adminLayoutPage")
@section("content")
    <div class="col-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Post table</h4>
                </div>
                <div>
                    <span class="table-add float-right mr-2">
                        <a href="{{route('post.add')}}">
                            <button class="btn btn-success">
                                <i class="ri-add-fill"><span class="pl-1">Thêm mới</span></i>
                            </button>
                        </a>
                    </span>
                </div>
            </div>
            <div class="iq-card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">slug</th>
                        <th scope="col">description</th>
                        <th scope="col">image</th>
                        <th scope="col">content</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{($posts->currentPage()-1)*$posts->perPage()+$loop->index+1}}</th>
                                <td>{{$post->title}}</td>
                                <td>{{$post->slug}}</td>
                                <td>{{$post->description}}</td>
                                <td><img src="{{$post->image}}" style="height: 450px; width: 350px"></td>
                                <td>{!! $post->content !!}</td>
                                <td>
                                    <a href="{{route("post.edit", $post->id)}}">
                                        <button type="button" class="btn btn-warning mb-3">
                                            <i class="fa-regular fa-pen-to-square" style="margin: 0"></i>
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#post-{{$post->id}}">
                                        <i class="fa-solid fa-eye" style="margin: 0"></i>

                                    </button>
                                    @include ("Post.post_modal")
                                    <button type="button" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#seo-{{$post->seo->id}}">
                                        <i class="fa-regular fa-note-sticky" style="margin: 0"></i>
                                    </button>
                                    @include ("Post.seo_modal")
                                    <a href="{{route("post.destroy", $post->id)}}"
                                       onclick="return confirm('Bạn có muốn xóa không?');" >
                                        <button type="button" class="btn btn-danger mb-3">
                                            <i class="fa fa-trash" aria-hidden="true" class="text-center" style="margin: 0"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-3.5">{{$posts->links('vendor.pagination.tailwind')}}</div>
    </div>
@endsection
