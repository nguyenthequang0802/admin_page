@foreach($menus as $menu)
    <tr>
        <th scope="row">{{$menu->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$menu->menu_name}}</td>
        <td>{{$menu->menu_parent_id}}</td>
        <td>{{$menu->menu_url}}</td>

        <td>
            <a href="{{route('admin.menu.edit',$menu->id )}}">
                <button type="button" class="btn btn-warning mb-3">
                    <i class="fa-regular fa-pen-to-square" style="margin: 0"></i>
                </button>
            </a>
            <a href="{{route('admin.menu.destroy',$menu->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');" >
                <button type="button" class="btn btn-danger mb-3">
                    <i class="fa fa-trash" aria-hidden="true" class="text-center" style="margin: 0"></i>
                </button>
            </a>
        </td>
    </tr>
    @if($menu->childs)
        @include('admin.content.menu.row_table', ['menus'=>$menu->childs, 'level'=>$level+1])
    @endif
@endforeach
