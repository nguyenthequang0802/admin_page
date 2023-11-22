@foreach($reviews as $review)
    <tr>
        <th scope="row">{{$review->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$review->category_id}}</td>
        <td>{{$review->name}}</td>
        <td>{{$review->description}}</td>
        <td>{{$review->content}}</td>
        <td>{{$review->user_id}}</td>

        <td>
            <a href="{{route('admin.review.edit',$review->id )}}">
                <button type="button" class="btn btn-warning mb-3">
                    <i class="fa-regular fa-pen-to-square" style="margin: 0"></i>
                </button>
            </a>
            <a href="{{route('admin.review.destroy',$review->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');" >
                <button type="button" class="btn btn-danger mb-3">
                    <i class="fa fa-trash" aria-hidden="true" class="text-center" style="margin: 0"></i>
                </button>
            </a>
        </td>
    </tr>
@endforeach
