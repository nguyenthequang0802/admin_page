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
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td>{{$post->slug}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->image}}</td>
                                <td>{{$post->content}}</td>
                                <td>
                                    <a href="{{route("post.edit", $post->id)}}">
                                        <button type="button" class="btn btn-warning mb-3">
                                            <i class="fa-regular fa-pen-to-square" style="margin: 0"></i>
                                        </button>
                                    </a>
                                    <a href="{{route("post.show", $post->id)}}">
                                        <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="fa-solid fa-eye" style="margin: 0"></i>
                                        </button>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">{{ $post->title }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">title</th>
                                                                <th scope="col">slug</th>
                                                                <th scope="col">description</th>
                                                                <th scope="col">image</th>
                                                                <th scope="col">content</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            <tr>
                                                                <th scope="row">{{$show_post->id}}</th>
                                                                <td>{{$show_post->title}}</td>
                                                                <td>{{$show_post->slug}}</td>
                                                                <td>{{$show_post->description}}</td>
                                                                <td>{{$show_post->image}}</td>
                                                                <td>{{$show_post->content}}</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
    </div>
@endsection
