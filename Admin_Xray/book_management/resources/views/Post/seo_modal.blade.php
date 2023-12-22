<div class="modal fade bd-example-modal-xl" id="seo-{{$post->seo->id}}" tabindex="-1" role="dialog"   aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$post->seo->seo_title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> SEO Title</th>
                        <th scope="col">SEO Keywords</th>
                        <th scope="col">SEO Description</th>
                    </tr>`
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$post->seo->seo_title}}</td>
                        <td>{{$post->seo->seo_keywords}}</td>
                        <td>{{$post->seo->seo_description}}</td>
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
