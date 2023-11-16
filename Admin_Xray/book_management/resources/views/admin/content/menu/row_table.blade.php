@foreach($menus as $menu)
    <tr>
        <th scope="row">{{$menu->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$menu->menu_name}}</td>
        <td>{{$menu->menu_parent_id}}</td>
        <td>{{$menu->menu_url}}</td>

        <td>
            <a href="{{route('admin.menu.edit',$menu->id )}}">Sửa</a>
            <a href="{{route('admin.menu.destroy',$menu->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
        </td>
    </tr>
    @if($menu->childs)
        @include('admin.content.menu.row_table', ['menus'=>$menu->childs, 'level'=>$level+1])
    @endif
@endforeach
