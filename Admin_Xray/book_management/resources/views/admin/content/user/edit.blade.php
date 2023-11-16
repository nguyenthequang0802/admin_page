@extends("layout.adminLayoutPage")
@section('content')
    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Sửa đổi user</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route('admin.user.edit', $item->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="user_name">Tên User:</label>
                        <input type="text" class="form-control" id="user_name" name="userName" value="{{$item->name}}">
                    </div>
                    <div class="form-group">
                        <label for="user_phone">Phonenumber:</label>
                        <input type="text" class="form-control" id="user_phone" name="userPhone" value="{{$item->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email user:</label>
                        <input type="text" class="form-control" id="user_email" name="userEmail" value="{{$item->email}}">
                    </div>
                    <div class="form-group">
                        <label for="user_address">Address user:</label>
                        <input type="text" class="form-control" id="user_address" name="userAddress" value="{{$item->address}}">
                    </div>
                    <div class="form-group">
                        <label for="user_psw">Password user:</label>
                        <input type="text" class="form-control" id="user_psw" name="userPassword" value="{{$item->password}}">
                    </div>
                    <div class="form-group">
                        <label for="user_avt">Avatar user:</label>
                        <input type="text" class="form-control" id="user_avt" name="userAvatar" value="{{$item->avatar}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
