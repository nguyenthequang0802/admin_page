@foreach($comments as $comment)
    <option value="{{$comment->id}}">{{str_repeat('----', $level).$comment->parent_id}}</option>
    @if($comment->childs)
        @include('admin.content.comment.comment_option', ['comments'=>$comment->childs, 'level'=>$level+1])
    @endif
@endforeach
