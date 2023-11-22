@foreach($categories as $category)
    <tr>
        <th scope="row">{{$category->id }}</th>
        <td>{{str_repeat("----", $level).$category->category_name}}</td>
        <td>{{$category->category_parent_id}}</td>
        <td>{{$category->category_url}}</td>

        <td>
            <a href="{{route('admin.category.edit',$category->id )}}">
                <button type="button" class="btn btn-warning mb-3">
                    <i class="fa-regular fa-pen-to-square" style="margin: 0"></i>
                </button>
            </a>
            <a href="{{route('admin.category.destroy',$category->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');" >
                <button type="button" class="btn btn-danger mb-3">
                    <i class="fa fa-trash" aria-hidden="true" class="text-center" style="margin: 0"></i>
                </button>
            </a>
        </td>
    </tr>
    @if($category->childs)
        @include('admin.content.category.row_table', ['categories'=>$category->childs, 'level'=>$level+1])
    @endif
@endforeach

