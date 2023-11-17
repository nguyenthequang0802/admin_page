@foreach($reviews as $review)
    <tr>
        <th scope="row">{{$review->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$review->category_id}}</td>
        <td>{{$review->name}}</td>
        <td>{{$review->description}}</td>
        <td>{{$review->content}}</td>
        <td>{{$review->user_id}}</td>

        <td>
            <a href="{{route('admin.review.edit',$review->id )}}">Sửa</a>
            <a href="{{route('admin.review.destroy',$review->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
        </td>
    </tr>
@endforeach
