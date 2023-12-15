@extends("layout.adminLayoutPage")
@section("content")
    <div class="col-sm-12 col-lg-6">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">SEO table</h4>
                </div>
                <div>
                    <span class="table-add float-right mr-2">
                        <a href="{{route('seo.add')}}">
                            <button class="btn btn-success">
                                <i class="ri-add-fill"><span class="pl-1">Thêm mới</span></i>
                            </button>
                        </a>
                    </span>
                </div>
            </div>
            <div class="iq-card-body">
                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">SEO_Keywork</th>
                        <th scope="col">SEO_Description</th>
                        <th scope="col">SEO_Title</th>
                        <th scope="col">Post_id</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($seos as $seo)
                            <tr>
                                <th scope="row">{{$seo->id}}</th>
                                <td>{{$seo->seo_keywords}}</td>
                                <td>{{$seo->seo_description}}</td>
                                <td>{{$seo->seo_title}}</td>
                                <td>{{$seo->posts->id}}</td>
                                <td>
                                    <a href="{{route("post.edit", $seo->posts->id)}}">
                                        <button type="button" class="btn btn-warning mb-3">
                                            <i class="fa-regular fa-pen-to-square" style="margin: 0"></i>
                                        </button>
                                    </a>
                                    <a href="">
                                        <button type="button" class="btn btn-info mb-3">
                                            <i class="fa-solid fa-eye" style="margin: 0"></i>
                                        </button>
                                    </a>
                                    <a href="{{route("post.destroy", $seo->posts->id)}}"
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
