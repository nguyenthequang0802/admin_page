@foreach($users as $user)
    <tr>
        <th scope="row">{{$user->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$user->name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>

        <td>
            <a href="{{route('admin.user.edit',$user->id )}}">
                <button type="button" class="btn btn-warning mb-3">
                    <i class="fa-regular fa-pen-to-square" style="margin: 0"></i>
                </button>
            </a>
            <a href="{{route('admin.user.destroy',$user->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');" >
                <button type="button" class="btn btn-danger mb-3">
                    <i class="fa fa-trash" aria-hidden="true" class="text-center" style="margin: 0"></i>
                </button>
            </a>
        </td>
    </tr>
@endforeach
