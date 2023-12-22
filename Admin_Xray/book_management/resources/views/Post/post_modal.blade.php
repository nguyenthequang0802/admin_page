<div class="modal fade bd-example-modal-xl" id="post-{{$post->id}}" tabindex="-1" role="dialog"   aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$post->title}}</h5>
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
                    </tr>`
                    </thead>
                    <tbody>
                    <tr>
                        <<th scope="row">{{($posts->currentPage()-1)*$posts->perPage()+$loop->index+1}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->image}}</td>
                        <td>{!! $post->content !!}</td>
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
