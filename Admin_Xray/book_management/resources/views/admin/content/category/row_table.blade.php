@foreach($categories as $category)
    <tr>
        <th scope="row">{{$category->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$category->category_name}}</td>
        <td>{{$category->category_parent_id}}</td>
        <td>{{$category->category_url}}</td>

        <td>
            <a href="{{route('admin.category.edit',$category->id )}}">Sửa</a>
            <a href="{{route('admin.category.destroy',$category->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
        </td>
    </tr>
    @if($category->childs)
        @include('admin.content.category.row_table', ['categories'=>$category->childs, 'level'=>$level+1])
    @endif
@endforeach
