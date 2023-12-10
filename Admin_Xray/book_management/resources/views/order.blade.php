<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>{{$order->id}}</div>
    <div>Mã đơn hàng: {{$order->code}}</div>
    <table>
        <tr>
            <td>#</td>
            <td>Tên sản phẩm</td>
            <td>Số lượng</td>
            <td>Giá</td>
        </tr>
        @foreach($order -> products as $item)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->pivot->quantity}}</td>
                <td>{{$item->price}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
