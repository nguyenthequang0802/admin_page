@foreach($comments as $comment)
    <tr>
        <th scope="row">{{$comment->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$comment->parent_id}}</td>
        <td>{{$comment->content}}</td>
        <td>{{$comment->review_id}}</td>
        <td>{{$comment->user_id}}</td>

        <td>
            <a href="{{route('admin.comment.destroy',$comment->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');" >
                <button type="button" class="btn btn-danger mb-3">
                    <i class="fa fa-trash" aria-hidden="true" class="text-center" style="margin: 0"></i>
                </button>
            </a>
        </td>
    </tr>
    @if($comment->childs)
        @include('admin.content.comment.row_table', ['comments'=>$comment->childs, 'level'=>$level+1])
    @endif
@endforeach
