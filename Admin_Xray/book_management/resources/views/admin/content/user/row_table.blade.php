@foreach($users as $user)
    <tr>
        <th scope="row">{{$user->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$user->name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>

        <td>
            <a href="{{route('admin.user.edit',$user->id )}}">Sửa</a>
            <a href="{{route('admin.user.destroy',$user->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
        </td>
    </tr>
@endforeach
